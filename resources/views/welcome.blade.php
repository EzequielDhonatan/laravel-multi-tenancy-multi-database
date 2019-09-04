<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Multi Tenancy Multi Database</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600"> <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
                    
                    @auth

                        <a href="{{ url('/home') }}">Home</a>

                    @else

                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Cadastro</a>
                        @endif

                    @endauth

                </div> <!-- top-right links -->

            @endif

            <div class="content">

                <div class="title m-b-md">
                    <p>Laravel Multi Tenancy Multi Database</p>
                </div>

                <div class="links">
                    <a href="https://www.linkedin.com/in/ezequieldhonatan/">LinkedIn</a>
                    <a href="https://github.com/ezequieldhonatan/laravel-multi-tenancy-multi-database">GitHub</a>
                </div>

            </div> <!-- content -->

        </div> <!-- flex-center position-ref full-height -->

    </body>
</html>
