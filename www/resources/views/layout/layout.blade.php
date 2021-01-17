<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--=====================================
                    META-TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="Maxime Sieczkowski">
        <meta name="email" content="maxime43200@gmail.com">
        

        <!-- TEMPLATE META -->
        <meta name="name" content="Maxime Sieczkowski - Développeur Web Full Stack">
        <meta name="type" content="Personal Portfolio">
        <meta name="title" content="Maxime Sieczkowski - Développeur Web Full Stack">
        <meta name="keywords" content="portfolio, html, template, bootstrap, bussiness, cv, designer, responsive, développeur web, freelance">
        <meta name="description" content="Maxime Sieczkowski - Développeur Web Full Stack. Je conçois et réalise vos sites vitrines ou e-commerce ainsi que vos campagnes marketing.">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        @yield('title')

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FOR FAVICON -->
        <link rel="icon" href="{{ asset('img/favicon.png') }}">

        <!-- FOR FLATICON -->
        <link rel="stylesheet" href="{{ asset('font/flaticon/index/flaticon.css') }}">

        <!-- FOR FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome.css') }}">

        <!-- FOR SLICK SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

        <!-- FOR GLOBAL STYLE -->
        <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">

        <!-- FOR INDEX PAGE -->
        <link rel="stylesheet" href="{{ asset('css/custom/index.cs') }}s">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        
        @yield('content')

        <!-- FOR BOOTSTRAP -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <!-- FOR SLICK SLIDER -->
        <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom/slick.js') }}"></script>

        <!-- FOR COUNTERUP -->
        <script src="{{ asset('js/vendor/counterup.min.js') }}"></script>
        <script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/custom/counterup.js') }}"></script>

        <!-- FOR INTERACTION -->
        <script src="{{ asset('js/custom/main.js') }}"></script>

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>






