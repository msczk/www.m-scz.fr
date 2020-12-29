@extends('layout.layout')

@section('content')
<!--=====================================
        BACK2TOP BUTTON PART START
=======================================-->
<a class="back2top-btn" href="#">
    <i class="fas fa-long-arrow-alt-up"></i>
</a>
<!--=====================================
        BACK2TOP BUTTON PART END
=======================================-->


<!--=====================================
            NAVBAR PART START
=======================================-->
<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content">
            <a class="navbar-logo" href="index.html"><img src="img/logo.png" alt="logo"></a>
            <button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>

            <div class="navbar-slide">
                <a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>

                <ul class="navbar-list">
                    <li class="navbar-item active"><a class="navbar-link" href="#">Home</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="service.html">services</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="resume.html">resume</a></li>
                    <li class="navbar-item navbar-dropdown">
                        <a class="navbar-link dropdown-indicator" href="#">
                            <span>portfolio</span>
                            <i class="fas fa-plus"></i>
                        </a>
                        <ul class="dropdown-list">
                            <li><a class="dropdown-link" href="portfolio-list.html">Portfolio List</a></li>
                            <li><a class="dropdown-link" href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item navbar-dropdown">
                        <a class="navbar-link dropdown-indicator" href="#">
                            <span>blogs</span>
                            <i class="fas fa-plus"></i>
                        </a>
                        <ul class="dropdown-list">
                            <li><a class="dropdown-link" href="blog-list.html">Blog list</a></li>
                            <li><a class="dropdown-link" href="blog-details.html">blog details</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item"><a class="navbar-link" href="contact.html">contact</a></li>
                </ul>

                <div class="navbar-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-code"></i>
                        <span>need to talk?</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--=====================================
            NAVBAR PART END
=======================================-->


<!--=====================================
            BANNER PART START
=======================================-->
<section class="banner-part">
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
                        <ul class="banner-icon">
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                        <div class="banner-text">
                            <span>Maxime Sieczkowski</span>
                            <h1>{{ __('Développeur Web Full Stack') }}</h1>
                            <p>Helping design your business and personal website build with your demand by html and
                                wordpress. Click the demo work button, you can see my previous project.</p>
                        </div>
                        <div class="banner-btn duel-btn">
                            <a class="btn btn-inline" href="#">
                                <i class="fas fa-arrows-alt"></i>
                                <span>know more</span>
                            </a>
                            <a class="btn btn-inline" href="portfolio.html">
                                <i class="fas fa-boxes"></i>
                                <span>demo work</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            BANNER PART END
=======================================-->


<!--=====================================
            RESUME PART START
=======================================-->
<section class="section resume-part">
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
<!--=====================================
            RESUME PART END
=======================================-->


<!--=====================================
            ABOUT PART START
=======================================-->
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
                                <a target="_blank" href="{{ url('/') }}">
                                    www.m-scz.fr
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="about-btn duel-btn">
                    <a class="btn btn-inline" href="#" download>
                        <i class="fas fa-download"></i>
                        <span>{{ __('téléchargez mon CV') }}</span>
                    </a>
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-headset"></i>
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
<!--=====================================
            ABOUT PART END
=======================================-->


<!--=====================================
            EXPERIENCE PART START
=======================================-->
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
<!--=====================================
            EXPERIENCE PART END
=======================================-->


<!--=====================================
            EDUCATION PART START
=======================================-->
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
<!--=====================================
            EDUCATION PART END
=======================================-->

<!--=====================================
            SERVICE PART START
=======================================-->
<section class="section service-part">
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
                    <h4>website design</h4>
                    <p>I have got much experience working with front-end coding HTML, CSS, SASS, JAVASCRIPT, BOOTSTRAP, JQUERY.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>02</h3>
                    <span class="flaticon-wordpress"></span>
                    <i class="flaticon-wordpress"></i>
                    <h4>wordpress customize</h4>
                    <p>Also have dynamic website development experience with wordpress based solutions, wordpress plugins.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>03</h3>
                    <span class="flaticon-online-ads"></span>
                    <i class="flaticon-online-ads"></i>
                    <h4>web banner</h4>
                    <p>I have helped a lot of companies and startups designing their advertising campaigns and modern websites.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>04</h3>
                    <span class="flaticon-mail"></span>
                    <i class="flaticon-mail"></i>
                    <h4>email signature</h4>
                    <p>I am expert to code HTML email signature for you that can be used in Gmail, Yahoo, Outlook, Mac Mail, Hotmail etc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card service-ghape">
                    <h3>05</h3>
                    <span class="flaticon-responsive-design"></span>
                    <i class="flaticon-responsive-design"></i>
                    <h4>responsive design</h4>
                    <p>I will do responsive website design and build complete website by CSS FLEXBOX, GRID, BOOTSTRAP etc.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <h3>06</h3>
                    <span class="flaticon-tools-and-utensils"></span>
                    <i class="flaticon-tools-and-utensils"></i>
                    <h4>sass coding</h4>
                    <p>SASS is a CSS pre-processor that lets use variables, mixins, loops, functions, imports, and other interesting functionalities .</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="far fa-eye"></i>
                        <span>show more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            SERVICE PART END
=======================================-->



<!--=====================================
            SKILLS PART START
=======================================-->
<section class="section skills-part">
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
                        <img src="img/html.png" alt="html">
                    </div>
                    <div class="skills-name">
                        <p>html</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/css.png" alt="css">
                    </div>
                    <div class="skills-name">
                        <p>css</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/javascript.png" alt="javascript">
                    </div>
                    <div class="skills-name">
                        <p>javascript</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/bootstrap.png" alt="bootstrap">
                    </div>
                    <div class="skills-name">
                        <p>bootstrap</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/jquery.png" alt="jquery">
                    </div>
                    <div class="skills-name">
                        <p>jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/sass.png" alt="sass">
                    </div>
                    <div class="skills-name">
                        <p>sass</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/wordpress.png" alt="wordpress">
                    </div>
                    <div class="skills-name">
                        <p>wordpress</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/react.png" alt="react">
                    </div>
                    <div class="skills-name">
                        <p>react</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/github.png" alt="github">
                    </div>
                    <div class="skills-name">
                        <p>github</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/vscode.png" alt="vscode">
                    </div>
                    <div class="skills-name">
                        <p>vscode</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/photoshop.png" alt="photoshop">
                    </div>
                    <div class="skills-name">
                        <p>photoshop</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="skills-card">
                    <div class="skills-img">
                        <img src="img/illustrator.png" alt="illustrator">
                    </div>
                    <div class="skills-name">
                        <p>illustrator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            SKILLS PART END
=======================================-->


<!--=====================================
            DISCUSS PART START
=======================================-->
<section class="discuss-part">
    <div class="container">
        <div class="row discuss-bg">
            <div class="col-md-7 col-lg-8">
                <div class="discuss-content">
                    <h3>Let’s discuss your idea</h3>
                    <p>Have a thought about your future website? I am always here.</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="discuss-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-paper-plane"></i>
                        <span>Get in Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            DISCUSS PART END
=======================================-->

<!--=====================================
            TESTIMONIAL PART START
=======================================-->
<section class="section testi-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>clients <span>qoute</span></p>
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
                            <a href="#"><img src="img/testi-1.jpg" alt="testi-1"></a>
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
                            <a href="#"><img src="img/testi-2.jpg" alt="testi-2"></a>
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
                            <a href="#"><img src="img/testi-3.jpg" alt="testi-3"></a>
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
                            <a href="#"><img src="img/testi-4.jpg" alt="testi-4"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="fas fa-tint"></i>
                        <span>drop your quote</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            TESTIMONIAL PART END
=======================================-->


<!--=====================================
            BLOG PART START
=======================================-->
<section class="section blog-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>my <span>blogs</span></p>
                    <h2>Some article about my activity &amp; experience</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="blog-1">
                        <div class="blog-oly">
                            <p>html, css</p>
                        </div>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                <p>02 feb 2020</p>
                            </li>
                            <li>
                                <i class="flaticon-share"></i>
                                <p>5 share</p>
                            </li>
                        </ul>
                        <div class="blog-text">
                            <h4><a href="#">Business contents insurance iure ipsam ratione is a type of business...</a></h4>
                        </div>
                        <ul class="blog-link">
                            <li>
                                <a class="btn btn-inline" href="#">read more</a>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <p>13 comments</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="blog-2">
                        <div class="blog-oly">
                            <p>javascript</p>
                        </div>
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <i class="flaticon-calendar"></i>
                                <p>02 feb 2020</p>
                            </li>
                            <li>
                                <i class="flaticon-share"></i>
                                <p>5 share</p>
                            </li>
                        </ul>
                        <div class="blog-text">
                            <h4><a href="#">Business contents insurance iure ipsam ratione is a type of business...</a></h4>
                        </div>
                        <ul class="blog-link">
                            <li>
                                <a class="btn btn-inline" href="#">read more</a>
                            </li>
                            <li>
                                <i class="flaticon-chat"></i>
                                <p>13 comments</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-suggest">
                            <div class="suggest-img">
                                <a href="#"><img src="img/suggest-1.jpg" alt="suggest-1"></a>
                            </div>
                            <div class="suggest-content">
                                <div class="suggest-title">
                                    <h6><a href="#">Business contents insurance is a type of business.</a></h6>
                                </div>
                                <div class="suggest-date">
                                    <i class="flaticon-calendar"></i>
                                    <p>02 feb 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-suggest">
                            <div class="suggest-img">
                                <a href="#"><img src="img/suggest-2.jpg" alt="suggest-2"></a>
                            </div>
                            <div class="suggest-content">
                                <div class="suggest-title">
                                    <h6><a href="#">Business contents insurance is a type of business.</a></h6>
                                </div>
                                <div class="suggest-date">
                                    <i class="flaticon-calendar"></i>
                                    <p>02 feb 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-suggest">
                            <div class="suggest-img">
                                <a href="#"><img src="img/suggest-3.jpg" alt="suggest-3"></a>
                            </div>
                            <div class="suggest-content">
                                <div class="suggest-title">
                                    <h6><a href="#">Business contents insurance is a type of business.</a></h6>
                                </div>
                                <div class="suggest-date">
                                    <i class="flaticon-calendar"></i>
                                    <p>02 feb 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-btn">
                    <a class="btn btn-inline" href="#">
                        <i class="far fa-eye"></i>
                        <span>show more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================
            BLOG PART END
=======================================-->


<!--=====================================
            CONTACT PART START
=======================================-->
<section class="section contact-part">
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
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{ __('Nom') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{ __('Objet') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
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
<!--=====================================
            CONTACT PART END
=======================================-->


<!--=====================================
            FOOTER PART START
=======================================-->
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
                    <li><h6>{{ __('Fait avec ❤ par') }} - <a target="_blank" href="{{ url('/') }}">Maxime Sieczkowski</a></h6></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection