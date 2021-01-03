@extends('layout.layout')

@section('content')

<a class="back2top-btn" href="#">
    <i class="fas fa-long-arrow-alt-up"></i>
</a>

<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content">
            <a class="navbar-logo" href="{{ route('home') }}">
                <img src="{{asset('img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>

            <div class="navbar-slide">
                <a class="navbar-cross" href="javascript:void(0)"><i class="fas fa-times"></i></a>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a class="navbar-link" href="#summary">{{ __('Accueil') }}</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="#resume">{{ __('Parcours') }}</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="#service">{{ __('Services') }}</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="#skills">{{ __('Compétences') }}</a>
                    </li>
                    <li class="navbar-item">
                        <a class="navbar-link" href="#testimonial">{{ __('Témoignages') }}</a>
                    </li>
                </ul>

                <div class="navbar-btn">
                    <a class="btn btn-inline" href="#contact">
                        <i class="fas fa-paper-plane"></i>
                        <span>{{ __('me contacter') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<section id="summary" class="banner-part">
    <div class="banner-bg">
        <div class="container">
            <img class="circle-shape" src="{{ asset('img/circle-shape.png') }}" alt="circle-shape">
            <img class="star-shape" src="{{ asset('img/star-shape.png') }}" alt="star-shape">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-img">
                        <img src="{{ asset('img/banner-hero.png') }}" alt="banner-hero">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-content">
                        <div class="banner-text">
                            <span>Maxime Sieczkowski</span>
                            <h1>{{ __('Développeur Web Full Stack') }}</h1>
                            <p>Helping design your business and personal website build with your demand by html and
                                wordpress. Click the demo work button, you can see my previous project.</p>
                        </div>
                        <div class="banner-btn duel-btn">
                            <a class="btn btn-inline" href="#">
                                <i class="fas fa-arrows-alt"></i>
                                <span>{{ __('En savoir plus') }}</span>
                            </a>
                            <a class="btn btn-inline" href="#">
                                <i class="fas fa-paper-plane"></i>
                                <span>{{ __('Me contacter') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="resume" class="section resume-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('mon') }} <span>{{ __('parcours') }}</span></p>
                    <h2>{{ __('Pour en savoir un peu plus sur moi') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="resume-cate-btn">
                    <li>
                        <button class="cate-btn active" onclick="filter('about-part')">
                            <i class="fas fa-user"></i>
                            <span>{{ __('à propos') }}</span>
                        </button>
                    </li>
                    <li>
                        <button class="cate-btn" onclick="filter('exper-part')">
                            <i class="fas fa-user-tie"></i>
                            <span>{{ __('expérience') }}</span>
                        </button>
                    </li>
                    <li>
                        <button class="cate-btn" onclick="filter('edu-part')">
                            <i class="fas fa-user-graduate"></i>
                            <span>{{ __('diplômes') }}</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section about-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-summery">
                    <h3>{{ __('Je suis') }} <span>Maxime Sieczkowski</span></h3>
                    <p>I’m with broad technical skill-set, very strong attention to detail, and 3 years of experience in front-end web development. Able to multitask and juggle multiple pressing projects simultaneously. On top of the latest trends and technologies. Ability to improvise, troubleshoot, take ownership, and most importantly learn new skills on the job.</p>
                </div>
                <div class="about-list">
                    <ul>
                        <li>
                            <h6>{{ __('Anniversaire') }}:</h6>
                            <p>{{ __('8 Mai 1997') }}</p>
                        </li>
                        <li>
                            <h6>{{ __('Ville') }}:</h6>
                            <p>Yssingeaux (43), France</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h6>{{ __('Téléphone') }}:</h6>
                            <p>
                                <a href="tel:+33612836095">
                                    (+33) 06 12 83 60 95
                                </a>
                            </p>
                        </li>
                        <li>
                            <h6>{{ __('Site') }}:</h6>
                            <p>
                                <a target="_blank" href="{{ route('home') }}">
                                    www.m-scz.fr
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="about-btn duel-btn">
                    <a class="btn btn-inline" href="#" download>
                        <i class="fas fa-download"></i>
                        <span>{{ __('téléchargez CV') }}</span>
                    </a>
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-paper-plane"></i>
                        <span>{{ __('contactez moi') }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{ asset('img/about.png') }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section exper-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-medal"></span>
                    <h4>{{ __('Juin') }} 2020 - {{ __('Aujourd\'hui') }}</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>{{ __('Développeur Web Full Stack') }}</h5>
                            <h6>
                                <a target="_blank" href="https://www.s2asolution.ch">
                                    S2A Solution
                                </a>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-medal"></span>
                    <h4>{{ __('Août') }} 2019 - {{ __('Mai') }} 2020</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>{{ __('Co-Fondateur boutique en ligne') }}</h5>
                            <h6>
                                <a target="_blank" href="https://www.dreamequestrian.com">
                                    Dream Equestrian
                                </a>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-medal"></span>
                    <h4>{{ __('Octobre') }} 2018 - {{ __('Mai') }} 2019</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>{{ __('Développeur Web Full Stack Junior') }}</h5>
                            <h6>
                                <a target="_blank" href="https://www.nobitaweb.com">
                                    Novitàweb
                                </a>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-medal"></span>
                    <h4>{{ __('Octobre') }} 2017 - {{ __('Septembre') }} 2018</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>{{ __('Développeur Web Alternant') }}</h5>
                            <h6>
                                <a target="_blank" href="https://www.nobitaweb.com">
                                    Novitàweb
                                </a>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section edu-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-graduation-cap"></span>
                    <h4>{{ __('Septembre') }} 2017 - {{ __('Juin') }} 2018</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>
                                License Professionneelle METINET
                            </h5>
                            <h6>
                                IUT Lyon 1, Bourg-En-Bresse (01)
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-graduation-cap"></span>
                    <h4>{{ __('Septembre') }} 2015 - {{ __('Juin') }} 2017</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>BTS SIO Option SLAM</h5>
                            <h6>
                                Lycée La Chartreuse Paradis, Le Puy en Velay (43)    
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <span class="flaticon-graduation-cap"></span>
                    <h4>{{ __('Septembre') }} 2013 - {{ __('Juin') }} 2015</h4>
                    <ul>
                        <li>
                            <i class="flaticon-deadline"></i>
                        </li>
                        <li>
                            <h5>
                                Baccalauréat Scientifique Option SVT
                            </h5>
                            <h6>
                                Lycée Emmanuel Chabrier, Yssingeaux (43)
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service" class="section service-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('mes') }} <span>{{ __('services') }}</span></p>
                    <h2>I'm very passionate under about this services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>01</h3>
                    <span class="flaticon-computer"></span>
                    <i class="flaticon-computer"></i>
                    <h4>Refonte web</h4>
                    <p>I have got much experience working with front-end coding HTML, CSS, SASS, JAVASCRIPT, BOOTSTRAP, JQUERY.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>02</h3>
                    <span class="flaticon-wordpress"></span>
                    <i class="flaticon-wordpress"></i>
                    <h4>Site vitirne</h4>
                    <p>Also have dynamic website development experience with wordpress based solutions, wordpress plugins.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>03</h3>
                    <span class="flaticon-shopping-cart"></span>
                    <i class="flaticon-shopping-cart"></i>
                    <h4>Site E-commerce</h4>
                    <p>I have helped a lot of companies and startups designing their advertising campaigns and modern websites.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>04</h3>
                    <span class="flaticon-tools-and-utensils"></span>
                    <i class="flaticon-tools-and-utensils"></i>
                    <h4>Application web</h4>
                    <p>I am expert to code HTML email signature for you that can be used in Gmail, Yahoo, Outlook, Mac Mail, Hotmail etc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>05</h3>
                    <span class="flaticon-online-ads"></span>
                    <i class="flaticon-online-ads"></i>
                    <h4>Marketing digital</h4>
                    <p>I will do responsive website design and build complete website by CSS FLEXBOX, GRID, BOOTSTRAP etc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>06</h3>
                    <span class="flaticon-project-management"></span>
                    <i class="flaticon-project-management"></i>
                    <h4>Projet sur-mesure</h4>
                    <p>SASS is a CSS pre-processor that lets use variables, mixins, loops, functions, imports, and other interesting functionalities .</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="discuss-part">
    <div class="container">
        <div class="row discuss-bg">
            <div class="col-md-7 col-lg-8">
                <div class="discuss-content">
                    <h3>{{ __('Discutons de votre projet') }}</h3>
                    <p>
                        {{ __('Je suis la pour réaliser vos sites internet et campagnes marketing !') }}
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="discuss-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-paper-plane"></i>
                        <span>{{ __('me contacter') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section skills-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('mes') }} <span>{{ __('compétences') }}</span></p>
                    <h2>Expert in this technical web software</h2>
                </div>
            </div>
        </div>
        <div class="row skills-parent">
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/html.png') }}" alt="html">
                    </div>
                    <div class="skills-name">
                        <p>html</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/css.png') }}" alt="css">
                    </div>
                    <div class="skills-name">
                        <p>css</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/javascript.png') }}" alt="javascript">
                    </div>
                    <div class="skills-name">
                        <p>javascript</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/bootstrap.png') }}" alt="bootstrap">
                    </div>
                    <div class="skills-name">
                        <p>bootstrap</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/jquery.png') }}" alt="jquery">
                    </div>
                    <div class="skills-name">
                        <p>jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/sass.png') }}" alt="sass">
                    </div>
                    <div class="skills-name">
                        <p>sass</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/wordpress.png') }}" alt="wordpress">
                    </div>
                    <div class="skills-name">
                        <p>wordpress</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/prestashop.png') }}" alt="prestashop">
                    </div>
                    <div class="skills-name">
                        <p>prestashop</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/laravel.png') }}" alt="laravel">
                    </div>
                    <div class="skills-name">
                        <p>laravel</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/symfony.png') }}" alt="symfony">
                    </div>
                    <div class="skills-name">
                        <p>symfony</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/photoshop.png') }}" alt="photoshop">
                    </div>
                    <div class="skills-name">
                        <p>photoshop</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="{{ asset('img/illustrator.png') }}" alt="illustrator">
                    </div>
                    <div class="skills-name">
                        <p>illustrator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonial" class="section testi-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('les') }} <span>{{ __('témoignages') }}</span></p>
                    <h2>Received fantastic feedback from the clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-slider">
                    <div class="testi-card">
                        <i class="flaticon-favorites"></i>
                        <div class="testi-quote">
                            <p>Oustanding design and collaboration. I'm satisfied work with him.</p>
                        </div>
                        <div class="testi-meta">
                            <h5>austin houston</h5>
                            <p>new york, usa</p>
                            <a href="#"><img src="{{ asset('img/testi-1.jpg') }}" alt="testi-1"></a>
                        </div>
                    </div>
                    <div class="testi-card">
                        <i class="flaticon-favorites"></i>
                        <div class="testi-quote">
                            <p>Oustanding design and collaboration. I'm satisfied work with him.</p>
                        </div>
                        <div class="testi-meta">
                            <h5>devid whigtmore</h5>
                            <p>rome, Italy</p>
                            <a href="#"><img src="{{ asset('img/testi-2.jpg') }}" alt="testi-2"></a>
                        </div>
                    </div>
                    <div class="testi-card">
                        <i class="flaticon-favorites"></i>
                        <div class="testi-quote">
                            <p>Oustanding design and collaboration. I'm satisfied work with him.</p>
                        </div>
                        <div class="testi-meta">
                            <h5>sane galonhop</h5>
                            <p>dubai, uae</p>
                            <a href="#"><img src="{{ asset('img/testi-3.jpg') }}" alt="testi-3"></a>
                        </div>
                    </div>
                    <div class="testi-card">
                        <i class="flaticon-favorites"></i>
                        <div class="testi-quote">
                            <p>Oustanding design and collaboration. I'm satisfied work with him.</p>
                        </div>
                        <div class="testi-meta">
                            <h5>martin howelling</h5>
                            <p>toronto, canada</p>
                            <a href="#"><img src="{{ asset('img/testi-4.jpg') }}" alt="testi-4"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('contactez') }} <span>{{ __('moi') }}</span></p>
                    <h2>{{ __('Discutons de votre futur projet') }}</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon">
                        <i class="flaticon-telephone"></i>
                    </div>
                    <div class="address-text">
                        <h4>{{ __('Téléphone') }}</h4>
                        <p>(+33) 06 12 83 60 95</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <div class="address-text">
                        <h4>email</h4>
                        <p>maxime43200@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="address-text">
                        <h4>{{ __('Ville') }}</h4>
                        <p>Yssingeaux (43), France</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <form method="POST" action="{{ route('message.send') }}">
                    @csrf
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach 
                    @endif

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input value="{{ old('name') }}" required type="text" name="name" class="form-control" placeholder="{{ __('Nom') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input value="{{ old('email') }}" required type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input value="{{ old('subject') }}" required type="text" name="subject" class="form-control" placeholder="{{ __('Objet') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea required class="form-control" name="message" placeholder="Message">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn">
                                <button class="btn btn-inline" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>{{ __('Envoyer') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-img">
                    <img src="{{ asset('img/contact.png') }}" alt="contact">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section footer-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-logo">
                    <a href="#">
                        <img src="{{ asset('img/logo.png') }}" alt="footer-logo">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="footer-text">
                    <li><h6>&copy; Copyright - <span>{{ now()->year }}</span></h6></li>
                    <li><h6>{{ __('Tous droits réservés') }}</h6></li>
                    <li><h6>{{ __('Fait avec ❤ par') }} - <a target="_blank" href="{{ route('home') }}">Maxime Sieczkowski</a></h6></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection