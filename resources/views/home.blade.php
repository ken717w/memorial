<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="">
        <meta property="og:image" content="https://i.imgur.com/f1zZILN.jpg">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/54efbd409e.js" crossorigin="anonymous"></script>
        {{-- App --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="section-profile">
            <div class="container">
                <div class="row">
                    <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-3 offset-lg-4">
                        <div class="avatar mb-3"></div>
                    </div>
                </div>

                <h1 class="display-4 mb-3 font-weight-bold text-center">Fung Yee Ko, Stephen</h1>
                <h4 class="mb-0 text-center">17/12/1934 - 13/12/2021</h4>
            </div>
        </div>

        <div id="section-notice">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <img class="img-fluid mb-3 mb-lg-5" src="https://i.imgur.com/0sCPnGj.jpg">
                        <img class="img-fluid mb-3 mb-lg-5" src="https://i.imgur.com/hji2n9R.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div id="section-messages">
            <div class="container">
                <blockquote class="blockquote">
                    <p>Message</p>

                    <footer class="blockquote-footer">Author</footer>
                </blockquote>
            </div>
        </div>

        <div id="section-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="embed-responsive embed-responsive-3by2">
                            <div class="embed-responsive-item">
                                <div id="carousel-gallery" class="carousel slide h-100" data-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/KUgc0nt.jpg">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/ez6vJsB.jpg">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/0AN0LFE.jpg">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/fXNbJDP.jpg">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/UU2EQTH.jpg">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/395yiWJ.jpg">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-gallery" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-gallery" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-block">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-gallery" data-slide-to="0" class="active">
                                <div style="background-image: url(https://i.imgur.com/KUgc0nt.jpg);"></div>
                            </li>
                            <li data-target="#carousel-gallery" data-slide-to="1">
                                <div style="background-image: url(https://i.imgur.com/ez6vJsB.jpg); background-position-y: 50%;"></div>
                            </li>
                            <li data-target="#carousel-gallery" data-slide-to="2">
                                <div style="background-image: url(https://i.imgur.com/0AN0LFE.jpg); background-position-y: 20%;"></div>
                            </li>
                            <li data-target="#carousel-gallery" data-slide-to="3">
                                <div style="background-image: url(https://i.imgur.com/fXNbJDP.jpg);"></div>
                            </li>
                            <li data-target="#carousel-gallery" data-slide-to="4">
                                <div style="background-image: url(https://i.imgur.com/UU2EQTH.jpg);"></div>
                            </li>
                            <li data-target="#carousel-gallery" data-slide-to="5">
                                <div style="background-image: url(https://i.imgur.com/395yiWJ.jpg);"></div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div id="section-comments">
            <div class="container">
                <h1 class="display-4 mb-3 text-center">To our lovely Stephen</h1>
            </div>
        </div>

        <div id="section-form">
            <div class="container">
                <h1 class="display-4 mb-3 text-center">Leave a tribute</h1>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form class="form" method="POST" action="/comments?redirect=1" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="input-author">名稱</label>
                                <input type="text" name="author" class="form-control" id="input-author" required>
                            </div>
                            <div class="form-group">
                                <label for="input-text">留言</label>
                                <textarea name="text" class="form-control" rows="10" id="input-text" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="photos[]" class="custom-file-input" id="input-photos">
                                    <label class="custom-file-label" for="input-photos">上載相片 (可選)</label>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-secondary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="section-templates">
            <template class="comment image-left">
                <div class="comment image-left">
                    <div class="row">
                        <div class="col-md-6 order-md-last">
                            <div class="comment-body">
                                <div class="comment-author"></div>
                                <div class="comment-date"></div>
                                <div class="comment-text"></div>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-first">
                            <div class="comment-image">
                                <img class="img-fluid" src="">
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <template class="comment image-right">
                <div class="comment image-right">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="comment-body text-right">
                                <div class="comment-author"></div>
                                <div class="comment-date"></div>
                                <div class="comment-text"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="comment-image">
                                <img class="img-fluid" src="">
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <template class="comment image-none">
                <div class="comment image-none">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="comment-body">
                                <div class="comment-author"></div>
                                <div class="comment-date"></div>
                                <div class="comment-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        {{-- Scripts --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input@1.3.4/dist/bs-custom-file-input.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
