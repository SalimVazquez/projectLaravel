<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Proyecto Laravel | Manager Project</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Icon -->
    <link rel="icon" href="{{asset('images/logo2.jpeg')}}" sizes="16x16">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body class="is-preload">

    <div id="wrapper">

        <header id="header">

            <h1><a href="javascript::void()">Manager project</a></h1>

        </header>

        <div id="main">

            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="javascript::void()">Manager project</a></h2>
                        <p>Versión 1.0</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">Junio 03, 2020</time>
                    </div>
                </header>
                <p>La función de este gestor es ahorrar tiempo sobre la creación y/o estructura de un
                    proyecto, haciendo clon de uno publicado, con una estructura predefinida.
                    Este es un clon de un proyecto de Laravel, este ya incluye estilos y scripts
                    que hacen funcionar a esta vista.
                    <br>
                    Considerate libre de modificar a tú gusto las vistas. &nbsp; <i class="far fa-smile"></i>
                </p>
                <p>
                    Un cordial saludo
                </p>
            </article>

        </div>

        <section id="sidebar">

            <section id="intro">
                <a href="javascript::void()" class="logo"><img class="img-logo" src="{{asset('images/logo2.jpeg')}}"
                        alt="Logo" /></a>
                <header>
                    <h2>Salim Vazquez Solis</h2>
                    <p><a href="mailto::salimvzqz@gmail.com">salimvzqz@gmail.com</a></p>
                </header>
            </section>

            <section id="footer">
                <ul class="icons">
                    <li><a href="https://www.facebook.com/salim.vazquezsolis.7/" class="icon brands fa-facebook-f"><span
                                class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/salim.vazquez/" class="icon brands fa-instagram"><span
                                class="label">Instagram</span></a></li>
                    <li><a href="https://github.com/SalimVazquez"><i class="fab fa-github"></i></a></li>
                </ul>
            </section>

        </section>

    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>