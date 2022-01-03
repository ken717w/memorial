<?php

namespace App\Http\Controllers;

use Imagick;
use Google\Cloud\Core\Timestamp;
use Google\Cloud\Firestore\DocumentSnapshot;
use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    const FIRESTORE_COLLECTION = 'comments';
    const STORAGE_BUCKET = 'helen-cheung-memorial.appspot.com';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = resolve(FirestoreClient::class);
        $docs = $db->collection(self::FIRESTORE_COLLECTION)->orderBy('timestamp')->documents();

        return array_map(function (DocumentSnapshot $doc) {
            return $this->docToString($doc);
        }, $docs->rows());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'author' => 'required|string|max:255',
            'text' => 'required|string',
            'photos' => 'nullable',
            'photos.*' => 'image',
        ]);

        // Setup storing data
        $data = [
            'author' => $validatedData['author'],
            'timestamp' => new Timestamp(new \DateTime()),
            'text' => $validatedData['text'],
            'photos' => [],
        ];

        // Upload photos to Cloud Storage
        if ($request->hasfile('photos')) {
            $storage = resolve(StorageClient::class);
            $bucket = $storage->bucket(self::STORAGE_BUCKET);

            foreach ($request->file('photos') as $file) {
                $filename = (string) Str::orderedUuid();
                $tmpfile = storage_path(sprintf('%s.compressed.tmp', $filename));

                // Create a compressed version of the image
                $imagick = new Imagick($file->path());
                $imagick->setFormat('jpg');
                $imagick->scaleImage(1920, 1080, true);
                $imagick->writeImage($tmpfile);

                // Upload the original and compressed images
                $bucket->upload(fopen($file->path(), 'r'), [
                    'name' => $filename . '.original'
                ]);

                $bucket->upload(fopen($tmpfile, 'r'), [
                    'name' => $filename . '.compressed'
                ]);

                unlink($tmpfile);

                $data['photos'][] = sprintf('https://storage.googleapis.com/%s/%s.compressed', self::STORAGE_BUCKET, $filename);
            }
        }

        // Upload data to Cloud Firestore
        $db = resolve(FirestoreClient::class);
        $doc = $db->collection(self::FIRESTORE_COLLECTION)->add($data);

        if ($request->query('redirect', false)) {
            return redirect('/');
        }

        return $this->docToString($doc->snapshot());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = resolve(FirestoreClient::class);
        $doc = $db->collection(self::FIRESTORE_COLLECTION)->document($id)->snapshot();

        if ($doc->exists()) {
            return $this->docToString($doc);
        } else {
            abort(404);
        }
    }

    private function docToString(DocumentSnapshot $doc)
    {
        return [
            'author' => $doc['author'],
            'timestamp' => (string) $doc['timestamp'],
            'text' => $doc['text'],
            'photos' => $doc['photos'],
        ];
    }
}
