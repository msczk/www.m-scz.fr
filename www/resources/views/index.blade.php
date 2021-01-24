@extends('layout.layout')

@section('title')
<title>Maxime Sieczkowski - {{ __('Développeur Web Full Stack') }}</title>
@endsection

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
                        <a class="navbar-link" href="#structure">
                            {{ __('Structure projet') }}
                        </a>
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
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_sSF6EG.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-content">
                        <div class="banner-text">
                            <span>Maxime Sieczkowski</span>
                            <h1>{{ __('Développeur Web Full Stack') }}</h1>
                            <p>
                                Passionné par le web et le monde du digital depuis 5 ans, je conçois et réalise vos sites vitrines ou e-commerce ainsi que vos campagnes marketing.
                            </p>
                            <br>
                            <p>
                                En 2021, être présent sur internet est incontournable : faites donc appel à mes services !
                            </p>
                        </div>
                        <div class="banner-btn duel-btn">
                            <a class="btn btn-inline" href="#resume">
                                <i class="fas fa-arrows-alt"></i>
                                <span>{{ __('En savoir plus') }}</span>
                            </a>
                            <a class="btn btn-inline" href="#contact">
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
                    <p>Développeur Web Full Stack depuis 3 ans et passionné de marketing, je suis à votre disposition pour réaliser vos projets de création de sites internet vitrine, e-commerce, de développement spécifique ou d’applications web. Je travaille avec les dernières technologies du web pour vous proposer des réalisations modernes, multi-support (mobile, tablette, ordinateur) et adaptées à vos besoins.</p>
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
                    {{--<a class="btn btn-inline" href="#" download>
                        <i class="fas fa-download"></i>
                        <span>{{ __('téléchargez CV') }}</span> --}}
                    </a>
                    <a class="btn btn-inline" href="#contact">
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
                                Licence Professionnelle METINET
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
                                Baccalauréat Scientifique
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

<section class="discuss-part">
    <div class="container">
        <div class="row discuss-bg">
            <div class="col-lg-8">
                <div class="discuss-content">
                    <h3>{{ __('Discutons de votre projet') }}</h3>
                    <p>
                        {{ __('Je suis la pour réaliser vos sites internet et campagnes marketing !') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="discuss-btn">
                    <a class="btn btn-inline" href="#contact">
                        <i class="fas fa-file-invoice"></i>
                        <span>{{ __('Devis gratuit') }}</span>
                    </a>
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
                    <h2>{{ __('La solution sur mesure à votre projet') }}</h2>
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
                    <p>{{ __('Faites une mise à jour visuelle sur votre site ou réalisez une nouvelle charte graphique') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>02</h3>
                    <span class="flaticon-wordpress"></span>
                    <i class="flaticon-wordpress"></i>
                    <h4>Site vitirne</h4>
                    <p>{{ __('Présentez votre activité professionnelle sur un site moderne et complet') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>03</h3>
                    <span class="flaticon-shopping-cart"></span>
                    <i class="flaticon-shopping-cart"></i>
                    <h4>Site E-commerce</h4>
                    <p>{{ __('Vendez sur internet en toute sécurité et faites grossir votre boutique') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>04</h3>
                    <span class="flaticon-tools-and-utensils"></span>
                    <i class="flaticon-tools-and-utensils"></i>
                    <h4>Application web</h4>
                    <p>{{ __('CRM, Marketplace, Application mobile, donnez vie à votre projet') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>05</h3>
                    <span class="flaticon-online-ads"></span>
                    <i class="flaticon-online-ads"></i>
                    <h4>Marketing digital</h4>
                    <p>{{ __('Réalisez des campagnes marketing sur Facebook, Instagram ou Google pour promouvoir votre marque') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>06</h3>
                    <span class="flaticon-graduation-cap"></span>
                    <i class="flaticon-graduation-cap"></i>
                    <h4>Coaching & Audit</h4>
                    <p>{{ __('Préparez votre transition digitale avec un expert') }}</p>
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
                    <h2>{{ __('J\'ai ce qu\'il vous faut') }}</h2>
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

<section id="newsletter" class="discuss-part">
    <div class="container">
        <div class="row discuss-bg">
            <div class="col-md-12">
                <form method="POST" action="{{ route('newsletter.subscribe') }}">
                    @csrf                   
                    <div class="row">
                        <div class="col">
                            <div class="discuss-content text-center">
                                <h3>Inscrivez-vous à la newsletter</h3>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input value="{{ old('email-newsletter') }}" required type="text" name="email-newsletter" class="form-control" placeholder="{{ __('Votre email') }}">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-btn">
                                <button id="newsletter-submit" class="btn btn-purple" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>S'abonner</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('success-newsletter'))
                        <div class="alert alert-success">
                            {{ session()->get('success-newsletter') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach 
                    @endif
                </form>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="structure" class="section coding-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>{{ __('structure d\'un') }} <span>{{ __('projet') }}</span></p>
                    <h2>{{ __('Comment je fonctionne') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="coding-content">
                    <h3>Collaborer sur un projet n'a jamais été aussi <span>simple</span></h3>
                    <p>Le processus de création d'une solution se déroule en 4 étapes :</p>
                </div>
                <ul class="coding-list">
                    <li>
                        <span class="coding-round"></span>
                        <p>Réunion et cahier des charges</p>
                    </li>
                    <li>
                        <span class="coding-round"></span>
                        <p>Phase de développement</p>
                    </li>
                    <li>
                        <span class="coding-round"></span>
                        <p>Présentation et mise en place des retours</p>
                    </li>
                    <li>
                        <span class="coding-round"></span>
                        <p>Livraison du projet</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_0tue65cn.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
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
                        <p>hello@m-scz.fr</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon">
                        <i class="flaticon-pin"></i>
                    </div>
                    <div class="address-text">
                        <h4>{{ __('Localisation') }}</h4>
                        <p>Yssingeaux (43), France</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <form method="POST" action="{{ route('message.send') }}">
                    @csrf
                    @if(session()->has('success-contact'))
                        <div class="alert alert-success">
                            {{ session()->get('success-contact') }}
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