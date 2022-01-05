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
                    <p>父親自小在天主教香港華仁書院受教育，一生虔敬天主、安份守己，凡事他都藉着信仰和禱告交托天父，信望愛是父親一直以來行事的底藴。</p>

                    <p>父親希望身邊所有人都可以和他一樣得到信仰的平安和喜樂，母親和我們三兄弟姊妹當然因為父親的熏陶篤信天父，最令人感動的是父親過去不斷向身為佛教徒的嫲嫲講解天主的道理，嫲嫲最後在臨終前一個月歸信天主並接受領洗；而婆婆（外祖母）亦同樣在回到天父懷抱之前幾個月，領受天主的道理並接受洗禮。</p>

                    <p>父親一生與人為善，極受身邊的人愛戴。父親投身政府服務社會之前，曾經擔任教師，雖然只是短短四年的教師生涯，但他對學生的真心關懷和幫助，令很多學生都十分尊敬他。例如他知道有學生因為收入問題不能繳交學費，父親不但認真向他剖析學歷與知識的重要性，勸他一定要繼續學業，更為他介紹工作令他可以有足夠收入負擔夜校和生活費用。所以有些學生在往後五十年都仍然和父親保持聯絡，定期探望父親。</p>

                    <p>父親之後三十多年一直在政府工作，期間認識的同事都很喜歡他親善沒有架子的性格，更加欣賞他公正和樂於教導別人的態度。父親退休後仍常與舊同事敘舊，也有下屬不時探訪他，他們皆異口同聲稱讚父親對所有同事表現關愛、一視同仁。他們說父親的關懷不只惠及同事，連他們的家人也會給予照應。其中一次，父親因為不忍看見一名下屬遺孀因經濟拮据而為口奔馳，他便積極聯繫協助那位女士應徵工作，最後令她成功成為政府文員，生活從此穩定有保障。</p>

                    <p>德不孤必有鄰，父親愛人如己的性格令有需要的親友從不會害怕找他幫忙，父親告訴我們他從來不期望回報或金錢償還，只要能夠幫助他們解決困難便心滿意足。除了親友，對素未謀面的陌生人，父親也一樣關愛對待，我們多次見到父親在不同情況下遇見一些身體似有不適的陌生人，他都會上前問候並主動提供幫助。例如還不過幾年前，父親身體已大不如前，我們仍目睹他在餐廳用膳時遇上一位有嚴重濕疹的侍應，父親關切建議他求醫並表示願意代他支付醫生費用，令對方感到溫暖更懂珍惜自己健康。以上種種都是父親人緣極好的原因，亦是我們學習的楷模。</p>

                    <p>父親在退休之後，仍然積極運用在政府服務社區的經驗幫助鄰居和社群，他曾出任所住大廈的業主立案法團主席多年，辦事公平公正，旨在全心全意為各業戶謀福利，改善大家生活環境。</p>

                    <p>父親對家人的細心照顧更是佳話，他一生孝順父母，事事以他們為先，從不逆父母意見，只要能令父母健康、生活過得愜意的事情他都努力去做。父親喜歡文學、生平節儉，從不重視物質生活，只在乎用心經營家庭的安穩和子女的教育，因為對他來說妻子兒女才是他一生的瑰寶。現在我們兄弟姊妹仨都各有自己的事業，母親也弄孫為樂、健康安享晚年。</p>

                    <p>偶然記起有一次我們問素來節儉的父親為何熱心奉獻教會，他解釋因為他是我們的榜樣，他希望我們明白不該以金錢去衡量是否值得去做一件事，應考量是否對人有益。又記起另一次我們駕車時被另一職業司機輕微碰撞，父親立即提醒我們對方以駕駛為職業，收入並不會太豐厚，囑咐我們要求的賠償不要影響對方生計。在任何情況下，父親永遠是一貫善良正直，以體恤別人為先。</p>

                    <p>父親堅實的信仰令他有一顆強壯而柔軟的心，他從來不發怒、不抱怨、也不怪責別人，面對逆境或困難時，仍然可憑著信心和希望泰然帶着身邊的人一起走過。我們會好好遵從父親的教誨，與人為善，活在主內，關愛身邊所有人。</p>

                    <footer class="blockquote-footer">女兒 兒子<br>　 思敏，裕祺，思雅</footer>
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
                                        <div class="carousel-item h-100">
                                            <img class="d-block mw-100 mh-100 mx-auto" src="https://i.imgur.com/gjkgkn8.jpg">
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
                            <li data-target="#carousel-gallery" data-slide-to="6">
                                <div style="background-image: url(https://i.imgur.com/gjkgkn8.jpg);"></div>
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
