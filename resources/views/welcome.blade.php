<!DOCTYPE html>
<html lang="zh-Hans">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('resources/fonts.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', 'fzlantingyuans-db1-gbregular', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">进入大厅</a>
                    @else
                        <a href="{{ url('/login') }}">登陆</a>
                        <a href="{{ url('/register') }}">注册</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    魔城马车
                </div>
                <div class="subtitle m-b-md">
                    Coach Ride to Devil's Castle
                </div>

                <div class="links">
                    <a href="https://baike.baidu.com/item/魔城马车/1579453?fr=zhidao_relate">简要规则（百度百科）</a>
                    <a href="https://github.com/fakedestinyck/CoachRideToDevilsCastle">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
