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
                    <img class="circle-shape" src="img/circle-shape.png" alt="circle-shape">
                    <img class="star-shape" src="img/star-shape.png" alt="star-shape">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-img">
                                <img src="img/banner-hero.png" alt="banner-hero">
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
                                    <span>Welcome dear!</span>
                                    <h1>In my own hand-crafted frontend development world.</h1>
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
                            <p>my <span>resume</span></p>
                            <h2>Some basic information about myself</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="resume-cate-btn">
                            <li>
                                <button class="cate-btn active" onclick="filter('about-part')">
                                    <i class="fas fa-user"></i>
                                    <span>about me</span>
                                </button>
                            </li>
                            <li>
                                <button class="cate-btn" onclick="filter('exper-part')">
                                    <i class="fas fa-user-tie"></i>
                                    <span>experience</span>
                                </button>
                            </li>
                            <li>
                                <button class="cate-btn" onclick="filter('edu-part')">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>education</span>
                                </button>
                            </li>
                            <li>
                                <button class="cate-btn" onclick="filter('refer-part')">
                                    <i class="fas fa-users"></i>
                                    <span>reference</span>
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
                            <h3>I'm Mahmudul hasan (miron)</h3>
                            <p>I’m with broad technical skill-set, very strong attention to detail, and 3 years of experience in front-end web development. Able to multitask and juggle multiple pressing projects simultaneously. On top of the latest trends and technologies. Ability to improvise, troubleshoot, take ownership, and most importantly learn new skills on the job.</p>
                        </div>
                        <div class="about-list">
                            <ul>
                                <li>
                                    <h6>Birthday:</h6>
                                    <p>02 Februray 1995</p>
                                </li>
                                <li>
                                    <h6>Lives in:</h6>
                                    <p>Narayanganj, Bangladesh</p>
                                </li>
                                <li>
                                    <h6>Website:</h6>
                                    <p>www.mironmahmud.com</p>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <h6>Phone:</h6>
                                    <p>(+880) 1838288389</p>
                                </li>
                                <li>
                                    <h6>Skype:</h6>
                                    <p>live:mironhasan018</p>
                                </li>
                                <li>
                                    <h6>Linkedin:</h6>
                                    <p>/mironcoder</p>
                                </li>
                            </ul>
                        </div>
                        <div class="about-btn duel-btn">
                            <a class="btn btn-inline" href="#" download>
                                <i class="fas fa-download"></i>
                                <span>Download CV</span>
                            </a>
                            <a class="btn btn-inline" href="#">
                                <i class="fas fa-headset"></i>
                                <span>contact me</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="img/about.png" alt="about">
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
                            <h4>Feb 2016 - Dec 2017</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Frontend Developer</h5>
                                    <h6>Creative-It Institute</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-medal"></span>
                            <h4>Feb 2017 - Dec 2018</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Frontend Developer</h5>
                                    <h6>Ingenious-hub Team</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-medal"></span>
                            <h4>Feb 2018 - Dec 2019</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Frontend Developer</h5>
                                    <h6>Icon-Infotech Limited</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-medal"></span>
                            <h4>Feb 2019 - Dec 2020</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Frontend Developer</h5>
                                    <h6>Xpeedstudio</h6>
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
                            <h4>apr 2017 - Running</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>B.S.S Honourse at Economics</h5>
                                    <h6>Government Tolaram college, Narayanganj</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-graduation-cap"></span>
                            <h4>jan 2015 - feb 2017</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Alim / H.S.C - GPA : 4.57</h5>
                                    <h6>Government Madrasha-E Alia, Dhaka</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-graduation-cap"></span>
                            <h4>jan 2013 - dec 2015</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>Dakhil / S.S.C - GPA : 450</h5>
                                    <h6>Islami Mission Kamil Madrasha</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="resume-card">
                            <span class="flaticon-graduation-cap"></span>
                            <h4>jan 2011 - dec 2013</h4>
                            <ul>
                                <li>
                                    <i class="flaticon-deadline"></i>
                                </li>
                                <li>
                                    <h5>J.D.C / J.S.C - GPA : 467</h5>
                                    <h6>Badarpur Senior Alim Madrasha</h6>
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
                    REFERENCE PART START
        =======================================-->
        <section class="section refer-part cate-active">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="refer-card">
                            <div class="refer-img">
                                <img src="img/refer-1.jpg" alt="refer-1">
                            </div>
                            <div class="refer-content">
                                <h4>Maccelam Bond</h4>
                                <p>Sr. Ux / Ui Designer <span>at Creative It Institute</span></p>
                                <ul class="refer-contact">
                                    <li><a class="icon icon-inline" href="#"><i class="fas fa-phone-alt"></i></a></li>
                                    <li><a class="icon icon-inline" href="#"><i class="fas fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="refer-card">
                            <div class="refer-img">
                                <img src="img/refer-2.jpg" alt="refer-2">
                            </div>
                            <div class="refer-content">
                                <h4>Lady Watsona</h4>
                                <p>Deputy Manager <span>at Icon Infotech LTD</span></p>
                                <ul class="refer-contact">
                                    <li><a class="icon icon-inline" href="#"><i class="fas fa-phone-alt"></i></a></li>
                                    <li><a class="icon icon-inline" href="#"><i class="fas fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    REFERENCE PART END
        =======================================-->

        
        <!--=====================================
                    SERVICE PART START
        =======================================-->
        <section class="section service-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>my <span>services</span></p>
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
                    CODING PART START
        =======================================-->
        <section class="section coding-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>coding <span>structure</span></p>
                            <h2>How do I organize of my coding structure</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="coding-content">
                            <h3>Build your SAAS landing page using the <span>intelligent BEM interface</span></h3>
                            <p>Blocks, Elements and Modifiers. A smart HTML/CSS structure that can easely be reused. Layout driven by the purpose of modularity.</p>
                        </div>
                        <ul class="coding-list">
                            <li>
                                <span class="coding-round"></span>
                                <p>Simple and Smart HTML code structure</p>
                            </li>
                            <li>
                                <span class="coding-round"></span>
                                <p>Works reintegrated in any part of the layout</p>
                            </li>
                            <li>
                                <span class="coding-round"></span>
                                <p>Reuse the elements from one design to another</p>
                            </li>
                            <li>
                                <span class="coding-round"></span>
                                <p>Looks good on all devices Responsive code</p>
                            </li>
                            <li>
                                <span class="coding-round"></span>
                                <p>Meaningful comment in each section</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="coding-img">
                            <img src="img/coding.jpg" alt="coding">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CODING PART END
        =======================================-->


        <!--=====================================
                    PORTFOLIO PART START
        =======================================-->
        <section class="section port-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>my <span>portfolio</span></p>
                            <h2>Take a look some of my featured projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="port-slider">
                            <div class="port-card">
                                <div class="port-img">
                                    <img src="img/port-1.jpg" alt="port-1">
                                </div>
                                <div class="port-oly">
                                    <div class="port-btn">
                                        <a class="btn btn-inline" href="#">live preview</a>
                                        <a class="btn btn-inline" href="#">view details</a>
                                    </div>
                                    <div class="port-text">
                                        <h6>Corporate website</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="port-card">
                                <div class="port-img">
                                    <img src="img/port-2.jpg" alt="port-2">
                                </div>
                                <div class="port-oly">
                                    <div class="port-btn">
                                        <a class="btn btn-inline" href="#">live preview</a>
                                        <a class="btn btn-inline" href="#">view details</a>
                                    </div>
                                    <div class="port-text">
                                        <h6>App landing page</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="port-card">
                                <div class="port-img">
                                    <img src="img/port-3.jpg" alt="port-3">
                                </div>
                                <div class="port-oly">
                                    <div class="port-btn">
                                        <a class="btn btn-inline" href="#">live preview</a>
                                        <a class="btn btn-inline" href="#">view details</a>
                                    </div>
                                    <div class="port-text">
                                        <h6>Job marketplace</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="port-card">
                                <div class="port-img">
                                    <img src="img/port-4.jpg" alt="port-4">
                                </div>
                                <div class="port-oly">
                                    <div class="port-btn">
                                        <a class="btn btn-inline" href="#">live preview</a>
                                        <a class="btn btn-inline" href="#">view details</a>
                                    </div>
                                    <div class="port-text">
                                        <h6>creative agency</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="port-card">
                                <div class="port-img">
                                    <img src="img/port-5.jpg" alt="port-5">
                                </div>
                                <div class="port-oly">
                                    <div class="port-btn">
                                        <a class="btn btn-inline" href="#">live preview</a>
                                        <a class="btn btn-inline" href="#">view details</a>
                                    </div>
                                    <div class="port-text">
                                        <h6>FM radio station</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="port-show-btn">
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
                    PORTFOLIO PART END
        =======================================-->


        <!--=====================================
                    SKILLS PART START
        =======================================-->
        <section class="section skills-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>my <span>skills</span></p>
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
                <div class="discuss-oly">
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
            </div>
        </section>
        <!--=====================================
                    DISCUSS PART END
        =======================================-->


        <!--=====================================
                    COUNTER PART START
        =======================================-->
        <section class="counter-part">
            <div class="counter-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="counter-card count-1">
                                <i class="flaticon-project-management"></i>
                                <div class="counter-info">
                                    <h3><span class="counter-number">122</span>+</h3>
                                    <p>Project completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="counter-card count-2">
                                <i class="flaticon-handshake"></i>
                                <div class="counter-info">
                                    <h3><span class="counter-number">108</span>+</h3>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="counter-card count-3">
                                <i class="flaticon-rating"></i>
                                <div class="counter-info">
                                    <h3><span class="counter-number">98</span>%</h3>
                                    <p>Possitive Feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    COUNTER PART END
        =======================================-->


        <!--=====================================
                    PRICING PART START
        =======================================-->
        <section class="section pricing-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>pricing <span>plan</span></p>
                            <h2>Pricing plan will be change by discussion</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card">
                            <div class="pricing-money">
                                <h3>basic</h3>
                                <h4>$30.00</h4>
                                <p>per project</p>
                            </div>
                            <ul class="pricing-list">
                                <li>One landing page</li>
                                <li>With responsive</li>
                                <li>modern design</li>
                                <li>Three rivision</li>
                                <li>four section</li>
                            </ul>
                            <div class="pricing-btn">
                                <a class="btn btn-inline" href="#">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Purchase plan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card pricing-recom">
                            <div class="pricing-money">
                                <h3>standard</h3>
                                <h4>$60.00</h4>
                                <p>per project</p>
                            </div>
                            <ul class="pricing-list">
                                <li>One landing page</li>
                                <li>With responsive</li>
                                <li>modern design</li>
                                <li>five rivision</li>
                                <li>six section</li>
                            </ul>
                            <div class="pricing-btn">
                                <a class="btn btn-inline" href="#">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Purchase plan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card">
                            <div class="pricing-money">
                                <h3>premium</h3>
                                <h4>$99.00</h4>
                                <p>per project</p>
                            </div>
                            <ul class="pricing-list">
                                <li>One landing page</li>
                                <li>With responsive</li>
                                <li>modern design</li>
                                <li>eight rivision</li>
                                <li>nine section</li>
                            </ul>
                            <div class="pricing-btn">
                                <a class="btn btn-inline" href="#">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Purchase plan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PRICING PART END
        =======================================-->


        <!--=====================================
                    FAQ PART START
        =======================================-->
        <section class="section faq-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <p>faq <span>question</span></p>
                            <h2>Find your question before we work together</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="faq-parent">
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>What needs to be done to place your order ?</button>
                                </div>
                                <div class="faq-ans">
                                    <p>psd / png / jpg / pdf / any source file or reference link must be provided. If
                                        nothing else, tell me your needs, likes, or thoughts.</p>
                                </div>
                            </div>
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>I don't have PSD and JPG but I have Idea...</button>
                                </div>
                                <div class="faq-ans">
                                    <p>No problem, you will give me your idea and requirements of your website, in this case
                                        i'll help you to generate idea.</p>
                                </div>
                            </div>
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>What If I provide JPG file instant of PSD file ?</button>
                                </div>
                                <div class="faq-ans">
                                    <p>In this case the photos will be used in the website will not have good quality. But I
                                        can provide you with similar photos with limited cost.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="faq-parent">
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>How long will I take to handover your project ?</button>
                                </div>
                                <div class="faq-ans">
                                    <p>It depends on the complexity of your project but I've team so, I'm capable to finish your project faster than anyone else.</p>
                                </div>
                            </div>
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>If i don't get my project according to my requirement ?
                                    </button>
                                </div>
                                <div class="faq-ans">
                                    <p>Well It never happened. In this case i'll redesign for you if the design doesn't full fill your requirement.</p>
                                </div>
                            </div>
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>Do you use any automated Software conversion ?</button>
                                </div>
                                <div class="faq-ans">
                                    <p>Never! All codes are hand-typed code with well commented and W3C Validated.</p>
                                </div>
                            </div>
                            <div class="faq-child">
                                <div class="faq-que">
                                    <button>Will I get pixel perfect design ?</button>
                                </div>
                                <div class="faq-ans">
                                    <p>Yes, You will get a pixel perfect and fresh design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    FAQ PART END
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
                            <p>contact <span>me</span></p>
                            <h2>I'm always open to discussion time spand</h2>
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
                                <h4>phone</h4>
                                <p>(+880) 1838288389 <span>(+880) 1941101915</span></p>
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
                                <p>mironcoder@gmail.com <span>mironbonny1994@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="contact-address">
                            <div class="address-icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="address-text">
                                <h4>location</h4>
                                <p>1420 East Delpara <span>Narayanganj, Bangladesh</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
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
                                            <span>send message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="contact-img">
                            <img src="img/contact.png" alt="contact">
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
                            <a href="#"><img src="img/logo.png" alt="footer-logo"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="footer-icon">
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="footer-text">
                            <li><h6>&copy; Copyright - <span>2020</span></h6></li>
                            <li><h6>All rights reserved by - <a target="_blank" href="https://themeforest.net/user/mironcoder">mironcoder</a></h6></li>
                            <li><h6>Developed by - <a target="_blank" href="https://mironmahmud.com/">mironmahmud</a></h6></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    FOOTER PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
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






