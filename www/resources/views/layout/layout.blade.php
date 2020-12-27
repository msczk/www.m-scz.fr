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
        <meta name="name" content="Portlab">
        <meta name="type" content="Personal Portfolio">
        <meta name="title" content="Portlab - Personal Portfolio Bootstrap HTML Template">
        <meta name="keywords" content="portlab, portfolio, personal, html, template, bootstrap, bussiness, clean, creative, resume, cv, designer, responsive, minimal, freelancer">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>Portlab - Home</title>

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
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>






