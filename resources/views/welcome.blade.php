<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Garbage Collection System</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/1/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="public/1/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="public/1ts/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

</head>


<body>

    <div class="boxed_wrapper ltr">



        <!-- Main header-->
        <header class="main-header header-style-one">

            <!--Start Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="header-top__left">
                            <div class="header-contact-info-style1">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="text">
                                            <p>Colombo 10, Sri Lanka</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:yourmail@email.com">info@garbagecollectionsystem.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-time"></span>
                                        </div>
                                        <div class="text">
                                            <p>Mon - sun 9:00 am to 6:00 pm</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="header-top__right">
                            <div class="header-button-style1">
                                <a class="btn-one" href="http://127.0.0.1:8000/login">
                                    <span class="txt">
                                        Request for a pickup Garbage<i class="icon-refresh arrow"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Top-->

            <!--Start Header-->
            <div class="header">
                <div class="auto-container">
                    <div class="outer-box">

                        <!--Start Header Left-->
                        <div class="header-left">
                            <div class="main-logo-box">
                                <a href="index.h">
                                    <img src="public/1/images/resources/logo.png" alt="Awesome Logo" title="">
                                </a>
                            </div>
                            
                        </div>
                        <!--End Header Left-->

                        <!--Start Header Middle-->
                        <div class="header-middle">
                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix scroll-nav">

                                            <li><a href="#banner">Home</a></li>
                                            <li><a href="#about">About Us</a></li>
                                            <li><a href="#services">Services</a></li> 
											<li><a href="#contact">Contact</a></li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                        <!--End Header Middle-->

                        <!--Start Header Right-->
                        <div class="header-right">
                            <div class="phone-number-box1">
                                <div class="icon">
                                    <span class="icon-phone-ringing"></span>
                                </div>
                                <div class="phone">
                                    <p>Have any questions?</p>
                                    <a href="tel:0712891848">0712891848</a>
                                </div>
                            </div>

                            <div class="serach-button-style1">
                                <button type="button" class="search-toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </div>

                        </div>
                        <!--End Header Right-->

                    </div>
                </div>
            </div>
            <!--End header-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo float-left">
                            <a href="index.html" class="img-responsive">
                                <img src="public/1/images/resources/sticky-logo.png" alt="" title="">
                            </a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="public/1/images/resources/mobilemenu-logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                   
                    
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>


        <!-- Start Main Slider -->
        <section id="banner" class="main-slider style1">
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(public/1/images/slides/slide-v1-1.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="sub-title">
                                   
                                </div>
                                <div class="big-title">
                                    <h2>
                                        Home Trash &<br> Recycling <span>Pickup</span><br> Company
                                    </h2>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="about.html">
                                       
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(public/1/images/slides/slide-v1-2.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                
                                <div class="big-title">
                                    <h2>
                                        Waste Management.<br> Dumpster Rentals.<br> Garbage Pickup.
                                    </h2>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="about.html">
                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(public/1/images/slides/slide-v1-3.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                
                                <div class="big-title">
                                    <h2>
                                        Home Trash &<br> Recycling <span>Pickup</span><br> 
                                    </h2>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="about.html">
                                       
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Main Slider -->

        

        <!--Start About Style1 Area-->
        <section id="about" class="about-style1-area">
            <div class="shape1"></div>
            <div class="container">
                <div class="row text-right-rtl">
                    <div class="col-xl-6">
                        <div class="about-style1__image clearfix">
                            <div class="text-outer">westo</div>
                            <div class="border-top"></div>
                            <div class="border-left"></div>
                            <div class="border-bottom"></div>
                            <div class="border-right"></div>
                            <ul>
                                <li>
                                    
                                </li>
                                <li>
                                    <div class="img-box">
                                        <img src="public/1/images/about/15.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style1__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Get to Know About Us</h3>
                                </div>
                                <h2>We’re Leader in Waste<br> Management Services</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>Colombo Municipal Corporation plans to launch a website to launch unified garbage collection, where volunteers in the district can report the garbage dumped and the garbage trucks can load it. Through this, social and environmental problems such as prevention of environmental pollution, prevention of space problems, prevention of disease problems are minimized.</p>
                                </div>

                                <div class="progress-levels">
                                    
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style1 Area-->

        <!--Start Service Style1 Area-->
        <section id="services" class="service-style1-area">
            <div class="service-style1__bg"
                style="background-image: url(public/1/images/parallax-background/service-style1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="service-style1__top">
                            <div class="service-style1__top-title">
                                <div class="sec-title sec-title--style2">
                                    <div class="sub-title">
                                        <h3>Our Services</h3>
                                    </div>
                                    <h2>Waste Services</h2>
                                </div>
                                <div class="text">
                                    <p>The service of the colombo municipal Council website is to  check the user uploaded data and images on polluted places and clean it.</p>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
                <div class="row text-right-rtl">
                  
                </div>
            </div>
        </section>
        <!--End Service Style1 Area-->


        <!--Start Partner Area-->
        <section class="partner-area">
            <div class="container">
                <div class="brand-content">
                    <div class="inner">
                        <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Partner Area-->

       
       

    

        <!--Start Contact Info Style1 Area-->
        <section id="contact" class="contact-info-style1-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-8">
                        <div class="contact-info-style1__box">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h3>Send a Message</h3>
                                </div>
                                <h2>Request a Free Quote</h2>
                            </div>
                            <div class="contact-form">
                                <form id="contact-form" name="contact_form" class="default-form2"
                                    action="assets/inc/sendmail.php" method="post">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input type="text" name="form_name" id="formName"
                                                        placeholder="Full Name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input type="email" name="form_email" id="formEmail"
                                                        placeholder="Email Address" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input type="text" name="form_phone" value="" id="formPhone"
                                                        placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <div class="input-box">
                                                    <input type="text" name="form_subject" value="" id="formSubject"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group style2">
                                                <div class="input-box">
                                                    <textarea name="form_message" id="formMessage"
                                                        placeholder="Write a Message" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                    type="hidden" value="">
                                                <button class="btn-one" type="submit"
                                                    data-loading-text="Please wait...">
                                                    <span class="txt">Send Message<i
                                                            class="icon-refresh arrow"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </section>
        <!--End Contact Info Style1 Area-->


      
                <!--End Footer-->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="bottom-inner">
                            <div class="copyright">
                                <p>Copyright &copy; 2023&nbsp;Garbage Collection System&nbsp; <a href="index.html">&nbsp;</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!--End footer area-->
        </div>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>

        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="icon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">waste</a></li>
                        <li><a href="index.html">Dumpster</a></li>
                        <li><a href="index.html">Zerowaste</a></li>
                        <li><a href="index.html">Garbage</a></li>
                        <li><a href="index.html">trash</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->
    </div>



    <script src="public/1/js/jquery.js"></script>
    <script src="public/1/js/aos.js"></script>
    <script src="public/1/js/appear.js"></script>
    <script src="public/1/js/bootstrap.bundle.min.js"></script>
    <script src="public/1/js/isotope.js"></script>
    <script src="public/1/js/jquery.bootstrap-touchspin.js"></script>
    <script src="public/1/js/jquery.countTo.js"></script>
    <script src="public/1/js/jquery.easing.min.js"></script>
    <script src="public/1/js/jquery.event.move.js"></script>
    <script src="public/1/js/jquery.fancybox.js"></script>
    <script src="public/1/js/jquery.magnific-popup.min.js"></script>
    <script src="public/1/js/jquery.nice-select.min.js"></script>
    <script src="public/1/js/jquery.paroller.min.js"></script>
    <script src="public/1/js/jquery-sidebar-content.js"></script>
    <script src="public/1/js/knob.js"></script>
    <script src="public/1/js/map-script.js"></script>
    <script src="public/1/js/owl.js"></script>
    <script src="public/1/js/pagenav.js"></script>
    <script src="public/1/js/scrollbar.js"></script>
    <script src="public/1/js/swiper.min.js"></script>
    <script src="public/1/js/tilt.jquery.js"></script>
    <script src="public/1/js/TweenMax.min.js"></script>
    <script src="public/1/js/validation.js"></script>
    <script src="public/1/js/wow.js"></script>

    <script src="public/1/js/jquery-1color-switcher.min.js"></script>


    <!-- thm custom script -->
    <script src="public/1/js/custom.js"></script>

    <style>

    @charset "UTF-8";

/*!
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2015 Daniel Eden
*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

@-webkit-keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
    transform: translate3d(0,-4px,0);
  }
}

@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
    transform: translate3d(0,-4px,0);
  }
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  transform-origin: center bottom;
}

@-webkit-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

@keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

.flash {
  -webkit-animation-name: flash;
  animation-name: flash;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}

@-webkit-keyframes shake {
  0%, 100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes shake {
  0%, 100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake;
}

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

.swing {
  -webkit-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing;
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.tada {
  -webkit-animation-name: tada;
  animation-name: tada;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: none;
    transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: none;
    transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

.wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble;
}

@-webkit-keyframes jello {
  11.1% {
    -webkit-transform: none;
            transform: none
  }

  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg)
  }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg)
  }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg)
  }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg)
  }
  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
            transform: skewX(-0.78125deg) skewY(-0.78125deg)
  }
  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
            transform: skewX(0.390625deg) skewY(0.390625deg)
  }
  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            transform: skewX(-0.1953125deg) skewY(-0.1953125deg)
  }
  100% {
    -webkit-transform: none;
            transform: none
  }
}

@keyframes jello {
  11.1% {
    -webkit-transform: none;
            transform: none
  }

  22.2% {

    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
            transform: skewX(-12.5deg) skewY(-12.5deg)
  }
  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
            transform: skewX(6.25deg) skewY(6.25deg)
  }
  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
            transform: skewX(-3.125deg) skewY(-3.125deg)
  }
  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
            transform: skewX(1.5625deg) skewY(1.5625deg)
  }
  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
            transform: skewX(-0.78125deg) skewY(-0.78125deg)
  }
  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
            transform: skewX(0.390625deg) skewY(0.390625deg)
  }
  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            transform: skewX(-0.1953125deg) skewY(-0.1953125deg)
  }
  100% {
    -webkit-transform: none;
            transform: none
  }
}



.jello{
    -webkit-animation-name:jello;
            animation-name:jello;
    -webkit-transform-origin: center;

            transform-origin: center
}

@-webkit-keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
}

@-webkit-keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInLeft {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInRight {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight;
}

@-webkit-keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp;
}

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }
}

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut;
}

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight;
}

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp;
}


@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    transform: translateX(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    -ms-transform: translateX(20px);
    transform: translateX(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    transform: translateX(2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    transform: translateY(2000px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }
}

@keyframes fadeOutDown {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    transform: translateX(-20px);
  }
}

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
  }
}

@keyframes fadeOutRight {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    -ms-transform: translateX(20px);
    transform: translateX(20px);
  }
}

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig;
}

@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

@keyframes fadeOutUp {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig;
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
    transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
    transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip;
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX;
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY;
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

.flipOutX {
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY;
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
  animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out;
}

@-webkit-keyframes lightSpeedOut {
  0% {
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
  animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in;
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn;
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

.rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut;
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight;
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight;
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

@keyframes rollOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

.rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut;
}

@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
}

@-webkit-keyframes zoomInStable {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  33.333% {
    opacity: 1;
	-webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  
  66.666666% {
    opacity: 1;
	-webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes zoomInStable {
 0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  33.333% {
    opacity: 1;
	-webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  
  66.666666% {
    opacity: 1;
	-webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.zoomInStable {
  -webkit-animation-name: zoomInStable;
  animation-name: zoomInStable;
}

@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown;
}

@-webkit-keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp;
}

@-webkit-keyframes zoomOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  100% {
    opacity: 0;
  }
}

@keyframes zoomOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  100% {
    opacity: 0;
  }
}

.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut;
}

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown;
}

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center;
  }
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center;
  }
}

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft;
}

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center;
  }
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center;
  }
}

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight;
}

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp;
}

@-webkit-keyframes slideInDown {
  0% {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInDown {
  0% {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
}

@-webkit-keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInLeft {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft;
}

@-webkit-keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}

@-webkit-keyframes slideInUp {
  0% {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInUp {
  0% {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp;
}

@-webkit-keyframes slideOutDown {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

@keyframes slideOutDown {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

.slideOutDown {
  -webkit-animation-name: slideOutDown;
  animation-name: slideOutDown;
}

@-webkit-keyframes slideOutLeft {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

@keyframes slideOutLeft {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.slideOutLeft {
  -webkit-animation-name: slideOutLeft;
  animation-name: slideOutLeft;
}

@-webkit-keyframes slideOutRight {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

@keyframes slideOutRight {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

.slideOutRight {
  -webkit-animation-name: slideOutRight;
  animation-name: slideOutRight;
}

@-webkit-keyframes slideOutUp {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

@keyframes slideOutUp {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

.slideOutUp {
  -webkit-animation-name: slideOutUp;
  animation-name: slideOutUp;
}

@keyframes anime {
from {
	opacity: 0;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-moz-transform: scaleY(0);
	-ms-transform: scaleY(0);
	-o-transform: scaleY(0);
}
to {
	opacity: 1;
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-ms-transform: scaleY(1);
	-o-transform: scaleY(1);
	-moz-transform: scaleY(1);
}
}

@-webkit-keyframes anime {
from {
	opacity: 0;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-moz-transform: scaleY(0);
	-ms-transform: scaleY(0);
	-o-transform: scaleY(0);
}
to {
	opacity: 1;
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-ms-transform: scaleY(1);
	-o-transform: scaleY(1);
	-moz-transform: scaleY(1);
}
}

@-moz-keyframes anime {
from {
	opacity: 0;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-moz-transform: scaleY(0);
	-ms-transform: scaleY(0);
	-o-transform: scaleY(0);
}
to {
	opacity: 1;
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-ms-transform: scaleY(1);
	-o-transform: scaleY(1);
	-moz-transform: scaleY(1);
}

}

@-o-keyframes anime {
from {
	opacity: 0;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-moz-transform: scaleY(0);
	-ms-transform: scaleY(0);
	-o-transform: scaleY(0);
}
to {
	opacity: 1;
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-ms-transform: scaleY(1);
	-o-transform: scaleY(1);
	-moz-transform: scaleY(1);
}
}

@-ms-keyframes anime {
from {
	opacity: 0;
	transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-moz-transform: scaleY(0);
	-ms-transform: scaleY(0);
	-o-transform: scaleY(0);
}
to {
	opacity: 1;
	transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-ms-transform: scaleY(1);
	-o-transform: scaleY(1);
	-moz-transform: scaleY(1);
}

}

[data-aos][data-aos][data-aos-duration="50"],body[data-aos-duration="50"] [data-aos]{transition-duration:50ms}[data-aos][data-aos][data-aos-delay="50"],body[data-aos-delay="50"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="50"].aos-animate,body[data-aos-delay="50"] [data-aos].aos-animate{transition-delay:50ms}[data-aos][data-aos][data-aos-duration="100"],body[data-aos-duration="100"] [data-aos]{transition-duration:.1s}[data-aos][data-aos][data-aos-delay="100"],body[data-aos-delay="100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="100"].aos-animate,body[data-aos-delay="100"] [data-aos].aos-animate{transition-delay:.1s}[data-aos][data-aos][data-aos-duration="150"],body[data-aos-duration="150"] [data-aos]{transition-duration:.15s}[data-aos][data-aos][data-aos-delay="150"],body[data-aos-delay="150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="150"].aos-animate,body[data-aos-delay="150"] [data-aos].aos-animate{transition-delay:.15s}[data-aos][data-aos][data-aos-duration="200"],body[data-aos-duration="200"] [data-aos]{transition-duration:.2s}[data-aos][data-aos][data-aos-delay="200"],body[data-aos-delay="200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="200"].aos-animate,body[data-aos-delay="200"] [data-aos].aos-animate{transition-delay:.2s}[data-aos][data-aos][data-aos-duration="250"],body[data-aos-duration="250"] [data-aos]{transition-duration:.25s}[data-aos][data-aos][data-aos-delay="250"],body[data-aos-delay="250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="250"].aos-animate,body[data-aos-delay="250"] [data-aos].aos-animate{transition-delay:.25s}[data-aos][data-aos][data-aos-duration="300"],body[data-aos-duration="300"] [data-aos]{transition-duration:.3s}[data-aos][data-aos][data-aos-delay="300"],body[data-aos-delay="300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="300"].aos-animate,body[data-aos-delay="300"] [data-aos].aos-animate{transition-delay:.3s}[data-aos][data-aos][data-aos-duration="350"],body[data-aos-duration="350"] [data-aos]{transition-duration:.35s}[data-aos][data-aos][data-aos-delay="350"],body[data-aos-delay="350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="350"].aos-animate,body[data-aos-delay="350"] [data-aos].aos-animate{transition-delay:.35s}[data-aos][data-aos][data-aos-duration="400"],body[data-aos-duration="400"] [data-aos]{transition-duration:.4s}[data-aos][data-aos][data-aos-delay="400"],body[data-aos-delay="400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="400"].aos-animate,body[data-aos-delay="400"] [data-aos].aos-animate{transition-delay:.4s}[data-aos][data-aos][data-aos-duration="450"],body[data-aos-duration="450"] [data-aos]{transition-duration:.45s}[data-aos][data-aos][data-aos-delay="450"],body[data-aos-delay="450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="450"].aos-animate,body[data-aos-delay="450"] [data-aos].aos-animate{transition-delay:.45s}[data-aos][data-aos][data-aos-duration="500"],body[data-aos-duration="500"] [data-aos]{transition-duration:.5s}[data-aos][data-aos][data-aos-delay="500"],body[data-aos-delay="500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="500"].aos-animate,body[data-aos-delay="500"] [data-aos].aos-animate{transition-delay:.5s}[data-aos][data-aos][data-aos-duration="550"],body[data-aos-duration="550"] [data-aos]{transition-duration:.55s}[data-aos][data-aos][data-aos-delay="550"],body[data-aos-delay="550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="550"].aos-animate,body[data-aos-delay="550"] [data-aos].aos-animate{transition-delay:.55s}[data-aos][data-aos][data-aos-duration="600"],body[data-aos-duration="600"] [data-aos]{transition-duration:.6s}[data-aos][data-aos][data-aos-delay="600"],body[data-aos-delay="600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="600"].aos-animate,body[data-aos-delay="600"] [data-aos].aos-animate{transition-delay:.6s}[data-aos][data-aos][data-aos-duration="650"],body[data-aos-duration="650"] [data-aos]{transition-duration:.65s}[data-aos][data-aos][data-aos-delay="650"],body[data-aos-delay="650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="650"].aos-animate,body[data-aos-delay="650"] [data-aos].aos-animate{transition-delay:.65s}[data-aos][data-aos][data-aos-duration="700"],body[data-aos-duration="700"] [data-aos]{transition-duration:.7s}[data-aos][data-aos][data-aos-delay="700"],body[data-aos-delay="700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="700"].aos-animate,body[data-aos-delay="700"] [data-aos].aos-animate{transition-delay:.7s}[data-aos][data-aos][data-aos-duration="750"],body[data-aos-duration="750"] [data-aos]{transition-duration:.75s}[data-aos][data-aos][data-aos-delay="750"],body[data-aos-delay="750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="750"].aos-animate,body[data-aos-delay="750"] [data-aos].aos-animate{transition-delay:.75s}[data-aos][data-aos][data-aos-duration="800"],body[data-aos-duration="800"] [data-aos]{transition-duration:.8s}[data-aos][data-aos][data-aos-delay="800"],body[data-aos-delay="800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="800"].aos-animate,body[data-aos-delay="800"] [data-aos].aos-animate{transition-delay:.8s}[data-aos][data-aos][data-aos-duration="850"],body[data-aos-duration="850"] [data-aos]{transition-duration:.85s}[data-aos][data-aos][data-aos-delay="850"],body[data-aos-delay="850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="850"].aos-animate,body[data-aos-delay="850"] [data-aos].aos-animate{transition-delay:.85s}[data-aos][data-aos][data-aos-duration="900"],body[data-aos-duration="900"] [data-aos]{transition-duration:.9s}[data-aos][data-aos][data-aos-delay="900"],body[data-aos-delay="900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="900"].aos-animate,body[data-aos-delay="900"] [data-aos].aos-animate{transition-delay:.9s}[data-aos][data-aos][data-aos-duration="950"],body[data-aos-duration="950"] [data-aos]{transition-duration:.95s}[data-aos][data-aos][data-aos-delay="950"],body[data-aos-delay="950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="950"].aos-animate,body[data-aos-delay="950"] [data-aos].aos-animate{transition-delay:.95s}[data-aos][data-aos][data-aos-duration="1000"],body[data-aos-duration="1000"] [data-aos]{transition-duration:1s}[data-aos][data-aos][data-aos-delay="1000"],body[data-aos-delay="1000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1000"].aos-animate,body[data-aos-delay="1000"] [data-aos].aos-animate{transition-delay:1s}[data-aos][data-aos][data-aos-duration="1050"],body[data-aos-duration="1050"] [data-aos]{transition-duration:1.05s}[data-aos][data-aos][data-aos-delay="1050"],body[data-aos-delay="1050"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1050"].aos-animate,body[data-aos-delay="1050"] [data-aos].aos-animate{transition-delay:1.05s}[data-aos][data-aos][data-aos-duration="1100"],body[data-aos-duration="1100"] [data-aos]{transition-duration:1.1s}[data-aos][data-aos][data-aos-delay="1100"],body[data-aos-delay="1100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1100"].aos-animate,body[data-aos-delay="1100"] [data-aos].aos-animate{transition-delay:1.1s}[data-aos][data-aos][data-aos-duration="1150"],body[data-aos-duration="1150"] [data-aos]{transition-duration:1.15s}[data-aos][data-aos][data-aos-delay="1150"],body[data-aos-delay="1150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1150"].aos-animate,body[data-aos-delay="1150"] [data-aos].aos-animate{transition-delay:1.15s}[data-aos][data-aos][data-aos-duration="1200"],body[data-aos-duration="1200"] [data-aos]{transition-duration:1.2s}[data-aos][data-aos][data-aos-delay="1200"],body[data-aos-delay="1200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1200"].aos-animate,body[data-aos-delay="1200"] [data-aos].aos-animate{transition-delay:1.2s}[data-aos][data-aos][data-aos-duration="1250"],body[data-aos-duration="1250"] [data-aos]{transition-duration:1.25s}[data-aos][data-aos][data-aos-delay="1250"],body[data-aos-delay="1250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1250"].aos-animate,body[data-aos-delay="1250"] [data-aos].aos-animate{transition-delay:1.25s}[data-aos][data-aos][data-aos-duration="1300"],body[data-aos-duration="1300"] [data-aos]{transition-duration:1.3s}[data-aos][data-aos][data-aos-delay="1300"],body[data-aos-delay="1300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1300"].aos-animate,body[data-aos-delay="1300"] [data-aos].aos-animate{transition-delay:1.3s}[data-aos][data-aos][data-aos-duration="1350"],body[data-aos-duration="1350"] [data-aos]{transition-duration:1.35s}[data-aos][data-aos][data-aos-delay="1350"],body[data-aos-delay="1350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1350"].aos-animate,body[data-aos-delay="1350"] [data-aos].aos-animate{transition-delay:1.35s}[data-aos][data-aos][data-aos-duration="1400"],body[data-aos-duration="1400"] [data-aos]{transition-duration:1.4s}[data-aos][data-aos][data-aos-delay="1400"],body[data-aos-delay="1400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1400"].aos-animate,body[data-aos-delay="1400"] [data-aos].aos-animate{transition-delay:1.4s}[data-aos][data-aos][data-aos-duration="1450"],body[data-aos-duration="1450"] [data-aos]{transition-duration:1.45s}[data-aos][data-aos][data-aos-delay="1450"],body[data-aos-delay="1450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1450"].aos-animate,body[data-aos-delay="1450"] [data-aos].aos-animate{transition-delay:1.45s}[data-aos][data-aos][data-aos-duration="1500"],body[data-aos-duration="1500"] [data-aos]{transition-duration:1.5s}[data-aos][data-aos][data-aos-delay="1500"],body[data-aos-delay="1500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1500"].aos-animate,body[data-aos-delay="1500"] [data-aos].aos-animate{transition-delay:1.5s}[data-aos][data-aos][data-aos-duration="1550"],body[data-aos-duration="1550"] [data-aos]{transition-duration:1.55s}[data-aos][data-aos][data-aos-delay="1550"],body[data-aos-delay="1550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1550"].aos-animate,body[data-aos-delay="1550"] [data-aos].aos-animate{transition-delay:1.55s}[data-aos][data-aos][data-aos-duration="1600"],body[data-aos-duration="1600"] [data-aos]{transition-duration:1.6s}[data-aos][data-aos][data-aos-delay="1600"],body[data-aos-delay="1600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1600"].aos-animate,body[data-aos-delay="1600"] [data-aos].aos-animate{transition-delay:1.6s}[data-aos][data-aos][data-aos-duration="1650"],body[data-aos-duration="1650"] [data-aos]{transition-duration:1.65s}[data-aos][data-aos][data-aos-delay="1650"],body[data-aos-delay="1650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1650"].aos-animate,body[data-aos-delay="1650"] [data-aos].aos-animate{transition-delay:1.65s}[data-aos][data-aos][data-aos-duration="1700"],body[data-aos-duration="1700"] [data-aos]{transition-duration:1.7s}[data-aos][data-aos][data-aos-delay="1700"],body[data-aos-delay="1700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1700"].aos-animate,body[data-aos-delay="1700"] [data-aos].aos-animate{transition-delay:1.7s}[data-aos][data-aos][data-aos-duration="1750"],body[data-aos-duration="1750"] [data-aos]{transition-duration:1.75s}[data-aos][data-aos][data-aos-delay="1750"],body[data-aos-delay="1750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1750"].aos-animate,body[data-aos-delay="1750"] [data-aos].aos-animate{transition-delay:1.75s}[data-aos][data-aos][data-aos-duration="1800"],body[data-aos-duration="1800"] [data-aos]{transition-duration:1.8s}[data-aos][data-aos][data-aos-delay="1800"],body[data-aos-delay="1800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1800"].aos-animate,body[data-aos-delay="1800"] [data-aos].aos-animate{transition-delay:1.8s}[data-aos][data-aos][data-aos-duration="1850"],body[data-aos-duration="1850"] [data-aos]{transition-duration:1.85s}[data-aos][data-aos][data-aos-delay="1850"],body[data-aos-delay="1850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1850"].aos-animate,body[data-aos-delay="1850"] [data-aos].aos-animate{transition-delay:1.85s}[data-aos][data-aos][data-aos-duration="1900"],body[data-aos-duration="1900"] [data-aos]{transition-duration:1.9s}[data-aos][data-aos][data-aos-delay="1900"],body[data-aos-delay="1900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1900"].aos-animate,body[data-aos-delay="1900"] [data-aos].aos-animate{transition-delay:1.9s}[data-aos][data-aos][data-aos-duration="1950"],body[data-aos-duration="1950"] [data-aos]{transition-duration:1.95s}[data-aos][data-aos][data-aos-delay="1950"],body[data-aos-delay="1950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="1950"].aos-animate,body[data-aos-delay="1950"] [data-aos].aos-animate{transition-delay:1.95s}[data-aos][data-aos][data-aos-duration="2000"],body[data-aos-duration="2000"] [data-aos]{transition-duration:2s}[data-aos][data-aos][data-aos-delay="2000"],body[data-aos-delay="2000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2000"].aos-animate,body[data-aos-delay="2000"] [data-aos].aos-animate{transition-delay:2s}[data-aos][data-aos][data-aos-duration="2050"],body[data-aos-duration="2050"] [data-aos]{transition-duration:2.05s}[data-aos][data-aos][data-aos-delay="2050"],body[data-aos-delay="2050"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2050"].aos-animate,body[data-aos-delay="2050"] [data-aos].aos-animate{transition-delay:2.05s}[data-aos][data-aos][data-aos-duration="2100"],body[data-aos-duration="2100"] [data-aos]{transition-duration:2.1s}[data-aos][data-aos][data-aos-delay="2100"],body[data-aos-delay="2100"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2100"].aos-animate,body[data-aos-delay="2100"] [data-aos].aos-animate{transition-delay:2.1s}[data-aos][data-aos][data-aos-duration="2150"],body[data-aos-duration="2150"] [data-aos]{transition-duration:2.15s}[data-aos][data-aos][data-aos-delay="2150"],body[data-aos-delay="2150"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2150"].aos-animate,body[data-aos-delay="2150"] [data-aos].aos-animate{transition-delay:2.15s}[data-aos][data-aos][data-aos-duration="2200"],body[data-aos-duration="2200"] [data-aos]{transition-duration:2.2s}[data-aos][data-aos][data-aos-delay="2200"],body[data-aos-delay="2200"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2200"].aos-animate,body[data-aos-delay="2200"] [data-aos].aos-animate{transition-delay:2.2s}[data-aos][data-aos][data-aos-duration="2250"],body[data-aos-duration="2250"] [data-aos]{transition-duration:2.25s}[data-aos][data-aos][data-aos-delay="2250"],body[data-aos-delay="2250"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2250"].aos-animate,body[data-aos-delay="2250"] [data-aos].aos-animate{transition-delay:2.25s}[data-aos][data-aos][data-aos-duration="2300"],body[data-aos-duration="2300"] [data-aos]{transition-duration:2.3s}[data-aos][data-aos][data-aos-delay="2300"],body[data-aos-delay="2300"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2300"].aos-animate,body[data-aos-delay="2300"] [data-aos].aos-animate{transition-delay:2.3s}[data-aos][data-aos][data-aos-duration="2350"],body[data-aos-duration="2350"] [data-aos]{transition-duration:2.35s}[data-aos][data-aos][data-aos-delay="2350"],body[data-aos-delay="2350"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2350"].aos-animate,body[data-aos-delay="2350"] [data-aos].aos-animate{transition-delay:2.35s}[data-aos][data-aos][data-aos-duration="2400"],body[data-aos-duration="2400"] [data-aos]{transition-duration:2.4s}[data-aos][data-aos][data-aos-delay="2400"],body[data-aos-delay="2400"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2400"].aos-animate,body[data-aos-delay="2400"] [data-aos].aos-animate{transition-delay:2.4s}[data-aos][data-aos][data-aos-duration="2450"],body[data-aos-duration="2450"] [data-aos]{transition-duration:2.45s}[data-aos][data-aos][data-aos-delay="2450"],body[data-aos-delay="2450"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2450"].aos-animate,body[data-aos-delay="2450"] [data-aos].aos-animate{transition-delay:2.45s}[data-aos][data-aos][data-aos-duration="2500"],body[data-aos-duration="2500"] [data-aos]{transition-duration:2.5s}[data-aos][data-aos][data-aos-delay="2500"],body[data-aos-delay="2500"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2500"].aos-animate,body[data-aos-delay="2500"] [data-aos].aos-animate{transition-delay:2.5s}[data-aos][data-aos][data-aos-duration="2550"],body[data-aos-duration="2550"] [data-aos]{transition-duration:2.55s}[data-aos][data-aos][data-aos-delay="2550"],body[data-aos-delay="2550"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2550"].aos-animate,body[data-aos-delay="2550"] [data-aos].aos-animate{transition-delay:2.55s}[data-aos][data-aos][data-aos-duration="2600"],body[data-aos-duration="2600"] [data-aos]{transition-duration:2.6s}[data-aos][data-aos][data-aos-delay="2600"],body[data-aos-delay="2600"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2600"].aos-animate,body[data-aos-delay="2600"] [data-aos].aos-animate{transition-delay:2.6s}[data-aos][data-aos][data-aos-duration="2650"],body[data-aos-duration="2650"] [data-aos]{transition-duration:2.65s}[data-aos][data-aos][data-aos-delay="2650"],body[data-aos-delay="2650"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2650"].aos-animate,body[data-aos-delay="2650"] [data-aos].aos-animate{transition-delay:2.65s}[data-aos][data-aos][data-aos-duration="2700"],body[data-aos-duration="2700"] [data-aos]{transition-duration:2.7s}[data-aos][data-aos][data-aos-delay="2700"],body[data-aos-delay="2700"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2700"].aos-animate,body[data-aos-delay="2700"] [data-aos].aos-animate{transition-delay:2.7s}[data-aos][data-aos][data-aos-duration="2750"],body[data-aos-duration="2750"] [data-aos]{transition-duration:2.75s}[data-aos][data-aos][data-aos-delay="2750"],body[data-aos-delay="2750"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2750"].aos-animate,body[data-aos-delay="2750"] [data-aos].aos-animate{transition-delay:2.75s}[data-aos][data-aos][data-aos-duration="2800"],body[data-aos-duration="2800"] [data-aos]{transition-duration:2.8s}[data-aos][data-aos][data-aos-delay="2800"],body[data-aos-delay="2800"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2800"].aos-animate,body[data-aos-delay="2800"] [data-aos].aos-animate{transition-delay:2.8s}[data-aos][data-aos][data-aos-duration="2850"],body[data-aos-duration="2850"] [data-aos]{transition-duration:2.85s}[data-aos][data-aos][data-aos-delay="2850"],body[data-aos-delay="2850"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2850"].aos-animate,body[data-aos-delay="2850"] [data-aos].aos-animate{transition-delay:2.85s}[data-aos][data-aos][data-aos-duration="2900"],body[data-aos-duration="2900"] [data-aos]{transition-duration:2.9s}[data-aos][data-aos][data-aos-delay="2900"],body[data-aos-delay="2900"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2900"].aos-animate,body[data-aos-delay="2900"] [data-aos].aos-animate{transition-delay:2.9s}[data-aos][data-aos][data-aos-duration="2950"],body[data-aos-duration="2950"] [data-aos]{transition-duration:2.95s}[data-aos][data-aos][data-aos-delay="2950"],body[data-aos-delay="2950"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="2950"].aos-animate,body[data-aos-delay="2950"] [data-aos].aos-animate{transition-delay:2.95s}[data-aos][data-aos][data-aos-duration="3000"],body[data-aos-duration="3000"] [data-aos]{transition-duration:3s}[data-aos][data-aos][data-aos-delay="3000"],body[data-aos-delay="3000"] [data-aos]{transition-delay:0}[data-aos][data-aos][data-aos-delay="3000"].aos-animate,body[data-aos-delay="3000"] [data-aos].aos-animate{transition-delay:3s}[data-aos][data-aos][data-aos-easing=linear],body[data-aos-easing=linear] [data-aos]{transition-timing-function:cubic-bezier(.25,.25,.75,.75)}[data-aos][data-aos][data-aos-easing=ease],body[data-aos-easing=ease] [data-aos]{transition-timing-function:ease}[data-aos][data-aos][data-aos-easing=ease-in],body[data-aos-easing=ease-in] [data-aos]{transition-timing-function:ease-in}[data-aos][data-aos][data-aos-easing=ease-out],body[data-aos-easing=ease-out] [data-aos]{transition-timing-function:ease-out}[data-aos][data-aos][data-aos-easing=ease-in-out],body[data-aos-easing=ease-in-out] [data-aos]{transition-timing-function:ease-in-out}[data-aos][data-aos][data-aos-easing=ease-in-back],body[data-aos-easing=ease-in-back] [data-aos]{transition-timing-function:cubic-bezier(.6,-.28,.735,.045)}[data-aos][data-aos][data-aos-easing=ease-out-back],body[data-aos-easing=ease-out-back] [data-aos]{transition-timing-function:cubic-bezier(.175,.885,.32,1.275)}[data-aos][data-aos][data-aos-easing=ease-in-out-back],body[data-aos-easing=ease-in-out-back] [data-aos]{transition-timing-function:cubic-bezier(.68,-.55,.265,1.55)}[data-aos][data-aos][data-aos-easing=ease-in-sine],body[data-aos-easing=ease-in-sine] [data-aos]{transition-timing-function:cubic-bezier(.47,0,.745,.715)}[data-aos][data-aos][data-aos-easing=ease-out-sine],body[data-aos-easing=ease-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.39,.575,.565,1)}[data-aos][data-aos][data-aos-easing=ease-in-out-sine],body[data-aos-easing=ease-in-out-sine] [data-aos]{transition-timing-function:cubic-bezier(.445,.05,.55,.95)}[data-aos][data-aos][data-aos-easing=ease-in-quad],body[data-aos-easing=ease-in-quad] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quad],body[data-aos-easing=ease-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quad],body[data-aos-easing=ease-in-out-quad] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-cubic],body[data-aos-easing=ease-in-cubic] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-cubic],body[data-aos-easing=ease-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-cubic],body[data-aos-easing=ease-in-out-cubic] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos][data-aos][data-aos-easing=ease-in-quart],body[data-aos-easing=ease-in-quart] [data-aos]{transition-timing-function:cubic-bezier(.55,.085,.68,.53)}[data-aos][data-aos][data-aos-easing=ease-out-quart],body[data-aos-easing=ease-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.25,.46,.45,.94)}[data-aos][data-aos][data-aos-easing=ease-in-out-quart],body[data-aos-easing=ease-in-out-quart] [data-aos]{transition-timing-function:cubic-bezier(.455,.03,.515,.955)}[data-aos^=fade][data-aos^=fade]{opacity:0;transition-property:opacity,transform}[data-aos^=fade][data-aos^=fade].aos-animate{opacity:1;transform:translateZ(0)}[data-aos=fade-up]{transform:translate3d(0,100px,0)}[data-aos=fade-down]{transform:translate3d(0,-100px,0)}[data-aos=fade-right]{transform:translate3d(-100px,0,0)}[data-aos=fade-left]{transform:translate3d(100px,0,0)}[data-aos=fade-up-right]{transform:translate3d(-100px,100px,0)}[data-aos=fade-up-left]{transform:translate3d(100px,100px,0)}[data-aos=fade-down-right]{transform:translate3d(-100px,-100px,0)}[data-aos=fade-down-left]{transform:translate3d(100px,-100px,0)}[data-aos^=zoom][data-aos^=zoom]{opacity:0;transition-property:opacity,transform}[data-aos^=zoom][data-aos^=zoom].aos-animate{opacity:1;transform:translateZ(0) scale(1)}[data-aos=zoom-in]{transform:scale(.6)}[data-aos=zoom-in-up]{transform:translate3d(0,100px,0) scale(.6)}[data-aos=zoom-in-down]{transform:translate3d(0,-100px,0) scale(.6)}[data-aos=zoom-in-right]{transform:translate3d(-100px,0,0) scale(.6)}[data-aos=zoom-in-left]{transform:translate3d(100px,0,0) scale(.6)}[data-aos=zoom-out]{transform:scale(1.2)}[data-aos=zoom-out-up]{transform:translate3d(0,100px,0) scale(1.2)}[data-aos=zoom-out-down]{transform:translate3d(0,-100px,0) scale(1.2)}[data-aos=zoom-out-right]{transform:translate3d(-100px,0,0) scale(1.2)}[data-aos=zoom-out-left]{transform:translate3d(100px,0,0) scale(1.2)}[data-aos^=slide][data-aos^=slide]{transition-property:transform}[data-aos^=slide][data-aos^=slide].aos-animate{transform:translateZ(0)}[data-aos=slide-up]{transform:translate3d(0,100%,0)}[data-aos=slide-down]{transform:translate3d(0,-100%,0)}[data-aos=slide-right]{transform:translate3d(-100%,0,0)}[data-aos=slide-left]{transform:translate3d(100%,0,0)}[data-aos^=flip][data-aos^=flip]{backface-visibility:hidden;transition-property:transform}[data-aos=flip-left]{transform:perspective(2500px) rotateY(-100deg)}[data-aos=flip-left].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-right]{transform:perspective(2500px) rotateY(100deg)}[data-aos=flip-right].aos-animate{transform:perspective(2500px) rotateY(0)}[data-aos=flip-up]{transform:perspective(2500px) rotateX(-100deg)}[data-aos=flip-up].aos-animate{transform:perspective(2500px) rotateX(0)}[data-aos=flip-down]{transform:perspective(2500px) rotateX(100deg)}[data-aos=flip-down].aos-animate{transform:perspective(2500px) rotateX(0)}

/*!
 * Bootstrap v4.2.1 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus{outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#6c757d}.blockquote-footer::before{content:"\2014\00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:#e83e8c;word-break:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#212529}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-ms-flex-order:-1;order:-1}.order-last{-ms-flex-order:13;order:13}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-4{-ms-flex-order:4;order:4}.order-5{-ms-flex-order:5;order:5}.order-6{-ms-flex-order:6;order:6}.order-7{-ms-flex-order:7;order:7}.order-8{-ms-flex-order:8;order:8}.order-9{-ms-flex-order:9;order:9}.order-10{-ms-flex-order:10;order:10}.order-11{-ms-flex-order:11;order:11}.order-12{-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-ms-flex-order:-1;order:-1}.order-sm-last{-ms-flex-order:13;order:13}.order-sm-0{-ms-flex-order:0;order:0}.order-sm-1{-ms-flex-order:1;order:1}.order-sm-2{-ms-flex-order:2;order:2}.order-sm-3{-ms-flex-order:3;order:3}.order-sm-4{-ms-flex-order:4;order:4}.order-sm-5{-ms-flex-order:5;order:5}.order-sm-6{-ms-flex-order:6;order:6}.order-sm-7{-ms-flex-order:7;order:7}.order-sm-8{-ms-flex-order:8;order:8}.order-sm-9{-ms-flex-order:9;order:9}.order-sm-10{-ms-flex-order:10;order:10}.order-sm-11{-ms-flex-order:11;order:11}.order-sm-12{-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-ms-flex-order:-1;order:-1}.order-md-last{-ms-flex-order:13;order:13}.order-md-0{-ms-flex-order:0;order:0}.order-md-1{-ms-flex-order:1;order:1}.order-md-2{-ms-flex-order:2;order:2}.order-md-3{-ms-flex-order:3;order:3}.order-md-4{-ms-flex-order:4;order:4}.order-md-5{-ms-flex-order:5;order:5}.order-md-6{-ms-flex-order:6;order:6}.order-md-7{-ms-flex-order:7;order:7}.order-md-8{-ms-flex-order:8;order:8}.order-md-9{-ms-flex-order:9;order:9}.order-md-10{-ms-flex-order:10;order:10}.order-md-11{-ms-flex-order:11;order:11}.order-md-12{-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-ms-flex-order:-1;order:-1}.order-lg-last{-ms-flex-order:13;order:13}.order-lg-0{-ms-flex-order:0;order:0}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}.order-lg-4{-ms-flex-order:4;order:4}.order-lg-5{-ms-flex-order:5;order:5}.order-lg-6{-ms-flex-order:6;order:6}.order-lg-7{-ms-flex-order:7;order:7}.order-lg-8{-ms-flex-order:8;order:8}.order-lg-9{-ms-flex-order:9;order:9}.order-lg-10{-ms-flex-order:10;order:10}.order-lg-11{-ms-flex-order:11;order:11}.order-lg-12{-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-ms-flex-order:-1;order:-1}.order-xl-last{-ms-flex-order:13;order:13}.order-xl-0{-ms-flex-order:0;order:0}.order-xl-1{-ms-flex-order:1;order:1}.order-xl-2{-ms-flex-order:2;order:2}.order-xl-3{-ms-flex-order:3;order:3}.order-xl-4{-ms-flex-order:4;order:4}.order-xl-5{-ms-flex-order:5;order:5}.order-xl-6{-ms-flex-order:6;order:6}.order-xl-7{-ms-flex-order:7;order:7}.order-xl-8{-ms-flex-order:8;order:8}.order-xl-9{-ms-flex-order:9;order:9}.order-xl-10{-ms-flex-order:10;order:10}.order-xl-11{-ms-flex-order:11;order:11}.order-xl-12{-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}}.table{width:100%;margin-bottom:1rem;background-color:transparent}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table .table{background-color:#fff}.table-sm td,.table-sm th{padding:.3rem}.table-bordered{border:1px solid #dee2e6}.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th{border:0}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#7abaff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}.table-hover .table-secondary:hover{background-color:#c8cbcf}.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#8fd19e}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#86cfda}.table-hover .table-info:hover{background-color:#abdde5}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#ffdf7e}.table-hover .table-warning:hover{background-color:#ffe8a1}.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#ed969e}.table-hover .table-danger:hover{background-color:#f1b0b7}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#fbfcfc}.table-hover .table-light:hover{background-color:#ececf6}.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#95999c}.table-hover .table-dark:hover{background-color:#b9bbbe}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#212529;border-color:#32383e}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#212529}.table-dark td,.table-dark th,.table-dark thead th{border-color:#32383e}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{background-color:rgba(255,255,255,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;height:calc(2.25rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media screen and (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding-top:.375rem;padding-bottom:.375rem;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{height:calc(1.8125rem + 2px);padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.form-control-lg{height:calc(2.875rem + 2px);padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}select.form-control[multiple],select.form-control[size]{height:auto}textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#28a745}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(40,167,69,.9);border-radius:.25rem}.form-control.is-valid,.was-validated .form-control:valid{border-color:#28a745;padding-right:2.25rem;background-repeat:no-repeat;background-position:center right calc(2.25rem / 4);background-size:calc(2.25rem / 2) calc(2.25rem / 2);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e")}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.form-control.is-valid~.valid-feedback,.form-control.is-valid~.valid-tooltip,.was-validated .form-control:valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip{display:block}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:2.25rem;background-position:top calc(2.25rem / 4) right calc(2.25rem / 4)}.custom-select.is-valid,.was-validated .custom-select:valid{border-color:#28a745;padding-right:3.4375rem;background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") no-repeat center right 1.75rem/1.125rem 1.125rem}.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-select.is-valid~.valid-feedback,.custom-select.is-valid~.valid-tooltip,.was-validated .custom-select:valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip{display:block}.form-control-file.is-valid~.valid-feedback,.form-control-file.is-valid~.valid-tooltip,.was-validated .form-control-file:valid~.valid-feedback,.was-validated .form-control-file:valid~.valid-tooltip{display:block}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#28a745}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#28a745}.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before{border-color:#28a745}.custom-control-input.is-valid~.valid-feedback,.custom-control-input.is-valid~.valid-tooltip,.was-validated .custom-control-input:valid~.valid-feedback,.was-validated .custom-control-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before{border-color:#34ce57;background-color:#34ce57}.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before{border-color:#28a745}.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#28a745}.custom-file-input.is-valid~.valid-feedback,.custom-file-input.is-valid~.valid-tooltip,.was-validated .custom-file-input:valid~.valid-feedback,.was-validated .custom-file-input:valid~.valid-tooltip{display:block}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:2.25rem;background-repeat:no-repeat;background-position:center right calc(2.25rem / 4);background-size:calc(2.25rem / 2) calc(2.25rem / 2);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E")}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:2.25rem;background-position:top calc(2.25rem / 4) right calc(2.25rem / 4)}.custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#dc3545;padding-right:3.4375rem;background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") no-repeat center right 1.75rem/1.125rem 1.125rem}.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip{display:block}.form-control-file.is-invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-tooltip,.was-validated .form-control-file:invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#dc3545}.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before{border-color:#dc3545}.custom-control-input.is-invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-tooltip,.was-validated .custom-control-input:invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before{border-color:#e4606d;background-color:#e4606d}.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before{border-color:#dc3545}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#dc3545}.custom-file-input.is-invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-tooltip,.was-validated .custom-file-input:invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip{display:block}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:-ms-flexbox;display:flex;-ms-flex:0 0 auto;flex:0 0 auto;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .custom-select,.form-inline .input-group{width:auto}.form-inline .form-check{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media screen and (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary.focus,.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-success.focus,.btn-success:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}.btn-info.focus,.btn-info:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-warning{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#212529;background-color:#e0a800;border-color:#d39e00}.btn-warning.focus,.btn-warning:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130}.btn-danger.focus,.btn-danger:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-light.focus,.btn-light:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-dark.focus,.btn-dark:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-outline-primary{color:#007bff;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success{color:#28a745;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#28a745;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info{color:#17a2b8;border-color:#17a2b8}.btn-outline-info:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#17a2b8;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark{color:#343a40;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#007bff}.btn-link:hover{color:#0056b3;text-decoration:underline}.btn-link.focus,.btn-link:focus{text-decoration:underline;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{transition:opacity .15s linear}@media screen and (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}@media screen and (prefers-reduced-motion:reduce){.collapsing{transition:none}}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu-right{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-right{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-right{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-right{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-right{right:0;left:auto}}.dropdown-menu-left{right:auto;left:0}@media (min-width:576px){.dropdown-menu-sm-left{right:auto;left:0}}@media (min-width:768px){.dropdown-menu-md-left{right:auto;left:0}}@media (min-width:992px){.dropdown-menu-lg-left{right:auto;left:0}}@media (min-width:1200px){.dropdown-menu-xl-left{right:auto;left:0}}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropright .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-toggle::after{vertical-align:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropleft .dropdown-toggle::after{display:none}.dropleft .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropleft .dropdown-toggle:empty::after{margin-left:0}.dropleft .dropdown-toggle::before{vertical-align:0}.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:first-child{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.dropdown-item:last-child{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1.5rem;color:#212529}.btn-group,.btn-group-vertical{position:relative;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-ms-flex:1 1 auto;flex:1 1 auto}.btn-group-vertical>.btn:hover,.btn-group>.btn:hover{z-index:1}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus{z-index:1}.btn-toolbar{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropleft .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-ms-flex-direction:column;flex-direction:column;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:center;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:stretch;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;margin-bottom:0}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control{margin-left:-1px}.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file .custom-file-input:focus{z-index:4}.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-file:not(:first-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-append,.input-group-prepend{display:-ms-flexbox;display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn:focus,.input-group-prepend .btn:focus{z-index:3}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea){height:calc(2.875rem + 2px)}.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea){height:calc(1.8125rem + 2px)}.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.input-group-lg>.custom-select,.input-group-sm>.custom-select{padding-right:1.75rem}.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;display:block;min-height:1.5rem;padding-left:1.5rem}.custom-control-inline{display:-ms-inline-flexbox;display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;z-index:-1;opacity:0}.custom-control-input:checked~.custom-control-label::before{color:#fff;border-color:#007bff;background-color:#007bff}.custom-control-input:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-control-input:focus:not(:checked)~.custom-control-label::before{border-color:#80bdff}.custom-control-input:not(:disabled):active~.custom-control-label::before{color:#fff;background-color:#b3d7ff;border-color:#b3d7ff}.custom-control-input:disabled~.custom-control-label{color:#6c757d}.custom-control-input:disabled~.custom-control-label::before{background-color:#e9ecef}.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}.custom-control-label::before{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;pointer-events:none;content:"";background-color:#fff;border:#adb5bd solid 1px}.custom-control-label::after{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:"";background-repeat:no-repeat;background-position:center center;background-size:50% 50%}.custom-checkbox .custom-control-label::before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before{border-color:#007bff;background-color:#007bff}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-radio .custom-control-label::before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-switch{padding-left:2.25rem}.custom-switch .custom-control-label::before{left:-2.25rem;width:1.75rem;pointer-events:all;border-radius:.5rem}.custom-switch .custom-control-label::after{top:calc(.25rem + 2px);left:calc(-2.25rem + 2px);width:calc(1rem - 4px);height:calc(1rem - 4px);background-color:#adb5bd;border-radius:.5rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out}@media screen and (prefers-reduced-motion:reduce){.custom-switch .custom-control-label::after{transition:none}}.custom-switch .custom-control-input:checked~.custom-control-label::after{background-color:#fff;-webkit-transform:translateX(.75rem);transform:translateX(.75rem)}.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-select{display:inline-block;width:100%;height:calc(2.25rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-weight:400;line-height:1.5;color:#495057;vertical-align:middle;background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(128,189,255,.5)}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}.custom-select:disabled{color:#6c757d;background-color:#e9ecef}.custom-select::-ms-expand{opacity:0}.custom-select-sm{height:calc(1.8125rem + 2px);padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem}.custom-select-lg{height:calc(2.875rem + 2px);padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem}.custom-file{position:relative;display:inline-block;width:100%;height:calc(2.25rem + 2px);margin-bottom:0}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(2.25rem + 2px);margin:0;opacity:0}.custom-file-input:focus~.custom-file-label{border-color:#80bdff;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-file-input:disabled~.custom-file-label{background-color:#e9ecef}.custom-file-input:lang(en)~.custom-file-label::after{content:"Browse"}.custom-file-input~.custom-file-label[data-browse]::after{content:attr(data-browse)}.custom-file-label{position:absolute;top:0;right:0;left:0;z-index:1;height:calc(2.25rem + 2px);padding:.375rem .75rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:2.25rem;padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.custom-range{width:100%;height:calc(1rem + .4rem);padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-range:focus{outline:0}.custom-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-ms-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range::-moz-focus-outer{border:0}.custom-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media screen and (prefers-reduced-motion:reduce){.custom-range::-webkit-slider-thumb{transition:none}}.custom-range::-webkit-slider-thumb:active{background-color:#b3d7ff}.custom-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media screen and (prefers-reduced-motion:reduce){.custom-range::-moz-range-thumb{transition:none}}.custom-range::-moz-range-thumb:active{background-color:#b3d7ff}.custom-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-ms-thumb{width:1rem;height:1rem;margin-top:0;margin-right:.2rem;margin-left:.2rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;appearance:none}@media screen and (prefers-reduced-motion:reduce){.custom-range::-ms-thumb{transition:none}}.custom-range::-ms-thumb:active{background-color:#b3d7ff}.custom-range::-ms-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:transparent;border-color:transparent;border-width:.5rem}.custom-range::-ms-fill-lower{background-color:#dee2e6;border-radius:1rem}.custom-range::-ms-fill-upper{margin-right:15px;background-color:#dee2e6;border-radius:1rem}.custom-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.custom-range:disabled::-webkit-slider-runnable-track{cursor:default}.custom-range:disabled::-moz-range-thumb{background-color:#adb5bd}.custom-range:disabled::-moz-range-track{cursor:default}.custom-range:disabled::-ms-thumb{background-color:#adb5bd}.custom-control-label::before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media screen and (prefers-reduced-motion:reduce){.custom-control-label::before,.custom-file-label,.custom-select{transition:none}}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#007bff}.nav-fill .nav-item{-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container,.navbar>.container-fluid{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler:not(:disabled):not(.disabled){cursor:pointer}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a{color:rgba(0,0,0,.9)}.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a{color:#fff}.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;color:inherit;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img{width:100%;border-radius:calc(.25rem - 1px)}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{display:-ms-flexbox;display:flex;-ms-flex:1 0 0%;flex:1 0 0%;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:first-child{border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:first-child .card-header,.card-group>.card:first-child .card-img-top{border-top-right-radius:0}.card-group>.card:first-child .card-footer,.card-group>.card:first-child .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:last-child{border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:last-child .card-header,.card-group>.card:last-child .card-img-top{border-top-left-radius:0}.card-group>.card:last-child .card-footer,.card-group>.card:last-child .card-img-bottom{border-bottom-left-radius:0}.card-group>.card:only-child{border-radius:.25rem}.card-group>.card:only-child .card-header,.card-group>.card:only-child .card-img-top{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card-group>.card:only-child .card-footer,.card-group>.card:only-child .card-img-bottom{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-group>.card:not(:first-child):not(:last-child):not(:only-child){border-radius:0}.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top{border-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion .card{overflow:hidden}.accordion .card:not(:first-of-type) .card-header:first-child{border-radius:0}.accordion .card:not(:first-of-type):not(:last-of-type){border-bottom:0;border-radius:0}.accordion .card:first-of-type{border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion .card:last-of-type{border-top-left-radius:0;border-top-right-radius:0}.accordion .card .card-header{margin-bottom:-1px}.breadcrumb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;color:#6c757d;content:"/"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none}.breadcrumb-item.active{color:#6c757d}.pagination{display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:2;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.page-link:not(:disabled):not(.disabled){cursor:pointer}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:1;color:#fff;background-color:#007bff;border-color:#007bff}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;color:#fff;text-align:center;white-space:nowrap;background-color:#007bff;transition:width .6s ease}@media screen and (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:progress-bar-stripes 1s linear infinite;animation:progress-bar-stripes 1s linear infinite}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}.list-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;margin-bottom:-1px;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.list-group-item:focus,.list-group-item:hover{z-index:1;text-decoration:none}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#007bff;border-color:#007bff}.list-group-flush .list-group-item{border-right:0;border-left:0;border-radius:0}.list-group-flush .list-group-item:last-child{margin-bottom:-1px}.list-group-flush:first-child .list-group-item:first-child{border-top:0}.list-group-flush:last-child .list-group-item:last-child{margin-bottom:0;border-bottom:0}.list-group-item-primary{color:#004085;background-color:#b8daff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#004085;background-color:#9fcdff}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#004085;border-color:#004085}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#155724;background-color:#c3e6cb}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#155724;background-color:#b1dfbb}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#155724;border-color:#155724}.list-group-item-info{color:#0c5460;background-color:#bee5eb}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#0c5460;background-color:#abdde5}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#0c5460;border-color:#0c5460}.list-group-item-warning{color:#856404;background-color:#ffeeba}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#856404;background-color:#ffe8a1}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#856404;border-color:#856404}.list-group-item-danger{color:#721c24;background-color:#f5c6cb}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#721c24;background-color:#f1b0b7}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#721c24;border-color:#721c24}.list-group-item-light{color:#818182;background-color:#fdfdfe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#818182;background-color:#ececf6}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1b1e21;background-color:#b9bbbe}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled){cursor:pointer}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}a.close.disabled{pointer-events:none}.toast{max-width:350px;overflow:hidden;font-size:.875rem;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);border-radius:.25rem;box-shadow:0 .25rem .75rem rgba(0,0,0,.1);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);opacity:0}.toast:not(:last-child){margin-bottom:.75rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.toast-header{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.25rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05)}.toast-body{padding:.75rem}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);transform:translate(0,-50px)}@media screen and (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{-webkit-transform:none;transform:none}.modal-dialog-centered{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;min-height:calc(100% - (.5rem * 2))}.modal-dialog-centered::before{display:block;height:calc(100vh - (.5rem * 2));content:""}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #e9ecef;border-top-left-radius:.3rem;border-top-right-radius:.3rem}.modal-header .close{padding:1rem 1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:end;justify-content:flex-end;padding:1rem;border-top:1px solid #e9ecef;border-bottom-right-radius:.3rem;border-bottom-left-radius:.3rem}.modal-footer>:not(:first-child){margin-left:.25rem}.modal-footer>:not(:last-child){margin-right:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-centered{min-height:calc(100% - (1.75rem * 2))}.modal-dialog-centered::before{height:calc(100vh - (1.75rem * 2))}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1060;display:block;max-width:276px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .arrow{position:absolute;display:block;width:1rem;height:.5rem;margin:0 .3rem}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top] .arrow,.bs-popover-top .arrow{bottom:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=top] .arrow::after,.bs-popover-auto[x-placement^=top] .arrow::before,.bs-popover-top .arrow::after,.bs-popover-top .arrow::before{border-width:.5rem .5rem 0}.bs-popover-auto[x-placement^=top] .arrow::before,.bs-popover-top .arrow::before{bottom:0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=top] .arrow::after,.bs-popover-top .arrow::after{bottom:1px;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right] .arrow,.bs-popover-right .arrow{left:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=right] .arrow::after,.bs-popover-auto[x-placement^=right] .arrow::before,.bs-popover-right .arrow::after,.bs-popover-right .arrow::before{border-width:.5rem .5rem .5rem 0}.bs-popover-auto[x-placement^=right] .arrow::before,.bs-popover-right .arrow::before{left:0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=right] .arrow::after,.bs-popover-right .arrow::after{left:1px;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom] .arrow,.bs-popover-bottom .arrow{top:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=bottom] .arrow::after,.bs-popover-auto[x-placement^=bottom] .arrow::before,.bs-popover-bottom .arrow::after,.bs-popover-bottom .arrow::before{border-width:0 .5rem .5rem .5rem}.bs-popover-auto[x-placement^=bottom] .arrow::before,.bs-popover-bottom .arrow::before{top:0;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=bottom] .arrow::after,.bs-popover-bottom .arrow::after{top:1px;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f7f7f7}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left] .arrow,.bs-popover-left .arrow{right:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=left] .arrow::after,.bs-popover-auto[x-placement^=left] .arrow::before,.bs-popover-left .arrow::after,.bs-popover-left .arrow::before{border-width:.5rem 0 .5rem .5rem}.bs-popover-auto[x-placement^=left] .arrow::before,.bs-popover-left .arrow::before{right:0;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=left] .arrow::after,.bs-popover-left .arrow::after{right:1px;border-left-color:#fff}.popover-header{padding:.5rem .75rem;margin-bottom:0;font-size:1rem;color:inherit;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.5rem .75rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{-ms-touch-action:pan-y;touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:-webkit-transform .6s ease-in-out;transition:transform .6s ease-in-out;transition:transform .6s ease-in-out,-webkit-transform .6s ease-in-out}@media screen and (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left){-webkit-transform:translateX(100%);transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right){-webkit-transform:translateX(-100%);transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;-webkit-transform:none;transform:none}.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{z-index:0;opacity:0;transition:0s .6s opacity}@media screen and (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5;transition:opacity .15s ease}@media screen and (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:transparent no-repeat center center;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:15;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{box-sizing:content-box;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media screen and (prefers-reduced-motion:reduce){.carousel-indicators li{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:spinner-grow .75s linear infinite;animation:spinner-grow .75s linear infinite}.spinner-grow-sm{width:1rem;height:1rem}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#007bff!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#0062cc!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#1e7e34!important}.bg-info{background-color:#17a2b8!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#117a8b!important}.bg-warning{background-color:#ffc107!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#d39e00!important}.bg-danger{background-color:#dc3545!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#bd2130!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#007bff!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#28a745!important}.border-info{border-color:#17a2b8!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-0{border-radius:0!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.857143%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-3by4::before{padding-top:133.333333%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-sm-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-md-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-lg-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-lg-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-xl-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.min-vw-100{min-width:100vw!important}.min-vh-100{min-height:100vh!important}.vw-100{width:100vw!important}.vh-100{height:100vh!important}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-n1{margin:-.25rem!important}.mt-n1,.my-n1{margin-top:-.25rem!important}.mr-n1,.mx-n1{margin-right:-.25rem!important}.mb-n1,.my-n1{margin-bottom:-.25rem!important}.ml-n1,.mx-n1{margin-left:-.25rem!important}.m-n2{margin:-.5rem!important}.mt-n2,.my-n2{margin-top:-.5rem!important}.mr-n2,.mx-n2{margin-right:-.5rem!important}.mb-n2,.my-n2{margin-bottom:-.5rem!important}.ml-n2,.mx-n2{margin-left:-.5rem!important}.m-n3{margin:-1rem!important}.mt-n3,.my-n3{margin-top:-1rem!important}.mr-n3,.mx-n3{margin-right:-1rem!important}.mb-n3,.my-n3{margin-bottom:-1rem!important}.ml-n3,.mx-n3{margin-left:-1rem!important}.m-n4{margin:-1.5rem!important}.mt-n4,.my-n4{margin-top:-1.5rem!important}.mr-n4,.mx-n4{margin-right:-1.5rem!important}.mb-n4,.my-n4{margin-bottom:-1.5rem!important}.ml-n4,.mx-n4{margin-left:-1.5rem!important}.m-n5{margin:-3rem!important}.mt-n5,.my-n5{margin-top:-3rem!important}.mr-n5,.mx-n5{margin-right:-3rem!important}.mb-n5,.my-n5{margin-bottom:-3rem!important}.ml-n5,.mx-n5{margin-left:-3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-n1{margin:-.25rem!important}.mt-sm-n1,.my-sm-n1{margin-top:-.25rem!important}.mr-sm-n1,.mx-sm-n1{margin-right:-.25rem!important}.mb-sm-n1,.my-sm-n1{margin-bottom:-.25rem!important}.ml-sm-n1,.mx-sm-n1{margin-left:-.25rem!important}.m-sm-n2{margin:-.5rem!important}.mt-sm-n2,.my-sm-n2{margin-top:-.5rem!important}.mr-sm-n2,.mx-sm-n2{margin-right:-.5rem!important}.mb-sm-n2,.my-sm-n2{margin-bottom:-.5rem!important}.ml-sm-n2,.mx-sm-n2{margin-left:-.5rem!important}.m-sm-n3{margin:-1rem!important}.mt-sm-n3,.my-sm-n3{margin-top:-1rem!important}.mr-sm-n3,.mx-sm-n3{margin-right:-1rem!important}.mb-sm-n3,.my-sm-n3{margin-bottom:-1rem!important}.ml-sm-n3,.mx-sm-n3{margin-left:-1rem!important}.m-sm-n4{margin:-1.5rem!important}.mt-sm-n4,.my-sm-n4{margin-top:-1.5rem!important}.mr-sm-n4,.mx-sm-n4{margin-right:-1.5rem!important}.mb-sm-n4,.my-sm-n4{margin-bottom:-1.5rem!important}.ml-sm-n4,.mx-sm-n4{margin-left:-1.5rem!important}.m-sm-n5{margin:-3rem!important}.mt-sm-n5,.my-sm-n5{margin-top:-3rem!important}.mr-sm-n5,.mx-sm-n5{margin-right:-3rem!important}.mb-sm-n5,.my-sm-n5{margin-bottom:-3rem!important}.ml-sm-n5,.mx-sm-n5{margin-left:-3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-n1{margin:-.25rem!important}.mt-md-n1,.my-md-n1{margin-top:-.25rem!important}.mr-md-n1,.mx-md-n1{margin-right:-.25rem!important}.mb-md-n1,.my-md-n1{margin-bottom:-.25rem!important}.ml-md-n1,.mx-md-n1{margin-left:-.25rem!important}.m-md-n2{margin:-.5rem!important}.mt-md-n2,.my-md-n2{margin-top:-.5rem!important}.mr-md-n2,.mx-md-n2{margin-right:-.5rem!important}.mb-md-n2,.my-md-n2{margin-bottom:-.5rem!important}.ml-md-n2,.mx-md-n2{margin-left:-.5rem!important}.m-md-n3{margin:-1rem!important}.mt-md-n3,.my-md-n3{margin-top:-1rem!important}.mr-md-n3,.mx-md-n3{margin-right:-1rem!important}.mb-md-n3,.my-md-n3{margin-bottom:-1rem!important}.ml-md-n3,.mx-md-n3{margin-left:-1rem!important}.m-md-n4{margin:-1.5rem!important}.mt-md-n4,.my-md-n4{margin-top:-1.5rem!important}.mr-md-n4,.mx-md-n4{margin-right:-1.5rem!important}.mb-md-n4,.my-md-n4{margin-bottom:-1.5rem!important}.ml-md-n4,.mx-md-n4{margin-left:-1.5rem!important}.m-md-n5{margin:-3rem!important}.mt-md-n5,.my-md-n5{margin-top:-3rem!important}.mr-md-n5,.mx-md-n5{margin-right:-3rem!important}.mb-md-n5,.my-md-n5{margin-bottom:-3rem!important}.ml-md-n5,.mx-md-n5{margin-left:-3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-n1{margin:-.25rem!important}.mt-lg-n1,.my-lg-n1{margin-top:-.25rem!important}.mr-lg-n1,.mx-lg-n1{margin-right:-.25rem!important}.mb-lg-n1,.my-lg-n1{margin-bottom:-.25rem!important}.ml-lg-n1,.mx-lg-n1{margin-left:-.25rem!important}.m-lg-n2{margin:-.5rem!important}.mt-lg-n2,.my-lg-n2{margin-top:-.5rem!important}.mr-lg-n2,.mx-lg-n2{margin-right:-.5rem!important}.mb-lg-n2,.my-lg-n2{margin-bottom:-.5rem!important}.ml-lg-n2,.mx-lg-n2{margin-left:-.5rem!important}.m-lg-n3{margin:-1rem!important}.mt-lg-n3,.my-lg-n3{margin-top:-1rem!important}.mr-lg-n3,.mx-lg-n3{margin-right:-1rem!important}.mb-lg-n3,.my-lg-n3{margin-bottom:-1rem!important}.ml-lg-n3,.mx-lg-n3{margin-left:-1rem!important}.m-lg-n4{margin:-1.5rem!important}.mt-lg-n4,.my-lg-n4{margin-top:-1.5rem!important}.mr-lg-n4,.mx-lg-n4{margin-right:-1.5rem!important}.mb-lg-n4,.my-lg-n4{margin-bottom:-1.5rem!important}.ml-lg-n4,.mx-lg-n4{margin-left:-1.5rem!important}.m-lg-n5{margin:-3rem!important}.mt-lg-n5,.my-lg-n5{margin-top:-3rem!important}.mr-lg-n5,.mx-lg-n5{margin-right:-3rem!important}.mb-lg-n5,.my-lg-n5{margin-bottom:-3rem!important}.ml-lg-n5,.mx-lg-n5{margin-left:-3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-n1{margin:-.25rem!important}.mt-xl-n1,.my-xl-n1{margin-top:-.25rem!important}.mr-xl-n1,.mx-xl-n1{margin-right:-.25rem!important}.mb-xl-n1,.my-xl-n1{margin-bottom:-.25rem!important}.ml-xl-n1,.mx-xl-n1{margin-left:-.25rem!important}.m-xl-n2{margin:-.5rem!important}.mt-xl-n2,.my-xl-n2{margin-top:-.5rem!important}.mr-xl-n2,.mx-xl-n2{margin-right:-.5rem!important}.mb-xl-n2,.my-xl-n2{margin-bottom:-.5rem!important}.ml-xl-n2,.mx-xl-n2{margin-left:-.5rem!important}.m-xl-n3{margin:-1rem!important}.mt-xl-n3,.my-xl-n3{margin-top:-1rem!important}.mr-xl-n3,.mx-xl-n3{margin-right:-1rem!important}.mb-xl-n3,.my-xl-n3{margin-bottom:-1rem!important}.ml-xl-n3,.mx-xl-n3{margin-left:-1rem!important}.m-xl-n4{margin:-1.5rem!important}.mt-xl-n4,.my-xl-n4{margin-top:-1.5rem!important}.mr-xl-n4,.mx-xl-n4{margin-right:-1.5rem!important}.mb-xl-n4,.my-xl-n4{margin-bottom:-1.5rem!important}.ml-xl-n4,.mx-xl-n4{margin-left:-1.5rem!important}.m-xl-n5{margin:-3rem!important}.mt-xl-n5,.my-xl-n5{margin-top:-3rem!important}.mr-xl-n5,.mx-xl-n5{margin-right:-3rem!important}.mb-xl-n5,.my-xl-n5{margin-bottom:-3rem!important}.ml-xl-n5,.mx-xl-n5{margin-left:-3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}.text-justify{text-align:justify!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-lighter{font-weight:lighter!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-bolder{font-weight:bolder!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#007bff!important}a.text-primary:focus,a.text-primary:hover{color:#0056b3!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#494f54!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#19692c!important}.text-info{color:#17a2b8!important}a.text-info:focus,a.text-info:hover{color:#0f6674!important}.text-warning{color:#ffc107!important}a.text-warning:focus,a.text-warning:hover{color:#ba8b00!important}.text-danger{color:#dc3545!important}a.text-danger:focus,a.text-danger:hover{color:#a71d2a!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#cbd3da!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#121416!important}.text-body{color:#212529!important}.text-muted{color:#6c757d!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.text-decoration-none{text-decoration:none!important}.text-reset{color:inherit!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}
/*# sourceMappingURL=bootstrap.min.css.map */


/*!
 * Bootstrap-select v1.13.3 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2018 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */.bootstrap-select>select.bs-select-hidden,select.bs-select-hidden,select.selectpicker{display:none!important}.bootstrap-select{width:220px\0;vertical-align:middle}.bootstrap-select>.dropdown-toggle{position:relative;width:100%;z-index:1;text-align:right;white-space:nowrap}.bootstrap-select>.dropdown-toggle.bs-placeholder,.bootstrap-select>.dropdown-toggle.bs-placeholder:active,.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder:hover{color:#999}.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:hover{color:rgba(255,255,255,.5)}.bootstrap-select>select{position:absolute!important;bottom:0;left:50%;display:block!important;width:.5px!important;height:100%!important;padding:0!important;opacity:0!important;border:none}.bootstrap-select>select.mobile-device{top:0;left:0;display:block!important;width:100%!important;z-index:2}.bootstrap-select.is-invalid .dropdown-toggle,.error .bootstrap-select .dropdown-toggle,.has-error .bootstrap-select .dropdown-toggle,.was-validated .bootstrap-select .selectpicker:invalid+.dropdown-toggle{border-color:#b94a48}.bootstrap-select.is-valid .dropdown-toggle,.was-validated .bootstrap-select .selectpicker:valid+.dropdown-toggle{border-color:#28a745}.bootstrap-select.fit-width{width:auto!important}.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){width:220px}.bootstrap-select .dropdown-toggle:focus,.bootstrap-select>select.mobile-device:focus+.dropdown-toggle{outline:thin dotted #333!important;outline:5px auto -webkit-focus-ring-color!important;outline-offset:-2px}.bootstrap-select.form-control{margin-bottom:0;padding:0;border:none}:not(.input-group)>.bootstrap-select.form-control:not([class*=col-]){width:100%}.bootstrap-select.form-control.input-group-btn{z-index:auto}.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child)>.btn{border-radius:0}.bootstrap-select:not(.input-group-btn),.bootstrap-select[class*=col-]{float:none;display:inline-block;margin-left:0}.bootstrap-select.dropdown-menu-right,.bootstrap-select[class*=col-].dropdown-menu-right,.row .bootstrap-select[class*=col-].dropdown-menu-right{float:right}.form-group .bootstrap-select,.form-horizontal .bootstrap-select,.form-inline .bootstrap-select{margin-bottom:0}.form-group-lg .bootstrap-select.form-control,.form-group-sm .bootstrap-select.form-control{padding:0}.form-group-lg .bootstrap-select.form-control .dropdown-toggle,.form-group-sm .bootstrap-select.form-control .dropdown-toggle{height:100%;font-size:inherit;line-height:inherit;border-radius:inherit}.bootstrap-select.form-control-lg .dropdown-toggle,.bootstrap-select.form-control-sm .dropdown-toggle{font-size:inherit;line-height:inherit;border-radius:inherit}.bootstrap-select.form-control-sm .dropdown-toggle{padding:.25rem .5rem}.bootstrap-select.form-control-lg .dropdown-toggle{padding:.5rem 1rem}.form-inline .bootstrap-select .form-control{width:100%}.bootstrap-select.disabled,.bootstrap-select>.disabled{cursor:not-allowed}.bootstrap-select.disabled:focus,.bootstrap-select>.disabled:focus{outline:0!important}.bootstrap-select.bs-container{position:absolute;top:0;left:0;height:0!important;padding:0!important}.bootstrap-select.bs-container .dropdown-menu{z-index:1060}.bootstrap-select .dropdown-toggle:before{content:'';display:inline-block}.bootstrap-select .dropdown-toggle .filter-option{position:absolute;top:0;left:0;padding-top:inherit;padding-right:inherit;padding-bottom:inherit;padding-left:inherit;height:100%;width:100%;text-align:left}.bootstrap-select .dropdown-toggle .filter-option-inner{padding-right:inherit}.bootstrap-select .dropdown-toggle .filter-option-inner-inner{overflow:hidden}.bootstrap-select .dropdown-toggle .caret{position:absolute;top:50%;right:12px;margin-top:-2px;vertical-align:middle}.input-group .bootstrap-select.form-control .dropdown-toggle{border-radius:inherit}.bootstrap-select[class*=col-] .dropdown-toggle{width:100%}.bootstrap-select .dropdown-menu{min-width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bootstrap-select .dropdown-menu>.inner:focus{outline:0!important}.bootstrap-select .dropdown-menu.inner{position:static;float:none;border:0;padding:0;margin:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none}.bootstrap-select .dropdown-menu li{position:relative}.bootstrap-select .dropdown-menu li.active small{color:rgba(255,255,255,.5)!important}.bootstrap-select .dropdown-menu li.disabled a{cursor:not-allowed}.bootstrap-select .dropdown-menu li a{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.bootstrap-select .dropdown-menu li a.opt{position:relative;padding-left:2.25em}.bootstrap-select .dropdown-menu li a span.check-mark{display:none}.bootstrap-select .dropdown-menu li a span.text{display:inline-block}.bootstrap-select .dropdown-menu li small{padding-left:.5em}.bootstrap-select .dropdown-menu .notify{position:absolute;bottom:5px;width:96%;margin:0 2%;min-height:26px;padding:3px 5px;background:#f5f5f5;border:1px solid #e3e3e3;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05);pointer-events:none;opacity:.9;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bootstrap-select .no-results{padding:3px;background:#f5f5f5;margin:0 5px;white-space:nowrap}.bootstrap-select.fit-width .dropdown-toggle .filter-option{position:static;display:inline;padding:0}.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner{display:inline}.bootstrap-select.fit-width .dropdown-toggle .caret{position:static;top:auto;margin-top:-1px}.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark{position:absolute;display:inline-block;right:15px;top:5px}.bootstrap-select.show-tick .dropdown-menu li a span.text{margin-right:34px}.bootstrap-select .bs-ok-default:after{content:'';display:block;width:.5em;height:1em;border-style:solid;border-width:0 .26em .26em 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}.bootstrap-select.show-menu-arrow.open>.dropdown-toggle,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle{z-index:1061}.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before{content:'';border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid rgba(204,204,204,.2);position:absolute;bottom:-4px;left:9px;display:none}.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after{content:'';border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute;bottom:-4px;left:10px;display:none}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before{bottom:auto;top:-4px;border-top:7px solid rgba(204,204,204,.2);border-bottom:0}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after{bottom:auto;top:-4px;border-top:6px solid #fff;border-bottom:0}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before{right:12px;left:auto}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after{right:13px;left:auto}.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:before,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:before{display:block}.bs-actionsbox,.bs-donebutton,.bs-searchbox{padding:4px 8px}.bs-actionsbox{width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bs-actionsbox .btn-group button{width:50%}.bs-donebutton{float:left;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.bs-donebutton .btn-group button{width:100%}.bs-searchbox+.bs-actionsbox{padding:0 8px 4px}.bs-searchbox .form-control{margin-bottom:0;width:100%;float:none}


@-webkit-keyframes shine {
  100% {
    left: 125%;
  }
}

@keyframes shine {
  100% {
    left: 125%;
  }
}





@keyframes rotateme {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

@-webkit-keyframes rotateme {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes rotateme {
  from {
    -moz-transform: rotate(0deg);
  }

  to {
    -moz-transform: rotate(360deg);
  }
}

@-o-keyframes rotateme {
  from {
    -o-transform: rotate(0deg);
  }

  to {
    -o-transform: rotate(360deg);
  }
}


.rotate-me {
  animation-name: rotateme;
  animation-duration: 24s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;

  -webkit-animation-name: rotateme;
  -webkit-animation-duration: 24s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: rotateme;
  -moz-animation-duration: 24s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: rotateme;
  -ms-animation-duration: 24s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  -o-animation-name: rotateme;
  -o-animation-duration: 24s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}






@keyframes rotateme2 {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(-360deg);
  }
}

@-webkit-keyframes rotateme2 {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(-360deg);
  }
}

@-moz-keyframes rotateme2 {
  from {
    -moz-transform: rotate(0deg);
  }

  to {
    -moz-transform: rotate(-360deg);
  }
}

@-o-keyframes rotateme2 {
  from {
    -o-transform: rotate(0deg);
  }

  to {
    -o-transform: rotate(-360deg);
  }
}


.rotate-me-2 {
  animation-name: rotateme2;
  animation-duration: 24s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;

  -webkit-animation-name: rotateme2;
  -webkit-animation-duration: 24s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: rotateme2;
  -moz-animation-duration: 24s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: rotateme2;
  -ms-animation-duration: 24s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  -o-animation-name: rotateme2;
  -o-animation-duration: 24s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}









@-webkit-keyframes float-bob {
  0% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }

  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  100% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
}

@keyframes float-bob {
  0% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }

  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  100% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
}




.float-bob {
  animation-name: float-bob;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;

  -webkit-animation-name: float-bob;
  -webkit-animation-duration: 7s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: float-bob;
  -moz-animation-duration: 7s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: float-bob;
  -ms-animation-duration: 7s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  -o-animation-name: float-bob;
  -o-animation-duration: 7s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}







/*** 
=============================================
    circle Css
=============================================
***/
@-webkit-keyframes circle {
  0% {
    opacity: 1;
  }

  40% {
    opacity: 1;
  }

  100% {
    width: 200%;
    height: 200%;
    opacity: 0;
  }
}

@keyframes circle {
  0% {
    opacity: 1;
  }

  40% {
    opacity: 1;
  }

  100% {
    width: 200%;
    height: 200%;
    opacity: 0;
  }
}





/*** 
=============================================
    Zoom Fade Css
=============================================
***/
.zoom-fade {
  animation-name: zoom-fade;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;

  -webkit-animation-name: zoom-fade;
  -webkit-animation-duration: 5s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: zoom-fade;
  -moz-animation-duration: 5s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: zoom-fade;
  -ms-animation-duration: 5s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  -o-animation-name: zoom-fade;
  -o-animation-duration: 5s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}

@-webkit-keyframes zoom-fade {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  100% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}

@keyframes zoom-fade {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  100% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}





/*** 
=============================================
    Zoom In Out Css
=============================================
***/
.zoominout {
  animation-name: zoomInOut;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;

  -webkit-animation-name: zoomInOut;
  -webkit-animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;

  -moz-animation-name: zoomInOut;
  -moz-animation-duration: 3s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: ease-in-out;

  -ms-animation-name: zoomInOut;
  -ms-animation-duration: 3s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: ease-in-out;

  -o-animation-name: zoomInOut;
  -o-animation-duration: 3s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: ease-in-out;
}


@-webkit-keyframes zoomInOut {
  0% {
    -webkit-transform: rotate(0deg) scale(0.7);
    transform: rotate(0deg) scale(0.7);
    opacity: 0;
  }

  50% {
    -webkit-transform: rotate(180deg) scale(1);
    transform: rotate(180deg) scale(1);
    opacity: 1;
  }

  100% {
    -webkit-transform: rotate(360deg) scale(0.7);
    transform: rotate(360deg) scale(0.7);
    opacity: 0;
  }
}




.zoominout-2 {
  animation-name: zoomInOut;
  animation-duration: 7s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;

  -webkit-animation-name: zoomInOut;
  -webkit-animation-duration: 7s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: ease-in-out;

  -moz-animation-name: zoomInOut;
  -moz-animation-duration: 7s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: ease-in-out;

  -ms-animation-name: zoomInOut;
  -ms-animation-duration: 7s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: ease-in-out;

  -o-animation-name: zoomInOut;
  -o-animation-duration: 7s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: ease-in-out;
}


@-webkit-keyframes zoomInOut {
  0% {
    -webkit-transform: rotate(0deg) scale(0.7);
    transform: rotate(0deg) scale(0.7);
    opacity: 0;
  }

  50% {
    -webkit-transform: rotate(180deg) scale(1);
    transform: rotate(180deg) scale(1);
    opacity: 1;
  }

  100% {
    -webkit-transform: rotate(360deg) scale(0.7);
    transform: rotate(360deg) scale(0.7);
    opacity: 0;
  }
}












@-webkit-keyframes bgSlideReverse {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: 100px 0;
  }

  40% {
    background-position: 200px 0;
  }

  60% {
    background-position: 150px 0;
  }

  80% {
    background-position: 100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}

@keyframes bgSlideReverse {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: 100px 0;
  }

  40% {
    background-position: 200px 0;
  }

  60% {
    background-position: 150px 0;
  }

  80% {
    background-position: 100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}



@-webkit-keyframes bgSlideReverse2 {
  0% {
    background-position: -0 0;
  }

  20% {
    background-position: -100px 0;
  }

  40% {
    background-position: -200px 0;
  }

  60% {
    background-position: -150px 0;
  }

  80% {
    background-position: -100px 0;
  }

  100% {
    background-position: -0px 0;
  }
}

@keyframes bgSlideReverse2 {
  0% {
    background-position: -0 0;
  }

  20% {
    background-position: -100px 0;
  }

  40% {
    background-position: -200px 0;
  }

  60% {
    background-position: -150px 0;
  }

  80% {
    background-position: -100px 0;
  }

  100% {
    background-position: -0px 0;
  }
}






@-webkit-keyframes banner-animate {
  0% {
    -webkit-transform: translateX(-1000px);
    transform: translateX(-1000px);
  }

  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  100% {
    -webkit-transform: translateX(-1000px);
    transform: translateX(-1000px);
  }
}

@keyframes banner-animate {
  0% {
    -webkit-transform: translateX(-1000px);
    transform: translateX(-1000px);
  }

  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  100% {
    -webkit-transform: translateX(-1000px);
    transform: translateX(-1000px);
  }
}



.banner-animate {
  animation-name: banner-animate;
  animation-duration: 70s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: banner-animate;
  -webkit-animation-duration: 70s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: banner-animate;
  -moz-animation-duration: 70s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: banner-animate;
  -ms-animation-duration: 70s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  -o-animation-name: banner-animate;
  -o-animation-duration: 70s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
}







@-webkit-keyframes ripple {
  70% {
    -webkit-box-shadow: 0 0 0 20px 0 0 20px 0 #fff;
    box-shadow: 0 0 0 20px 0 0 20px 0 #fff
  }

  100% {
    -webkit-box-shadow: 0 0 0 0 #fff;
    box-shadow: 0 0 0 0 #fff
  }
}

@keyframes ripple {
  70% {
    -webkit-box-shadow: 0 0 0 20px rgb(255, 255, 255, .2);
    box-shadow: 0 0 0 20px rgb(255, 255, 255, .2)
  }

  100% {
    -webkit-box-shadow: 0 0 0 0 rgb(255, 255, 255, 0);
    box-shadow: 0 0 0 0 rgb(255, 255, 255, 0)
  }
}




@-webkit-keyframes ripple2 {
  70% {
    -webkit-box-shadow: 0 0 0 20px 0 0 20px 0 #000000;
    box-shadow: 0 0 0 20px 0 0 20px 0 #000000
  }

  100% {
    -webkit-box-shadow: 0 0 0 0 #000000;
    box-shadow: 0 0 0 0 #000000
  }
}

@keyframes ripple2 {
  70% {
    -webkit-box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 0 20px rgb(0, 0, 0, .9)
  }

  100% {
    -webkit-box-shadow: 0 0 0 0 rgb(0, 0, 0, 0);
    box-shadow: 0 0 0 0 rgb(0, 0, 0, 0)
  }
}



/*** 
=============================================
    Animation1 Css
=============================================
***/
@-webkit-keyframes animation1 {

  0%,
  100% {
    -webkit-transform: rotate(0deg) translateX(0);
    transform: rotate(0deg) translateX(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(0deg) translateX(-5px);
    transform: rotate(0deg) translateX(-5px);
  }

  50% {
    -webkit-transform: rotate(0deg) translateX(10px);
    transform: rotate(0deg) translateX(10px);
  }
}

@keyframes animation1 {

  0%,
  100% {
    -webkit-transform: rotate(0deg) translateX(0);
    transform: rotate(0deg) translateX(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(0deg) translateX(-5px);
    transform: rotate(0deg) translateX(-5px);
  }

  50% {
    -webkit-transform: rotate(0deg) translateX(10px);
    transform: rotate(0deg) translateX(10px);
  }
}










/*** 
=============================================
    Animation2 Css
=============================================
***/
@keyframes animation2 {
  0% {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -webkit-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@-moz-keyframes animation2 {
  0% {
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -moz-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@-o-keyframes animation2 {
  0% {
    -o-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -o-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@keyframes animation2 {
  0% {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -webkit-transform: rotateY(360deg);
    -moz-transform: rotateY(360deg);
    -o-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}









@-webkit-keyframes bgSlide {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: -100px 0;
  }

  40% {
    background-position: -200px 0;
  }

  60% {
    background-position: -150px 0;
  }

  80% {
    background-position: -100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}


@keyframes bgSlide {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: -100px 0;
  }

  40% {
    background-position: -200px 0;
  }

  60% {
    background-position: -150px 0;
  }

  80% {
    background-position: -100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}

@-webkit-keyframes bgSlideReverse {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: 100px 0;
  }

  40% {
    background-position: 200px 0;
  }

  60% {
    background-position: 150px 0;
  }

  80% {
    background-position: 100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}

@keyframes bgSlideReverse {
  0% {
    background-position: 0 0;
  }

  20% {
    background-position: 100px 0;
  }

  40% {
    background-position: 200px 0;
  }

  60% {
    background-position: 150px 0;
  }

  80% {
    background-position: 100px 0;
  }

  100% {
    background-position: 0px 0;
  }
}

@-webkit-keyframes ribbonRotate {

  0%,
  100% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
  }

  50% {
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }
}

@keyframes ribbonRotate {

  0%,
  100% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
  }

  50% {
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }
}



@-webkit-keyframes footerFish {

  0%,
  100% {
    -webkit-transform: translateX(0) translateY(0) rotate(0);
    transform: translateX(0) translateY(0) rotate(0);
  }

  25%,
  75% {
    -webkit-transform: translateX(20px) translateY(30px) rotate(25deg);
    transform: translateX(20px) translateY(30px) rotate(25deg);
  }

  50% {
    -webkit-transform: translateX(40px) translateY(60px) rotate(45deg);
    transform: translateX(40px) translateY(60px) rotate(45deg);
  }
}

@keyframes footerFish {

  0%,
  100% {
    -webkit-transform: translateX(0) translateY(0) rotate(0);
    transform: translateX(0) translateY(0) rotate(0);
  }

  25%,
  75% {
    -webkit-transform: translateX(20px) translateY(30px) rotate(25deg);
    transform: translateX(20px) translateY(30px) rotate(25deg);
  }

  50% {
    -webkit-transform: translateX(40px) translateY(60px) rotate(45deg);
    transform: translateX(40px) translateY(60px) rotate(45deg);
  }
}

@-webkit-keyframes contactSwimmer {

  0%,
  100% {
    -webkit-transform: translateX(0) translateY(0) rotate(0);
    transform: translateX(0) translateY(0) rotate(0);
  }

  25%,
  75% {
    -webkit-transform: translateX(15px) translateY(20px) rotate(10deg);
    transform: translateX(15px) translateY(20px) rotate(10deg);
  }

  50% {
    -webkit-transform: translateX(60px) translateY(35px) rotate(15deg);
    transform: translateX(60px) translateY(35px) rotate(15deg);
  }
}

@keyframes contactSwimmer {

  0%,
  100% {
    -webkit-transform: translateX(0) translateY(0) rotate(0);
    transform: translateX(0) translateY(0) rotate(0);
  }

  25%,
  75% {
    -webkit-transform: translateX(15px) translateY(20px) rotate(10deg);
    transform: translateX(15px) translateY(20px) rotate(10deg);
  }

  50% {
    -webkit-transform: translateX(60px) translateY(35px) rotate(15deg);
    transform: translateX(60px) translateY(35px) rotate(15deg);
  }
}




/*** 
=============================================
    Float Bob Y Animation Css
=============================================
***/
@-webkit-keyframes float-bob-y {
  0% {
    transform: translateY(-20px);
  }

  50% {
    transform: translateY(-10px);
  }

  100% {
    transform: translateY(-20px);
  }
}

@keyframes float-bob-y {
  0% {
    transform: translateY(-20px);
  }

  50% {
    transform: translateY(-10px);
  }

  100% {
    transform: translateY(-20px);
  }
}

.float-bob-y {
  -webkit-animation-name: float-bob-y;
  animation-name: float-bob-y;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
}





/*** 
=============================================
    Float Bob X Animation Css
=============================================
***/
@-webkit-keyframes float-bob-x {
  0% {
    transform: translateX(-30px);
  }

  50% {
    transform: translateX(-10px);
  }

  100% {
    transform: translateX(-30px);
  }
}

@keyframes float-bob-x {
  0% {
    transform: translateX(-30px);
  }

  50% {
    transform: translateX(-10px);
  }

  100% {
    transform: translateX(-30px);
  }
}

.float-bob-x {
  -webkit-animation-name: float-bob-x;
  animation-name: float-bob-x;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
}




/*** 
=============================================
    Float Bob XX Animation Css
=============================================
***/
@-webkit-keyframes float-bob-xx {
  0% {
    transform: translateX(90%);
  }



  100% {
    transform: translateX(0%);
  }
}

@keyframes float-bob-xx {
  0% {
    transform: translateX(90%);
  }


  100% {
    transform: translateX(0%);
  }
}

.float-bob-xx {
  -webkit-animation-name: float-bob-xx;
  animation-name: float-bob-xx;
  -webkit-animation-duration: 7s;
  animation-duration: 7s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
}














@-webkit-keyframes footerTree {

  0%,
  100% {
    -webkit-transform: rotate(0deg) translateX(0);
    transform: rotate(0deg) translateX(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(5deg) translateX(15px);
    transform: rotate(5deg) translateX(15px);
  }

  50% {
    -webkit-transform: rotate(10deg) translateX(30px);
    transform: rotate(10deg) translateX(30px);
  }
}

@keyframes footerTree {

  0%,
  100% {
    -webkit-transform: rotate(0deg) translateX(0);
    transform: rotate(0deg) translateX(0);
  }

  25%,
  75% {
    -webkit-transform: rotate(5deg) translateX(15px);
    transform: rotate(5deg) translateX(15px);
  }

  50% {
    -webkit-transform: rotate(10deg) translateX(30px);
    transform: rotate(10deg) translateX(30px);
  }
}

.footertree {
  -webkit-animation: footerTree 5s ease-in infinite;
  animation: footerTree 5s ease-in infinite;
}



@keyframes service_hexagon_2 {
  0% {
    -webkit-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -webkit-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@-moz-keyframes service_hexagon_2 {
  0% {
    -moz-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -moz-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@-o-keyframes service_hexagon_2 {
  0% {
    -o-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -o-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}

@keyframes service_hexagon_2 {
  0% {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    transform: rotateY(0deg)
  }

  100% {
    -webkit-transform: rotateY(360deg);
    -moz-transform: rotateY(360deg);
    -o-transform: rotateY(360deg);
    transform: rotateY(360deg)
  }
}






@keyframes rotateScale {
  from {
    transform: rotate(0deg) scale(1);
  }

  to {
    transform: rotate(360deg);
  }
}

@-webkit-keyframes rotateScale {
  from {
    transform: rotate(0deg) scale(1);
  }

  to {
    transform: rotate(360deg);
  }
}

@-moz-keyframes rotateScale {
  from {
    transform: rotate(0deg) scale(1);
  }

  to {
    transform: rotate(360deg);
  }
}

@-o-keyframes rotateScale {
  from {
    transform: rotate(0deg) scale(1);
  }

  to {
    transform: rotate(360deg);
  }
}

.rotatescale {
  -webkit-animation-name: rotateScale;
  -webkit-animation-duration: 20s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;

  -moz-animation-name: rotateScale;
  -moz-animation-duration: 20s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;

  -ms-animation-name: rotateScale;
  -ms-animation-duration: 20s;
  -ms-animation-iteration-count: infinite;
  -ms-animation-timing-function: linear;

  animation-name: rotateScale;
  animation-duration: 20s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}












@keyframes slide-2 {

  from {
    background-position: 0 0;
  }

  to {
    background-position: 1920px 0;
  }

}

@-webkit-keyframes slide-2 {

  from {
    background-position: 0 0;
  }

  to {
    background-position: 1920px 0;
  }


}






@-webkit-keyframes glitter {
  0% {
    -webkit-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }

  25% {
    -webkit-transform: scale(1) rotate(360deg);
    opacity: 1;
  }

  50% {
    -webkit-transform: scale(0.3) rotate(720deg);
    opacity: 0;
  }

  100% {
    -webkit-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
}

@keyframes glitter {
  0% {
    -webkit-transform: scale(0.3) rotate(0deg);
    transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }

  25% {
    -webkit-transform: scale(1) rotate(360deg);
    transform: scale(1) rotate(360deg);
    opacity: 1;
  }

  50% {
    -webkit-transform: scale(0.3) rotate(720deg);
    transform: scale(0.3) rotate(720deg);
    opacity: 0;
  }

  100% {
    -webkit-transform: scale(0.3) rotate(0deg);
    transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
}

@-moz-keyframes glitter {
  0% {
    -moz-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }

  25% {
    -moz-transform: scale(1) rotate(360deg);
    opacity: 1;
  }

  50% {
    -moz-transform: scale(0.3) rotate(720deg);
    opacity: 0;
  }

  100% {
    -moz-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
}









.animatebubble {
  -webkit-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
  -moz-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
  animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
}


@-webkit-keyframes animateBubble {
  0% {
    margin-top: 100%
  }

  100% {
    margin-top: -100%;
    transform: rotate(360deg);
  }
}

@-moz-keyframes animateBubble {
  0% {
    margin-top: 100%
  }

  100% {
    margin-top: -100%;
    transform: rotate(360deg);
  }
}

@keyframes animateBubble {
  0% {
    margin-top: 100%
  }

  100% {
    margin-top: -100%;
    transform: rotate(360deg);
  }
}


@-webkit-keyframes sideWays {
  0% {
    margin-left: 0
  }

  100% {
    margin-left: 0px
  }
}

@-moz-keyframes sideWays {
  0% {
    margin-left: 0
  }

  100% {
    margin-left: 0px
  }
}

@keyframes sideWays {
  0% {
    margin-left: 0
  }

  100% {
    margin-left: 0px
  }
}




@keyframes float-bob-xx {
  0% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }

  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }

  100% {
    -webkit-transform: translateX(-100px);
    transform: translateX(-100px);
  }
}


@keyframes float-bob-yy {
  0% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  50% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }

  100% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}














/*** Element Move down ***/

.service-style5-area__bg .shape1 img {
  -webkit-animation: mover 1s infinite alternate;
  animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
  0% {
    transform: translateY(0);
  }

  100% {
    transform: translateY(-20px);
  }
}

@keyframes mover {
  0% {
    transform: translateY(0);
  }

  100% {
    transform: translateY(-20px);
  }
}



/*** Element Fade IN Left  ***/
@-webkit-keyframes fadeInLeft1 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeft1 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    transform: translateX(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.now-in-view {
  -webkit-animation-name: fadeInLeft1;
  animation-name: fadeInLeft1;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}




/*** Element Fade IN Right ***/
@-webkit-keyframes fadeInRight1 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRight1 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px);
    -ms-transform: translateX(20px);
    transform: translateX(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
  }
}

.now-in-view {
  -webkit-animation-name: fadeInRight1;
  animation-name: fadeInRight1;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}




/*** Element Fade IN Down ***/

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.now-in-view {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}



/*** Element Fade IN Up ***/
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}


.now-in-view h3 {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}




/*** Element Slide IN Left ***/
@-webkit-keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInLeft {
  0% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}


.now-in-view {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}



/*** Element Slide IN Right ***/
@-webkit-keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  0% {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}


.now-in-view {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}



/*** Background color Changing ***/

@keyframes pulse5 {
  0% {
    background-color: #1266E3;
  }

  20% {
    background-color: #E70887;
  }

  40% {
    background-color: #6936D8;
  }

  60% {
    background-color: #BA0913;
  }

  80% {
    background-color: #FFA500;
  }

  100% {
    background-color: #95C41F;
  }


}


@-webkit-keyframes pulse5 {


  0% {
    background-color: #1266E3;
  }

  20% {
    background-color: #E70887;
  }

  40% {
    background-color: #6936D8;
  }

  60% {
    background-color: #BA0913;
  }

  80% {
    background-color: #FFA500;
  }

  100% {
    background-color: #95C41F;
  }


}

.switcher .switch_btn button {}






/*** Box Zoom In Out round Squre ***/
@keyframes stretch {
  0% {
    transform: scale(.3);
    background-color: var(--thm-base);
    border-radius: 100%;
  }

  50% {
    background-color: #ffffff;
  }

  80% {
    background-color: #000000;
  }

  100% {
    transform: scale(1.2);
    background-color: var(--thm-black)
  }


}


@-webkit-keyframes pulse5 {

  0% {
    transform: scale(.3);
    background-color: var(--thm-base);
    border-radius: 100%;
  }

  50% {
    background-color: #ffffff;
  }

  80% {
    background-color: #000000;
  }

  100% {
    transform: scale(1.2);
    background-color: var(--thm-black)
  }

}

.about-style2-img-box .base-bg {
  animation-name: stretch;
  animation-duration: 1.5s;
  animation-timing-function: ease-out;
  animation-delay: 0;
  animation-direction: alternate;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running;
}





/*** Element Left Right Moveing ***/
@keyframes pulse3 {

  0%,
  100% {
    color: #ffffff;
  }

  50% {
    color: var(--thm-base);
  }

  70% {
    color: #d7d7d7;
  }

}

@keyframes nudge {

  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(10px, 0);
  }

  80% {
    transform: translate(-10px, 0);
  }


}



.slogan-style2-area .title h2 {
  animation:
    pulse3 3s ease infinite alternate,
    nudge 5s linear infinite alternate;
}








/*** Element Zoom IN Stable ***/
.now-in-view {
  -webkit-animation-name: zoomInStable;
  animation-name: zoomInStable;
  -webkit-animation-duration: 2.5s;
  animation-duration: 2.5s;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

/***
bbb.now-in-view {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 0.35s;
  animation-delay: 0.35s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
**/

@charset "UTF-8";body.fancybox-active{overflow:hidden}body.fancybox-iosfix{position:fixed;left:0;right:0}.fancybox-is-hidden{position:absolute;top:-9999px;left:-9999px;visibility:hidden}.fancybox-container{position:fixed;top:0;left:0;width:100%;height:100%;z-index:99999999999999;-webkit-tap-highlight-color:transparent;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transform:translateZ(0);transform:translateZ(0);font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif}.fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-stage{position:absolute;top:0;right:0;bottom:0;left:0}.fancybox-outer{overflow-y:auto;-webkit-overflow-scrolling:touch}.fancybox-bg{background:#1e1e1e;opacity:0;transition-duration:inherit;transition-property:opacity;transition-timing-function:cubic-bezier(.47,0,.74,.71)}.fancybox-is-open .fancybox-bg{opacity:.87;transition-timing-function:cubic-bezier(.22,.61,.36,1)}.fancybox-caption-wrap,.fancybox-infobar,.fancybox-toolbar{position:absolute;direction:ltr;z-index:99997;opacity:0;visibility:hidden;transition:opacity .25s,visibility 0s linear .25s;box-sizing:border-box}.fancybox-show-caption .fancybox-caption-wrap,.fancybox-show-infobar .fancybox-infobar,.fancybox-show-toolbar .fancybox-toolbar{opacity:1;visibility:visible;transition:opacity .25s,visibility 0s}.fancybox-infobar{top:0;left:0;font-size:13px;padding:0 10px;height:44px;min-width:44px;line-height:44px;color:#ccc;text-align:center;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-webkit-tap-highlight-color:transparent;-webkit-font-smoothing:subpixel-antialiased;mix-blend-mode:exclusion}.fancybox-toolbar{top:0;right:0;margin:0;padding:0}.fancybox-stage{overflow:hidden;direction:ltr;z-index:99994;-webkit-transform:translateZ(0)}.fancybox-is-closing .fancybox-stage{overflow:visible}.fancybox-slide{position:absolute;top:0;left:0;width:100%;height:100%;margin:0;padding:0;overflow:auto;outline:none;white-space:normal;box-sizing:border-box;text-align:center;z-index:99994;-webkit-overflow-scrolling:touch;display:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform}.fancybox-slide:before{content:"";display:inline-block;vertical-align:middle;height:100%;width:0}.fancybox-is-sliding .fancybox-slide,.fancybox-slide--current,.fancybox-slide--next,.fancybox-slide--previous{display:block}.fancybox-slide--image{overflow:visible}.fancybox-slide--image:before{display:none}.fancybox-slide--video .fancybox-content,.fancybox-slide--video iframe{background:#000}.fancybox-slide--map .fancybox-content,.fancybox-slide--map iframe{background:#e5e3df}.fancybox-slide--next{z-index:99995}.fancybox-slide>*{display:inline-block;position:relative;padding:24px;margin:44px 0;border-width:0;vertical-align:middle;text-align:left;background-color:#fff;overflow:auto;box-sizing:border-box}.fancybox-slide>base,.fancybox-slide>link,.fancybox-slide>meta,.fancybox-slide>script,.fancybox-slide>style,.fancybox-slide>title{display:none}.fancybox-slide .fancybox-image-wrap{position:absolute;top:0;left:0;margin:0;padding:0;border:0;z-index:99995;background:transparent;cursor:default;overflow:visible;-webkit-transform-origin:top left;transform-origin:top left;background-size:100% 100%;background-repeat:no-repeat;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform}.fancybox-can-zoomOut .fancybox-image-wrap{cursor:zoom-out}.fancybox-can-zoomIn .fancybox-image-wrap{cursor:zoom-in}.fancybox-can-drag .fancybox-image-wrap{cursor:-webkit-grab;cursor:grab}.fancybox-is-dragging .fancybox-image-wrap{cursor:-webkit-grabbing;cursor:grabbing}.fancybox-image,.fancybox-spaceball{position:absolute;top:0;left:0;width:100%;height:100%;margin:0;padding:0;border:0;max-width:none;max-height:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.fancybox-spaceball{z-index:1}.fancybox-slide--iframe .fancybox-content{padding:0;width:80%;height:80%;max-width:calc(100% - 100px);max-height:calc(100% - 88px);overflow:visible;background:#fff}.fancybox-iframe{display:block;padding:0;border:0;height:100%}.fancybox-error,.fancybox-iframe{margin:0;width:100%;background:#fff}.fancybox-error{padding:40px;max-width:380px;cursor:default}.fancybox-error p{margin:0;padding:0;color:#444;font-size:16px;line-height:20px}.fancybox-button{box-sizing:border-box;display:inline-block;vertical-align:top;width:44px;height:44px;margin:0;padding:10px;border:0;border-radius:0;background:rgba(30,30,30,.6);transition:color .3s ease;cursor:pointer;outline:none}.fancybox-button,.fancybox-button:link,.fancybox-button:visited{color:#ccc}.fancybox-button:focus,.fancybox-button:hover{color:#fff}.fancybox-button[disabled]{color:#ccc;cursor:default;opacity:.6}.fancybox-button svg{display:block;position:relative;overflow:visible;shape-rendering:geometricPrecision}.fancybox-button svg path{fill:currentColor;stroke:currentColor;stroke-linejoin:round;stroke-width:3}.fancybox-button--share svg path{stroke-width:1}.fancybox-button--pause svg path:nth-child(1),.fancybox-button--play svg path:nth-child(2){display:none}.fancybox-button--zoom svg path{fill:transparent}.fancybox-navigation{display:none}.fancybox-show-nav .fancybox-navigation{display:block}.fancybox-navigation button{position:absolute;top:50%;margin:-50px 0 0;z-index:99997;background:transparent;width:60px;height:100px;padding:17px}.fancybox-navigation button:before{content:"";position:absolute;top:30px;right:10px;width:40px;height:40px;background:rgba(30,30,30,.6)}.fancybox-navigation .fancybox-button--arrow_left{left:0}.fancybox-navigation .fancybox-button--arrow_right{right:0}.fancybox-close-small{position:absolute;top:0;right:0;width:40px;height:40px;padding:0;margin:0;border:0;border-radius:0;background:transparent;z-index:10;cursor:pointer}.fancybox-close-small:after{content:"×";position:absolute;top:5px;right:5px;width:30px;height:30px;font:22px/30px Arial,Helvetica Neue,Helvetica,sans-serif;color:#888;font-weight:300;text-align:center;border-radius:50%;border-width:0;background-color:transparent;transition:background-color .25s;box-sizing:border-box;z-index:2}.fancybox-close-small:focus{outline:none}.fancybox-close-small:focus:after{outline:1px dotted #888}.fancybox-close-small:hover:after{color:#555;background:#eee}.fancybox-slide--iframe .fancybox-close-small,.fancybox-slide--image .fancybox-close-small{top:0;right:-40px}.fancybox-slide--iframe .fancybox-close-small:after,.fancybox-slide--image .fancybox-close-small:after{font-size:35px;color:#aaa}.fancybox-slide--iframe .fancybox-close-small:hover:after,.fancybox-slide--image .fancybox-close-small:hover:after{color:#fff;background:transparent}.fancybox-is-scaling .fancybox-close-small,.fancybox-is-zoomable.fancybox-can-drag .fancybox-close-small{display:none}.fancybox-caption-wrap{bottom:0;left:0;right:0;padding:60px 2vw 0;background:linear-gradient(180deg,transparent 0,rgba(0,0,0,.1) 20%,rgba(0,0,0,.2) 40%,rgba(0,0,0,.6) 80%,rgba(0,0,0,.8));pointer-events:none}.fancybox-caption{padding:30px 0;border-top:1px solid hsla(0,0%,100%,.4);font-size:14px;color:#fff;line-height:20px;-webkit-text-size-adjust:none}.fancybox-caption a,.fancybox-caption button,.fancybox-caption select{pointer-events:all;position:relative}.fancybox-caption a{color:#fff;text-decoration:underline}.fancybox-slide>.fancybox-loading{border:6px solid hsla(0,0%,39%,.4);border-top:6px solid hsla(0,0%,100%,.6);border-radius:100%;height:50px;width:50px;-webkit-animation:a .8s infinite linear;animation:a .8s infinite linear;background:transparent;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-30px;z-index:99999}@-webkit-keyframes a{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes a{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fancybox-animated{transition-timing-function:cubic-bezier(0,0,.25,1)}.fancybox-fx-slide.fancybox-slide--previous{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0);opacity:0}.fancybox-fx-slide.fancybox-slide--next{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);opacity:0}.fancybox-fx-slide.fancybox-slide--current{-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}.fancybox-fx-fade.fancybox-slide--next,.fancybox-fx-fade.fancybox-slide--previous{opacity:0;transition-timing-function:cubic-bezier(.19,1,.22,1)}.fancybox-fx-fade.fancybox-slide--current{opacity:1}.fancybox-fx-zoom-in-out.fancybox-slide--previous{-webkit-transform:scale3d(1.5,1.5,1.5);transform:scale3d(1.5,1.5,1.5);opacity:0}.fancybox-fx-zoom-in-out.fancybox-slide--next{-webkit-transform:scale3d(.5,.5,.5);transform:scale3d(.5,.5,.5);opacity:0}.fancybox-fx-zoom-in-out.fancybox-slide--current{-webkit-transform:scaleX(1);transform:scaleX(1);opacity:1}.fancybox-fx-rotate.fancybox-slide--previous{-webkit-transform:rotate(-1turn);transform:rotate(-1turn);opacity:0}.fancybox-fx-rotate.fancybox-slide--next{-webkit-transform:rotate(1turn);transform:rotate(1turn);opacity:0}.fancybox-fx-rotate.fancybox-slide--current{-webkit-transform:rotate(0deg);transform:rotate(0deg);opacity:1}.fancybox-fx-circular.fancybox-slide--previous{-webkit-transform:scale3d(0,0,0) translate3d(-100%,0,0);transform:scale3d(0,0,0) translate3d(-100%,0,0);opacity:0}.fancybox-fx-circular.fancybox-slide--next{-webkit-transform:scale3d(0,0,0) translate3d(100%,0,0);transform:scale3d(0,0,0) translate3d(100%,0,0);opacity:0}.fancybox-fx-circular.fancybox-slide--current{-webkit-transform:scaleX(1) translateZ(0);transform:scaleX(1) translateZ(0);opacity:1}.fancybox-fx-tube.fancybox-slide--previous{-webkit-transform:translate3d(-100%,0,0) scale(.1) skew(-10deg);transform:translate3d(-100%,0,0) scale(.1) skew(-10deg)}.fancybox-fx-tube.fancybox-slide--next{-webkit-transform:translate3d(100%,0,0) scale(.1) skew(10deg);transform:translate3d(100%,0,0) scale(.1) skew(10deg)}.fancybox-fx-tube.fancybox-slide--current{-webkit-transform:translateZ(0) scale(1);transform:translateZ(0) scale(1)}.fancybox-share{padding:30px;border-radius:3px;background:#f4f4f4;max-width:90%;text-align:center}.fancybox-share h1{color:#222;margin:0 0 20px;font-size:35px;font-weight:700}.fancybox-share p{margin:0;padding:0}p.fancybox-share__links{margin-right:-10px}.fancybox-share__button{display:inline-block;text-decoration:none;margin:0 10px 10px 0;padding:0 15px;min-width:130px;border:0;border-radius:3px;background:#fff;white-space:nowrap;font-size:14px;font-weight:700;line-height:40px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;color:#fff;transition:all .2s}.fancybox-share__button:hover{text-decoration:none}.fancybox-share__button--fb{background:#3b5998}.fancybox-share__button--fb:hover{background:#344e86}.fancybox-share__button--pt{background:#bd081d}.fancybox-share__button--pt:hover{background:#aa0719}.fancybox-share__button--tw{background:#1da1f2}.fancybox-share__button--tw:hover{background:#0d95e8}.fancybox-share__button svg{position:relative;top:-1px;width:25px;height:25px;margin-right:7px;vertical-align:middle}.fancybox-share__button svg path{fill:#fff}.fancybox-share__input{box-sizing:border-box;width:100%;margin:10px 0 0;padding:10px 15px;background:transparent;color:#5d5b5b;font-size:14px;outline:none;border:0;border-bottom:2px solid #d7d7d7}.fancybox-thumbs{display:none;position:absolute;top:0;bottom:0;right:0;width:212px;margin:0;padding:2px 2px 4px;background:#fff;-webkit-tap-highlight-color:transparent;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar;box-sizing:border-box;z-index:99995}.fancybox-thumbs-x{overflow-y:hidden;overflow-x:auto}.fancybox-show-thumbs .fancybox-thumbs{display:block}.fancybox-show-thumbs .fancybox-inner{right:212px}.fancybox-thumbs>ul{list-style:none;position:absolute;position:relative;width:100%;height:100%;margin:0;padding:0;overflow-x:hidden;overflow-y:auto;font-size:0;white-space:nowrap}.fancybox-thumbs-x>ul{overflow:hidden}.fancybox-thumbs-y>ul::-webkit-scrollbar{width:7px}.fancybox-thumbs-y>ul::-webkit-scrollbar-track{background:#fff;border-radius:10px;box-shadow:inset 0 0 6px rgba(0,0,0,.3)}.fancybox-thumbs-y>ul::-webkit-scrollbar-thumb{background:#2a2a2a;border-radius:10px}.fancybox-thumbs>ul>li{float:left;overflow:hidden;padding:0;margin:2px;width:100px;height:75px;max-width:calc(50% - 4px);max-height:calc(100% - 8px);position:relative;cursor:pointer;outline:none;-webkit-tap-highlight-color:transparent;-webkit-backface-visibility:hidden;backface-visibility:hidden;box-sizing:border-box}li.fancybox-thumbs-loading{background:rgba(0,0,0,.1)}.fancybox-thumbs>ul>li>img{position:absolute;top:0;left:0;max-width:none;max-height:none;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.fancybox-thumbs>ul>li:before{content:"";position:absolute;top:0;right:0;bottom:0;left:0;border:4px solid #4ea7f9;z-index:99991;opacity:0;transition:all .2s cubic-bezier(.25,.46,.45,.94)}.fancybox-thumbs>ul>li.fancybox-thumbs-active:before{opacity:1}@media (max-width:800px){.fancybox-thumbs{width:110px}.fancybox-show-thumbs .fancybox-inner{right:110px}.fancybox-thumbs>ul>li{max-width:calc(100% - 10px)}}

@font-face {
  font-family: "Flaticon";
  src: url("../fonts/flaticon.eot");
  src: url("../fonts/flaticon.eot?#iefix") format("embedded-opentype"),
    url("../fonts/flaticon.woff") format("woff"),
    url("../fonts/flaticon.ttf") format("truetype"),
    url("../fonts/flaticon.svg#Flaticon") format("svg");
  font-weight: normal;
  font-style: normal;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: "Flaticon";
    src: url("../fonts/flaticon.svg#Flaticon") format("svg");
  }
}



[class^="flaticon-"]:before,
[class*=" flaticon-"]:before,
[class^="flaticon-"]:after,
[class*=" flaticon-"]:after {
  font-family: Flaticon;
  font-style: normal;
}













.flaticon-allah-word:before {
  content: "\f101";
}

.flaticon-multiply:before {
  content: "\f102";
}

.flaticon-clock:before {
  content: "\f103";
}

.flaticon-plus:before {
  content: "\f104";
}

.flaticon-minus:before {
  content: "\f105";
}

.flaticon-play-button:before {
  content: "\f106";
}

.flaticon-play-button-1:before {
  content: "\f107";
}

.flaticon-star-of-favorites-outline:before {
  content: "\f108";
}

.flaticon-next:before {
  content: "\f109";
}

.flaticon-search:before {
  content: "\f10a";
}

.flaticon-bag:before {
  content: "\f10b";
}

.flaticon-quote:before {
  content: "\f10c";
}

.flaticon-star:before {
  content: "\f10d";
}

.flaticon-favourite:before {
  content: "\f10e";
}

.flaticon-quote-1:before {
  content: "\f10f";
}

.flaticon-next-1:before {
  content: "\f110";
}

.flaticon-file:before {
  content: "\f111";
}

.flaticon-doc:before {
  content: "\f112";
}

.flaticon-link:before {
  content: "\f113";
}

.flaticon-call:before {
  content: "\f114";
}

.flaticon-pin:before {
  content: "\f115";
}

.flaticon-calendar:before {
  content: "\f116";
}

.flaticon-verified:before {
  content: "\f117";
}

.flaticon-user:before {
  content: "\f118";
}

.flaticon-maps-and-flags:before {
  content: "\f119";
}

.flaticon-mail:before {
  content: "\f11a";
}

.flaticon-tick:before {
  content: "\f11b";
}

.flaticon-check:before {
  content: "\f11c";
}

.flaticon-quote-2:before {
  content: "\f11d";
}

.flaticon-confirmation:before {
  content: "\f11e";
}

.flaticon-telephone:before {
  content: "\f11f";
}

.flaticon-email:before {
  content: "\f120";
}

.flaticon-pin-1:before {
  content: "\f121";
}

.flaticon-placeholder:before {
  content: "\f122";
}

.flaticon-down-arrow:before {
  content: "\f123";
}

.flaticon-quote-3:before {
  content: "\f124";
}

.flaticon-open-archive:before {
  content: "\f125";
}

.flaticon-send:before {
  content: "\f126";
}

.flaticon-phone:before {
  content: "\f127";
}

.flaticon-envelope:before {
  content: "\f128";
}

.flaticon-pin-2:before {
  content: "\f129";
}

.flaticon-left-quotes-sign:before {
  content: "\f12a";
}

.flaticon-phone-call:before {
  content: "\f12b";
}

.flaticon-tag:before {
  content: "\f12c";
}

.flaticon-search-interface-symbol:before {
  content: "\f12d";
}

.flaticon-at:before {
  content: "\f12e";
}

.flaticon-basket:before {
  content: "\f12f";
}

.flaticon-chat:before {
  content: "\f130";
}

.flaticon-reply:before {
  content: "\f131";
}

.flaticon-earth-grid-symbol:before {
  content: "\f132";
}

.flaticon-twitter:before {
  content: "\f133";
}

.flaticon-up-arrow:before {
  content: "\f134";
}

.flaticon-user-1:before {
  content: "\f135";
}

.flaticon-speech-bubble-comment:before {
  content: "\f136";
}

.flaticon-left-arrow-1:before {
  content: "\f137";
}

.flaticon-map-marker:before {
  content: "\f138";
}

.flaticon-comment:before {
  content: "\f139";
}

.flaticon-phone-call-1:before {
  content: "\f13a";
}

.flaticon-maps-and-flags-1:before {
  content: "\f13b";
}

.flaticon-chat-1:before {
  content: "\f13c";
}

.flaticon-chat-2:before {
  content: "\f13d";
}

.flaticon-chat-3:before {
  content: "\f13e";
}

.flaticon-phone-call-2:before {
  content: "\f13f";
}

.flaticon-sharing:before {
  content: "\f140";
}

.flaticon-quote-4:before {
  content: "\f141";
}

.flaticon-quote-5:before {
  content: "\f142";
}

.flaticon-user-2:before {
  content: "\f143";
}

.flaticon-phone-receiver-silhouette:before {
  content: "\f144";
}

.flaticon-check-mark:before {
  content: "\f145";
}

.flaticon-down-arrow-2:before {
  content: "\f146";
}

.flaticon-menu:before {
  content: "\f147";
}

.flaticon-email-1:before {
  content: "\f148";
}

.flaticon-search-1:before {
  content: "\f149";
}

.flaticon-construction-and-tools:before {
  content: "\f14a";
}

.flaticon-plus-1:before {
  content: "\f14b";
}

.flaticon-play-button-2:before {
  content: "\f14c";
}

.flaticon-headphone:before {
  content: "\f14d";
}

.flaticon-placeholder-1:before {
  content: "\f14e";
}

.flaticon-house-with-wooden-roof:before {
  content: "\f14f";
}

.flaticon-placeholder-2:before {
  content: "\f150";
}

.flaticon-insurance:before {
  content: "\f151";
}

.flaticon-pdf:before {
  content: "\f152";
}

.flaticon-zoom:before {
  content: "\f153";
}

.flaticon-tooth:before {
  content: "\f154";
}

.flaticon-smile:before {
  content: "\f155";
}

.flaticon-smile-1:before {
  content: "\f156";
}

.flaticon-smile-2:before {
  content: "\f157";
}

.flaticon-smile-3:before {
  content: "\f158";
}

.flaticon-tick-1:before {
  content: "\f159";
}

.flaticon-tick-2:before {
  content: "\f15a";
}

.flaticon-clock-1:before {
  content: "\f15b";
}

.flaticon-chat-4:before {
  content: "\f15c";
}

.flaticon-dental-review:before {
  content: "\f15d";
}

.flaticon-dentist:before {
  content: "\f15e";
}

.flaticon-tooth-whitening:before {
  content: "\f15f";
}

.flaticon-cavities:before {
  content: "\f160";
}

.flaticon-woman:before {
  content: "\f161";
}

.flaticon-star-1:before {
  content: "\f162";
}

.flaticon-star-2:before {
  content: "\f163";
}

.flaticon-dentist-1:before {
  content: "\f164";
}

.flaticon-next-2:before {
  content: "\f165";
}

.flaticon-message:before {
  content: "\f166";
}

.flaticon-magnifying-glass:before {
  content: "\f167";
}

.flaticon-protection:before {
  content: "\f168";
}

.flaticon-tooth-1:before {
  content: "\f169";
}

.flaticon-apple:before {
  content: "\f16a";
}

.flaticon-dental:before {
  content: "\f16b";
}

.flaticon-medical-appointment:before {
  content: "\f16c";
}

.flaticon-dentist-2:before {
  content: "\f16d";
}

.flaticon-healthy-tooth:before {
  content: "\f16e";
}

.flaticon-address:before {
  content: "\f16f";
}

.flaticon-alarm-clock:before {
  content: "\f170";
}

/*!
 *  Font Awesome 4.5.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */@font-face{font-family:'FontAwesome';src:url('../fonts/fontawesome-webfont.eot?v=4.5.0');src:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.5.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.5.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.5.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.5.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.5.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1);-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1);-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}


@font-face {
  font-family: 'icomoon';
  src: url('../fonts/icomoon.eot?vdw2jk');
  src: url('../fonts/icomoon.eot?vdw2jk#iefix') format('embedded-opentype'),
    url('../fonts/icomoon.ttf?vdw2jk') format('truetype'),
    url('../fonts/icomoon.woff?vdw2jk') format('woff'),
    url('../fonts/icomoon.svg?vdw2jk#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"],
[class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}










.icon-email:before {
  content: "\e900";
}

.icon-pin:before {
  content: "\e901";
}

.icon-time:before {
  content: "\e902";
}

.icon-refresh:before {
  content: "\e903";
}

.icon-twitter:before {
  content: "\e904";
}

.icon-facebook:before {
  content: "\e905";
}

.icon-pinterest:before {
  content: "\e906";
}

.icon-instagram:before {
  content: "\e907";
}

.icon-phone-ringing:before {
  content: "\e908";
}

.icon-magnifying-glass:before {
  content: "\e909";
}

.icon-right-arrow:before {
  content: "\e90a";
}

.icon-left-arrow:before {
  content: "\e90b";
}

.icon-dustbin:before {
  content: "\e90c";
}

.icon-garbage-can:before {
  content: "\e90d";
}

.icon-calendar:before {
  content: "\e90e";
}

.icon-arrow-right:before {
  content: "\e90f";
}

.icon-garbage-bin:before {
  content: "\e910";
}

.icon-dustbin-1:before {
  content: "\e911";
}

.icon-portable-toilet:before {
  content: "\e912";
}

.icon-recycle:before {
  content: "\e913";
}

.icon-right-arrow-1:before {
  content: "\e914";
}

.icon-left-quote:before {
  content: "\e915";
}

.icon-toxic-waste:before {
  content: "\e916";
}

.icon-store:before {
  content: "\e917";
}

.icon-restaurant:before {
  content: "\e918";
}

.icon-stethoscope:before {
  content: "\e919";
}

.icon-play-buttton:before {
  content: "\e91a";
}

.icon-user:before {
  content: "\e91b";
}

.icon-chat:before {
  content: "\e91c";
}

.icon-open-envelope:before {
  content: "\e91d";
}

.icon-send:before {
  content: "\e91e";
}

.icon-telephone:before {
  content: "\e91f";
}

.icon-email-1:before {
  content: "\e920";
}

.icon-pin-1:before {
  content: "\e921";
}

.icon-trash-truck:before {
  content: "\e922";
}

.icon-waste:before {
  content: "\e923";
}

.icon-recycling:before {
  content: "\e924";
}

.icon-checkmark:before {
  content: "\e925";
}

.icon-check-mark-button:before {
  content: "\e926";
}

.icon-arrow-down:before {
  content: "\e927";
}

.icon-arrow-up:before {
  content: "\e928";
}

.icon-factory:before {
  content: "\e929";
}

.icon-knowledge:before {
  content: "\e92a";
}

.icon-desk:before {
  content: "\e92b";
}

.icon-plus-sign:before {
  content: "\e92c";
}

.icon-next:before {
  content: "\e92d";
}

.icon-reload:before {
  content: "\e92e";
}

.icon-refresh-button:before {
  content: "\e92f";
}

.icon-loop:before {
  content: "\e930";
}

.icon-minus:before {
  content: "\e931";
}

/* Remove Chrome Input Field's Unwanted Yellow Background Color */
input:-webkit-autofill, 
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0px 1000px white inset !important;
}
::-webkit-input-placeholder { / Chrome/Opera/Safari /
    color: #000 !important;
}
::-moz-placeholder { / Firefox 19+ /
    color: #000 !important;
}
::-ms-input-placeholder { / IE 10+ /
    color: #000 !important;
}
::-moz-placeholder { / Firefox 18- /
    color: #000 !important;
}
.owl-carousel .owl-dots{
    margin: 0 !important;    
}




/* Jquery ui select css */
.ui-state-default {
    width: auto !important;
}
.ui-selectmenu-open .ui-widget-content {
    border: 1px solid #1d1d1d !important;
    background: #ffffff !important;
    color: #222222 !important;
    border-radius: 0 !important;
}
/* Jquery ui select hover bg css */
.ui-selectmenu-open .ui-widget-content .ui-state-focus {
    border: 1px solid #1d1d1d !important;
    background: #1d1d1d !important;
    font-weight: normal !important;
    color: #ffffff !important;
    font-size: 13px !important;
}
/* Jquery ui select hover some change css */
.ui-selectmenu-open .ui-menu .ui-menu-item {
    border: 1px solid transparent !important;
    position: relative !important;
    margin: 0;
    padding: 5px 15px !important;
    cursor: pointer !important;
    font-size: 13px !important;
    text-transform: none !important;
}
.ui-selectmenu-menu .ui-menu {
    padding-bottom: 0px !important;
}



#contact-form input[type="text"].error{
    border-color: red;
}
#contact-form input[type="email"].error{
    border-color: red;
}
#contact-form select.error {
    border-color: red;
}
#contact-form textarea.error{
    border-color: red;
}
#contact-form label.error {
    display: none !important;
}












.bootstrap-touchspin .input-group-btn-vertical {
  position: relative;
  white-space: nowrap;
  width: 1%;
  vertical-align: middle;
  display: table-cell;
}

.bootstrap-touchspin .input-group-btn-vertical > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
  padding: 8px 10px;
  margin-left: -1px;
  position: relative;
}

.bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
  border-radius: 0;
  border-top-right-radius: 4px;
}

.bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {
  margin-top: -2px;
  border-radius: 0;
  border-bottom-right-radius: 4px;
}

.bootstrap-touchspin .input-group-btn-vertical i {
  position: absolute;
  top: 3px;
  left: 5px;
  font-size: 9px;
  font-weight: normal;
}


/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; 
    border: 5px dashed rgba(0, 0, 0, 0.70);  
}

.mfp-iframe-holder .mfp-close {
    top: -45px;
    width: 40px;
    height: 40px;
    border: 2px solid rgba(0, 0, 0, 0.70);
    border-radius: 0%;
    padding: 0;
    text-align: center;
    right: -5px;
    line-height: 38px;
}

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }


.nice-select {
    position: relative;
    display: block;
    -webkit-tap-highlight-color: transparent;
    background-color: #fff;
    border-radius: 0px;
    border: 1px solid #edeef2;
    box-sizing: border-box;
    clear: both;
    cursor: pointer;
    float: left;
    font-family: inherit;
    color: var(--thm-gray);
    font-size: 14px;
    font-weight: 400;
    height: 40px;
    line-height: 38px;
    outline: none;
    padding-left: 20px;
    padding-right: 20px;
    text-align: left !important;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;
}

.nice-select:hover {}

.nice-select:active,
.nice-select.open,
.nice-select:focus {
    border-color: var(--thm-base);
}


.nice-select:after {
    position: absolute;
    right: 17px;
    top: 50%;
    margin-top: -4px;
    display: block;
    border-bottom: 2px solid #999;
    border-right: 2px solid #999;
    content: '';
    width: 6px;
    height: 6px;
    pointer-events: none;
    -webkit-transform-origin: 66% 66%;
    -ms-transform-origin: 66% 66%;
    transform-origin: 66% 66%;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
}

.nice-select.open:after {
    -webkit-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    transform: rotate(-135deg);
}

.nice-select.open .list {
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale(1) translateY(0);
    -ms-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
}

.nice-select.disabled {
    border-color: #ededed;
    color: #999;
    pointer-events: none;
}

.nice-select.disabled:after {
    border-color: #cccccc;
}

.nice-select.wide {
    width: 100%;
}

.nice-select.wide .list {
    left: 0 !important;
    right: 0 !important;
}


.nice-select.right {
    float: right;
}

.nice-select.right .list {
    left: auto;
    right: 0;
}

.nice-select.small {
    font-size: 12px;
    height: 36px;
    line-height: 34px;
}

.nice-select.small:after {
    height: 4px;
    width: 4px;
}

.nice-select.small .option {
    line-height: 34px;
    min-height: 34px;
}



.nice-select .list {
    background-color: var(--thm-base);
    border-radius: 0px;
    box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11);
    box-sizing: border-box;
    margin-top: 4px;
    opacity: 0;
    overflow: hidden;
    padding: 0;
    pointer-events: none;
    position: absolute;
    top: 100%;
    left: 0;
    -webkit-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    transform-origin: 50% 0;
    -webkit-transform: scale(0.75) translateY(-21px);
    -ms-transform: scale(0.75) translateY(-21px);
    transform: scale(0.75) translateY(-21px);
    -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
    z-index: 9;
}

.nice-select .list:hover .option:not(:hover) {
    background-color: transparent !important;
}

.nice-select .option {
    color: #ffffff;
    font-weight: 400;
    line-height: 40px;
    list-style: none;
    min-height: 40px;
    outline: none;
    padding-left: 18px;
    padding-right: 29px;
    text-align: left;
    cursor: pointer;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}

.nice-select .option:hover,
.nice-select .option.focus,
.nice-select .option.selected.focus {
    color: #ffffff;
    background-color: var(--thm-black);
}

.nice-select .option.selected {
    font-weight: 700;
}

.nice-select .option.disabled {
    background-color: transparent;
    color: #999;
    cursor: default;
}

.no-csspointerevents .nice-select .list {
    display: none;
}


.no-csspointerevents .nice-select.open .list {
    display: block;
}

/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
/*
 *  Owl Carousel - Core
 */
.owl-carousel {
  display: none;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  /* position relative and z-index fix webkit rendering fonts issue */
  position: relative;
  z-index: 1; }
  .owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y;
    touch-action: manipulation;
    -moz-backface-visibility: hidden;
    /* fix firefox animation glitch */ }
  .owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0; }
  .owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    /* fix for flashing background */
    -webkit-transform: translate3d(0px, 0px, 0px); }
  .owl-carousel .owl-wrapper,
  .owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0); }
  .owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none; }
  .owl-carousel .owl-item img {
    display: block;
    width: 100%; }
  .owl-carousel .owl-nav.disabled,
  .owl-carousel .owl-dots.disabled {
    display: none; }
  .owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next,
  .owl-carousel .owl-dot {
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel .owl-nav button.owl-prev,
  .owl-carousel .owl-nav button.owl-next,
  .owl-carousel button.owl-dot {
    background: none;
    color: inherit;
    border: none;
    padding: 0 !important;
    font: inherit; }
  .owl-carousel.owl-loaded {
    display: block; }
  .owl-carousel.owl-loading {
    opacity: 0;
    display: block; }
  .owl-carousel.owl-hidden {
    opacity: 0; }
  .owl-carousel.owl-refresh .owl-item {
    visibility: hidden; }
  .owl-carousel.owl-drag .owl-item {
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-grab {
    cursor: move;
    cursor: grab; }
  .owl-carousel.owl-rtl {
    direction: rtl; }
  .owl-carousel.owl-rtl .owl-item {
    float: right; }

/* No Js */
.no-js .owl-carousel {
  display: block; }

/*
 *  Owl Carousel - Animate Plugin
 */
.owl-carousel .animated {
  animation-duration: 1000ms;
  animation-fill-mode: both; }

.owl-carousel .owl-animated-in {
  z-index: 0; }

.owl-carousel .owl-animated-out {
  z-index: 1; }

.owl-carousel .fadeOut {
  animation-name: fadeOut; }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

/*
 *  Owl Carousel - Auto Height Plugin
 */
.owl-height {
  transition: height 500ms ease-in-out; }

/*
 *  Owl Carousel - Lazy Load Plugin
 */
.owl-carousel .owl-item {
  /**
      This is introduced due to a bug in IE11 where lazy loading combined with autoheight plugin causes a wrong
      calculation of the height of the owl-item that breaks page layouts
     */ }
  .owl-carousel .owl-item .owl-lazy {
    opacity: 0;
    transition: opacity 400ms ease; }
  .owl-carousel .owl-item .owl-lazy[src^=""], .owl-carousel .owl-item .owl-lazy:not([src]) {
    max-height: 0; }
  .owl-carousel .owl-item img.owl-lazy {
    transform-style: preserve-3d; }

/*
 *  Owl Carousel - Video Plugin
 */
.owl-carousel .owl-video-wrapper {
  position: relative;
  height: 100%;
  background: #000; }

.owl-carousel .owl-video-play-icon {
  position: absolute;
  height: 80px;
  width: 80px;
  left: 50%;
  top: 50%;
  margin-left: -40px;
  margin-top: -40px;
  background: url("owl.video.play.png") no-repeat;
  cursor: pointer;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  transition: transform 100ms ease; }

.owl-carousel .owl-video-play-icon:hover {
  -ms-transform: scale(1.3, 1.3);
      transform: scale(1.3, 1.3); }

.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
  display: none; }

.owl-carousel .owl-video-tn {
  opacity: 0;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  transition: opacity 400ms ease; }

.owl-carousel .owl-video-frame {
  position: relative;
  z-index: 1;
  height: 100%;
  width: 100%; }


@media only screen and (max-width: 5000px) {

    .boxed_wrapper_box_page {
        overflow-x: hidden;
    }


}


/* Large Layout: 1200px. */
@media only screen and (min-width: 1200px) {}






/* Medium screen  */
@media only screen and (min-width: 992px) and (max-width: 1199px) {

    /*** Header Style One Css ***/
    .header-top {
        display: none;
    }


    .about-style1__content {
        margin-top: 50px;
        margin-left: 0px;
    }

    .about-style1__image .text-outer {
        display: none;
    }



    .service-style1__top-title {
        max-width: 100%;
        width: 100%;
        padding-bottom: 33px;
    }

    .service-style1__top {
        padding-bottom: 60px;
    }



    .single-features-style2-box {
        padding: 112px 30px;
    }

    .single-features-style2-box .inner-content {
        max-width: 100%;
        width: 100%;
        float: none;
    }

    .single-features-style2-box.left .inner-content {
        float: none;
        margin-left: 0;
    }

    .single-features-style2-box .inner-content .title h2 {
        font-size: 30px;
    }



    .single-service-style2 .text-holder {
        padding: 33px 36px 43px;
    }

    .single-service-style2 .text-holder h3 {
        font-size: 24px;
    }



    .choose-style1__title-box .sec-title--style2 {
        padding-bottom: 28px;
    }


    .single-blog-style1 {
        max-width: 570px;
        margin: 0 auto 40px;
    }

    .single-blog-style1__inner {
        padding-left: 0px;
        min-height: auto;
    }

    .single-blog-style1 .img-holder {
        position: relative;
        width: 100%;
    }

    .single-blog-style1 .text-holder {
        border: 1px solid #cad7cf;
        border-left: 1px solid #cad7cf;
        border-top: none;
        padding: 36px 30px 29px;
    }



    .phone-number-box2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slogan-text-box {
        text-align: center;
        padding: 20px 0 30px;
    }

    .slogan-btn-box {
        text-align: center;
    }



    /*** Footer Area Css ***/
    .bottom-parallax,
    .parallax-visible .bottom-parallax {
        position: relative;
        height: auto;
        opacity: 1;
        visibility: visible;
        z-index: 10;
    }

    .bottom-parallax .footer-area {
        position: relative;
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
    }

    .single-footer-widget.marbtm50 {
        margin-bottom: 50px;
    }

    .single-footer-widget.margin-left40 {
        margin-left: 0px;
    }

    .single-footer-widget--contact-info-box {
        float: left;
    }



    .header-style2 .auto-container {
        padding-left: 100px;
    }



    .about-style2__content {
        padding-top: 50px;
        padding-left: 0px;
    }

    .about-style2-area .container::before {
        left: -1000000px;
        bottom: -120px;
        right: -100000px;
        background: #ebf1ed;
    }

    .about-style2__image::before {
        display: none;
    }



    .features-style3__list {
        padding-top: 50px;
    }


    .testimonial-style2-area .shape1 {
        display: none;
    }



    .single-working-process .icon-holder {
        width: 150px;
        height: 150px;
    }

    .single-working-process .icon-holder:before {
        left: -36px;
        bottom: -36px;
        right: -36px;
        height: 110px;
    }

    .working-process__inner .horizontal-line {
        top: 75px;
        left: -90px;
        right: -90px;
    }

    .single-working-process:nth-child(2n+2) .icon-holder:before {
        top: -35px;
        bottom: auto;
        height: 110px;
    }



    .service-details__content .text-box2 .text-box2-single {
        margin-bottom: 10px;
    }

    .service-details__content .text-box4 .content-box {
        padding-top: 50px;
    }



    .about-style3__content {
        padding-top: 50px;
        margin-left: 0px;
    }



    .single-service-style2 .text-holder h3 {
        font-size: 22px;
    }



    .industries-details__text-box .text-right-box {
        padding-top: 53px;
    }



    .faq-form-box {
        margin-top: 70px;
    }



    .blog-page-three .single-blog-style1 {
        max-width: 100%;
    }

    .thm-sidebar-box {
        padding-top: 80px;
    }


    .blog-details-page .single-blog-style1 {
        max-width: 100%;
    }


    .contact-info-box .text p br {
        display: none;
    }



    .testimonial-style1__conent-box .text-box {
        padding-top: 130px;
    }

    #testimonials-style1__thumb {
        left: 0px;
    }

    .testimonial-style1__conent-box .img-box {
        margin-left: 30px;
    }














}






/* Tablet Layout: 768px. */
@media only screen and (min-width: 768px) and (max-width: 991px) {

    /*** Header Style One Css ***/
    .header-top {
        display: none;
    }

    .phone-number-box1 {
        display: none;
    }


    .features-style1__content ul {
        display: block;
        padding: 0 50px;
        margin-top: -60px;
    }

    .features-style1__content ul li {
        max-width: 100%;
        width: 100%;
    }


    .about-style1__content {
        margin-top: 50px;
        margin-left: 0px;
    }

    .about-style1-area .shape1 {
        display: none;
    }

    .about-style1__image .text-outer {
        display: none;
    }



    .service-style1__top {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 60px;
    }

    .service-style1__top-title {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        width: 100%;
        text-align: center;
    }

    .service-style1__top-title .text {
        padding-top: 15px;
        padding-bottom: 28px;
        max-width: 100%;
    }



    .single-features-style2-box {
        padding: 112px 30px;
    }

    .single-features-style2-box .inner-content {
        max-width: 100%;
        width: 100%;
        float: none;
    }

    .single-features-style2-box.left .inner-content {
        float: none;
        margin-left: 0;
    }



    .choose-style1__title-box .sec-title--style2 {
        padding-bottom: 28px;
    }

    .single-fact-counter {
        max-width: 100%;
        width: 100%;
        padding-left: 0px;
        padding-right: 0px;
        margin-bottom: 38px;
    }

    .single-fact-counter:before {
        display: none;
    }



    .single-blog-style1 {
        max-width: 570px;
        margin: 0 auto 40px;
    }

    .single-blog-style1__inner {
        padding-left: 0px;
        min-height: auto;
    }

    .single-blog-style1 .img-holder {
        position: relative;
        width: 100%;
    }

    .single-blog-style1 .text-holder {
        border: 1px solid #cad7cf;
        border-left: 1px solid #cad7cf;
        border-top: none;
        padding: 36px 30px 29px;
    }


    .phone-number-box2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slogan-text-box {
        text-align: center;
        padding: 20px 0 30px;
    }

    .slogan-btn-box {
        text-align: center;
    }


    /*** Footer Area Css ***/
    .bottom-parallax,
    .parallax-visible .bottom-parallax {
        position: relative;
        height: auto;
        opacity: 1;
        visibility: visible;
        z-index: 10;
    }

    .bottom-parallax .footer-area {
        position: relative;
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
    }

    .single-footer-widget.marbtm50 {
        margin-bottom: 50px;
    }

    .single-footer-widget.margin-left40 {
        margin-left: 0px;
    }

    .single-footer-widget--contact-info-box {
        float: left;
    }

    .subscribe-title {
        margin-bottom: 10px;
    }



    .header-style2 .auto-container {
        padding-left: 20px;
        padding-right: 20px;
    }

    .header-style2__right {
        display: none;
    }



    .service-style3-area .container::before {
        left: -1000000px;
        bottom: -80px;
        right: -100000px;
    }

    .service-style3__top {
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding-bottom: 48px;
    }

    .service-style3__top .text {
        top: 0px;
        max-width: 100%;
        width: 100%;
        padding-top: 15px;
    }



    .about-style2__content {
        padding-top: 50px;
        padding-left: 0px;
    }

    .about-style2-area .container::before {
        left: -1000000px;
        bottom: -120px;
        right: -100000px;
        background: #ebf1ed;
    }

    .about-style2__image::before {
        display: none;
    }


    .features-style3__list {
        padding-top: 50px;
    }



    .working-process__inner .horizontal-line {
        display: none;
    }

    .working-process-area .sec-title {
        padding-bottom: 54px;
    }

    .single-working-process {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        padding: 0px 30px 0px;
        margin-bottom: 48px;
    }

    .testimonial-style2-area .shape1 {
        display: none;
    }

    .single-working-process .icon-holder::after {
        display: none;
    }

    .single-working-process .text-holder {
        padding-top: 40px;
    }



    .service-details__content .text-box2 .text-box2-single {
        margin-bottom: 10px;
    }

    .service-details__content .text-box4 .content-box {
        padding-top: 50px;
    }

    .service-details__sidebar {
        margin-top: 70px;
    }


    .about-style3__content {
        padding-top: 50px;
        margin-left: 0px;
    }


    .faq-form-box {
        margin-top: 70px;
    }



    .blog-page-three .single-blog-style1 {
        max-width: 100%;
    }

    .thm-sidebar-box {
        padding-top: 80px;
    }


    .blog-details-page .single-blog-style1 {
        max-width: 100%;
    }



    .contact-form--style2 {
        max-width: 100%;
        padding: 58px 70px 48px;
        margin-top: 60px;
    }



    .testimonial-style1__conent-box .text-box {
        padding-top: 130px;
    }

    #testimonials-style1__thumb {
        left: 0px;
    }

    .testimonial-style1__conent-box .img-box {
        margin-left: 30px;
    }












}




/* Mobile Layout: 320px. */
@media only screen and (max-width: 767px) {

    .sec-title h2 br {
        display: none;
    }

    /*** Header Style One Css ***/
    .header .auto-container {
        padding-right: 20px;
    }

    .header-top {
        display: none;
    }

    .phone-number-box1 {
        display: none;
    }

    .serach-button-style1 {
        display: none;
    }

    .header-social-link {
        display: none;
    }

    .header-right {
        display: none;
    }

    .main-logo-box {
        width: 220px;
    }


    .features-style1__content ul {
        display: block;
        padding: 0 20px;
        margin-top: -60px;
    }

    .features-style1__content ul li {
        max-width: 100%;
        width: 100%;
        padding: 0 0px;
        padding-top: 54px;
        padding-bottom: 45px;
    }

    .single-features-style1 {
        padding-left: 0px;
    }

    .single-features-style1 .icon-holder {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
    }

    .single-features-style1 .text-holder {
        padding-top: 25px;
        padding-left: 0px;
        text-align: center;
    }



    .about-style1__content {
        margin-top: 50px;
        margin-left: 0px;
    }

    .about-style1-area .shape1 {
        display: none;
    }

    .about-style1__image .text-outer {
        display: none;
    }

    .video-gallery-style1 {
        float: none;
        margin: 25px 0 0;
    }

    .about-style1__image ul {
        margin-left: 0px;
        margin-right: 0px;
    }

    .about-style1__image ul li {
        float: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .about-style1__image ul li:last-child {
        margin-bottom: 0;
    }

    .about-style1__image ul li .img-box {
        max-width: 200px;
        width: 100%;
        margin: 0 auto;
    }

    .about-style1__image ul li:last-child .img-box {
        max-width: 320px;
    }

    .about-style1__image .border-top {
        display: none;
    }

    .about-style1__image .border-left {
        display: none;
    }

    .about-style1__image .border-bottom {
        display: none;
    }

    .about-style1__image .border-right {
        display: none;
    }



    .service-style1__top {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-bottom: 60px;
    }

    .service-style1__top-title {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        width: 100%;
        text-align: center;
    }

    .service-style1__top-title .text {
        padding-top: 15px;
        padding-bottom: 18px;
        max-width: 300px;
        margin: 0 auto;
    }

    .service-style1__top .sec-title--style2 h2 {
        font-size: 40px;
    }




    .single-features-style2-box {
        padding: 112px 30px;
        min-height: 360px;
    }

    .single-features-style2-box .inner-content {
        float: none;
        padding-left: 75px;
        width: 320px;
    }

    .single-features-style2-box .inner-content .title h2 {
        font-size: 26px;
    }

    .single-features-style2-box .inner-content .title h2 br {
        display: none;
    }

    .single-features-style2-box.left .inner-content {
        float: none;
        margin-left: 0px;
    }



    .single-service-style2 .text-holder {
        padding: 33px 36px 43px;
    }

    .single-service-style2 .text-holder h3 {
        font-size: 24px;
    }



    .choose-style1__title-box .sec-title--style2 {
        padding-bottom: 28px;
    }

    .single-fact-counter {
        max-width: 100%;
        width: 100%;
        text-align: center;
        padding-left: 0px;
        padding-right: 0px;
        margin-bottom: 38px;
    }

    .single-fact-counter:before {
        display: none;
    }


    .single-blog-style1 {
        max-width: 570px;
        margin: 0 auto 40px;
    }

    .single-blog-style1__inner {
        padding-left: 0px;
        min-height: auto;
    }

    .single-blog-style1 .img-holder {
        position: relative;
        width: 100%;
    }

    .single-blog-style1 .text-holder {
        border: 1px solid #cad7cf;
        border-left: 1px solid #cad7cf;
        border-top: none;
        padding: 36px 30px 29px;
    }


    .phone-number-box2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .phone-number-box2 .phone {
        padding-left: 10px;
    }

    .phone-number-box2 .phone a {
        font-size: 24px;
    }

    .slogan-text-box {
        text-align: center;
        padding: 20px 0 30px;
    }

    .slogan-btn-box {
        text-align: center;
    }


    /*** Footer Area Css ***/
    .bottom-parallax,
    .parallax-visible .bottom-parallax {
        position: relative;
        height: auto;
        opacity: 1;
        visibility: visible;
        z-index: 10;
    }

    .bottom-parallax .footer-area {
        position: relative;
        top: 0px;
        left: 0px;
        width: 100%;
        height: auto;
    }

    .single-footer-widget.marbtm50 {
        margin-bottom: 50px;
    }

    .single-footer-widget.pdtop50 {
        padding-top: 50px;
    }

    .single-footer-widget.margin-left40 {
        margin-left: 0px;
    }

    .single-footer-widget--contact-info-box {
        float: left;
    }


    .subscribe-content-box {
        padding: 31px 20px 31px;
    }

    .subscribe-title {
        margin-bottom: 10px;
    }

    .subscribe-title .inner-title {
        padding-left: 10px;
    }

    .subscribe-title .inner-title h3 {
        font-size: 18px;
    }

    .subscribe-title .inner-title h3 br {
        display: none;
    }



    .header-style2 .auto-container {
        padding-left: 20px;
        padding-right: 20px;
    }

    .header-style2 .outer-box::before {
        left: -20px;
        right: -20px;
    }

    .main-logo-box-style2 {
        margin-right: 0px;
    }

    .header-style2__right {
        display: none;
    }



    .service-style3-area .container::before {
        left: -1000000px;
        bottom: -80px;
        right: -100000px;
    }

    .service-style3__top {
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding-bottom: 48px;
    }

    .service-style3__top .text {
        top: 0px;
        max-width: 100%;
        width: 100%;
        padding-top: 15px;
    }



    .about-style2__content {
        padding-top: 50px;
        padding-left: 0px;
    }

    .about-style2-area .container::before {
        left: -1000000px;
        bottom: -120px;
        right: -100000px;
        background: #ebf1ed;
    }

    .about-style2__image::before {
        display: none;
    }



    .features-style3__list {
        padding-top: 50px;
    }

    .features-style3__list ul {
        float: none;
    }

    .features-style3__list ul.style2 {
        float: none;
        padding-left: 0;
    }



    .working-process__inner .horizontal-line {
        display: none;
    }

    .working-process-area .sec-title {
        padding-bottom: 54px;
    }

    .single-working-process {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        padding: 0px 30px 0px;
        margin-bottom: 48px;
    }

    .testimonial-style2-area .shape1 {
        display: none;
    }

    .single-working-process .icon-holder::after {
        display: none;
    }

    .single-working-process .text-holder {
        padding-top: 40px;
    }



    .service-details__content .text-box2 .text-box2-single {
        margin-bottom: 10px;
    }

    .service-details__content .text-box4 .content-box {
        padding-top: 50px;
    }

    .service-details__sidebar {
        margin-top: 70px;
    }



    .about-style3__content {
        padding-top: 50px;
        margin-left: 0px;
    }

    .about-style3__content ul li {
        float: none;
        width: 100%;
        border-right: 0px solid #cad7cf;
    }

    .about-style3__content ul li:last-child {
        border-right: none;
        padding-top: 40px;
        padding-left: 0px;
    }

    .about-style3-experience {
        display: none;
    }

    .about-style3__img-box {
        max-width: 100%;
        width: 100%;
        padding-right: 0px;
    }



    .faq-form-box {
        margin-top: 70px;
        padding: 56px 20px 58px;
    }



    .accordion-box .block .acc-btn {
        padding-left: 20px;
        padding-right: 60px;
    }

    .accordion-box .block .acc-content {
        padding-left: 20px;
        padding-right: 20px;
    }


    .blog-page-three .single-blog-style1 {
        max-width: 100%;
    }

    .thm-sidebar-box {
        padding-top: 80px;
    }



    .blog-details-page .single-blog-style1 {
        max-width: 100%;
    }

    .tag-social-share-box {
        flex-direction: column;
        justify-content: center;
        align-content: center;
    }

    .tag-social-share-box .post-social-share {
        margin-top: 10px;
    }

    .blog-details-author {
        padding: 60px 30px 60px;
    }

    .blog-details-author .inner-box .img-box,
    .blog-details-author .inner-box .text {
        display: block;
    }

    .blog-details-author .inner-box .text {
        padding-top: 30px;
        padding-left: 0px;
    }


    .comment-box .single-comment-box {
        padding-left: 0px;
        min-height: auto;
    }

    .comment-box .single-comment-box .img-holder {
        position: relative;
        top: 11px;
    }

    .comment-box .single-comment-box .text-holder {
        padding-top: 25px;
        padding-left: 0px;
        min-height: auto;
    }


    .single-sidebar-box {
        padding: 50px 20px 50px;
    }



    .contact-form--style2 {
        max-width: 100%;
        padding: 58px 30px 48px;
        margin-top: 60px;
    }

    .contact-info-box .text p br {
        display: none;
    }

    .contact-form form .button-box button {
        padding-top: 9px;
        padding-bottom: 5px;
        padding-left: 30px;
        padding-right: 30px;
    }



    .testimonial-style1__conent-box .text-box {
        padding-top: 130px;
    }

    #testimonials-style1__thumb {
        left: 0px;
    }

    .testimonial-style1__conent-box .img-box {
        margin-left: 30px;
    }












}




@media only screen and (min-width: 768px) {

    .main-menu .navigation>li>ul,
    .main-menu .navigation>li>ul>li>ul,
    .main-menu .navigation>li .megamenu {
        display: block !important;
        visibility: hidden;
        opacity: 0;
    }


}



@media only screen and (max-width: 1199px) {


    .main-header .main-menu {
        position: relative;
        display: block;
        width: 100%;
        float: none;
    }

    .main-header .nav-outer .main-menu,
    .sticky-header {
        display: none !important;
    }

    .nav-outer .mobile-nav-toggler {
        display: block;
    }

    .mobile-nav-toggler .icon-bar {
        position: relative;
        display: block;
        background: #ffffff;
        height: 2px;
        width: 30px;
        margin: 7px 5px;
    }


}







@media only screen and (min-width: 1200px) and (max-width: 1550px) {

    /*** Header Style One Css ***/
    .header .auto-container {
        padding-right: 20px;
    }

    .main-menu .navigation>li {
        margin-right: 30px;
    }

    .header-social-link {
        display: none;
    }



    .header-style2 .outer-box::before {
        left: 200px;
    }

    .main-logo-box-style2 {
        margin-right: 30px;
    }

    .header-style2__right {
        padding-right: 20px;
    }

    .header-style2__right .phone-number-box1 {
        margin-right: 0px;
    }

    .header-style2__middle .main-menu .navigation>li {
        margin-right: 20px;
    }



    .testimonial-style2-area .shape1 {
        display: none;
    }






}















@media only screen and (min-width: 1200px) and (max-width: 1420px) {

    /*** Main Slider Css ***/
    .main-slider .auto-container {
        padding: 0px 120px;
    }

    /*** Main Slider Style1 Css ***/







}





@media only screen and (min-width: 992px) and (max-width: 1199px) {

    /*** Main Slider Css ***/
    .main-slider .auto-container {
        padding: 0px 120px;
    }

    /*** Main Slider Style1 Css ***/
    .main-slider .owl-theme .owl-nav {
        padding: 0 30px;
    }

    .main-slider .content .big-title h2 {
        font-size: 70px;
    }


    /*** Main Slider Style2 Css ***/
    .main-slider.style2 {
        padding-left: 100px;
    }














}



@media only screen and (min-width: 768px) and (max-width: 991px) {

    /*** Main Slider Css ***/
    .main-slider .auto-container {
        padding: 0px 120px;
    }


    /*** Main Slider Style1 Css ***/
    .main-slider .owl-theme .owl-nav {
        padding: 0 30px;
    }

    .main-slider .content .big-title h2 {
        font-size: 50px;
    }


    /*** Main Slider Style2 Css ***/
    .main-slider.style2 {
        padding-left: 0px;
    }











}




@media only screen and (min-width: 500px) and (max-width: 767px) {
    .main-slider.style2 {
        margin-top: 0px;
    }

    /*** Main Slider Css ***/
    .main-slider .owl-theme .owl-nav {
        display: none;
    }

    .main-slider .auto-container {
        padding: 0px 50px;
        padding-right: 50px;
    }


    /*** Main Slider Style1 Css ***/
    .main-slider .content .big-title h2 {
        font-size: 50px;
    }

    .main-slider .content .big-title h2 br {
        display: none;
    }


    /*** Main Slider Style2 Css ***/
    .main-slider.style2 {
        padding-left: 0px;
    }













}



@media only screen and (max-width: 499px) {

    /*** Main Slider Css ***/
    .main-slider .owl-theme .owl-nav {
        display: none;
    }

    .main-slider .auto-container {
        padding: 0px 20px;
        padding-right: 20px;
    }


    /*** Main Slider Style1 Css ***/
    .main-slider .slide {
        padding-top: 198px;
        padding-bottom: 221px;
    }

    .main-slider .content .big-title h2 {
        font-size: 40px;
        font-weight: 600;
    }

    .main-slider .content .big-title h2 br {
        display: none;
    }


    /*** Main Slider Style2 Css ***/
    .main-slider.style2 {
        padding-left: 0px;
    }

    .main-slider.style2 .slide {
        position: relative;
        display: block;
        padding-top: 198px;
        padding-bottom: 205px;
    }







}







@media only screen and (max-width: 1199px) {
    .order-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-1 {
        -ms-flex-order: 1;
        order: 1;
    }


}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .order-box-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-box-1 {
        -ms-flex-order: 1;
        order: 1;
    }


}

@media only screen and (min-width: 300px) and (max-width: 767px) {
    .order-box-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-box-1 {
        -ms-flex-order: 1;
        order: 1;
    }


}


/** template rtl css **/

.page_direction {
  display: block;
}

.rtl {
  direction: rtl;
  text-align: right;
}

.ltr {
  direction: ltr;
}

.demo-rtl {
  position: fixed;
  top: 260px;
  left: 0;
  z-index: 9999;
}

button.rtl {
  background: rgba(0, 0, 0, 0.90);
  display: block;
  text-indent: inherit;
  font-size: 12px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-weight: 700;
  margin: 0px;
  color: #fff !important;
}

.demo-ltr {
  position: fixed;
  top: 260px;
  left: auto;
  right: 0;
  z-index: 9999;
}

button.ltr {
  background: rgba(0, 0, 0, 0.90);
  display: block;
  text-indent: inherit;
  font-size: 12px;
  font-weight: 700;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  margin: 0px;
  color: #fff !important;
}

.boxed_wrapper.ltr .demo-rtl {
  display: block;
}

.boxed_wrapper.ltr .demo-ltr {
  display: none;
}

.boxed_wrapper.rtl .demo-rtl {
  display: none;
}

.boxed_wrapper.rtl .demo-ltr {
  display: block;
}

.rtl .pull-left {
  float: right;
}

.rtl .pull-right {
  float: left;
}

.rtl .float-left {
  float: right !important;
}

.rtl .float-right {
  float: left !important;
}

.rtl .checked-box2 label {
  padding-left: 0px;
  padding-right: 30px;
}

.rtl .checked-box2 input[type="checkbox"]+label span {
  left: auto;
  right: 0;
}


.rtl .main-menu {
  float: right;
}

.rtl .main-menu .navigation>li {
  float: right;
}

.rtl .main-menu .navigation>li:first-child {
  margin-right: 0px;
}

.rtl .main-menu .navigation>li:last-child {
  margin-right: 40px;
}

.rtl .main-menu .navigation>li>ul {
  left: auto;
  right: inherit;
}

.rtl .main-menu .navigation>li>ul>li>a {
  text-align: right;
  padding-left: 10px;
  padding-right: 30px;
}

.rtl .main-menu .navigation>li>ul>li>a:before {
  display: block;
  -webkit-transform-origin: left center;
  transform-origin: left center;
  -webkit-transform: scale(1, 0);
  transform: scale(1, 0);
}

.rtl .main-menu .navigation>li>ul>li>a:after {
  display: none;
}

.rtl .main-menu .navigation>li.dropdown>a:after {
  display: none;
}

.rtl .main-menu .navigation>li>ul>li>ul>li a:before {
  display: block;
  -webkit-transform-origin: left center;
  transform-origin: left center;
  -webkit-transform: scale(1, 0);
  transform: scale(1, 0);
}

.rtl .main-menu .navigation>li>ul>li.dropdown>a:after {
  display: none;
}

.rtl .main-menu .navigation>li>ul>li>ul {
  left: auto;
  right: 100%;
}

.rtl .main-menu .navigation>li>ul>li>ul>li>a {
  text-align: right;
  padding-left: 10px;
  padding-right: 30px;
}

.rtl .main-menu .navigation>li>ul>li>ul>li>a:after {
  display: none;
}

.rtl .sticky-header .main-menu .navigation>li {
  float: right;
}


/** Sub Menu **/
.rtl .main-menu .navigation>li>ul>li.dropdown:after {
  left: 30px;
  right: auto;
  transform: rotate(180deg);
}




/***  Mega menu **/
.rtl .main-menu .navigation>li>.megamenu li>a {
  text-align: right;
  padding-right: 10px;
}

.rtl .main-menu .navigation>li>.megamenu li>a:after {
  display: none;
}

.rtl .main-menu .navigation>li>.megamenu li:hover>a:before {
  -webkit-transform-origin: right center;
  transform-origin: right center;
}




.rtl .mobile-menu {
  text-align: right;
}

.rtl .mobile-menu .nav-logo {
  text-align: right;
}

.rtl .mobile-menu .navigation li>a:before {
  left: inherit;
  right: 0px;
}

.rtl .mobile-menu .navigation li.dropdown .dropdown-btn {
  right: inherit;
  left: 6px;
  transform: rotate(90deg);
}

.rtl .mobile-menu .navigation li.dropdown .dropdown-btn.open {
  transform: rotate(0deg);
}



.rtl .scroll-top {
  left: 20px;
  right: auto;
}

.rtl .switcher .switch_btn {
  top: 0px;
  right: 0px;
}

.rtl .switcher .switch_menu {
  left: -285px;
}




.rtl .rtl-carousel {
  direction: ltr;
  text-align: right;
}

.rtl .banner-carousel {
  direction: ltr;
  text-align: right;
}

.rtl .testimonial-carousel-12 {
  direction: ltr;
  text-align: right;
}


.rtl .text-right-rtl {
  text-align: right;
}



/*________________All Home Page Css_______________ */


.rtl .header-top .auto-container {
  padding: 0px 80px;
  padding-right: auto;
  padding-left: 0;
}

.rtl .phone-number-box1 {
  margin-right: 0px;
  margin-left: 50px;
}

.rtl .phone-number-box1 .phone {
  padding-left: 0px;
  padding-right: 20px;
}

.rtl .main-logo-box {
  float: right;
}

.rtl .header-social-link {
  margin-left: 0px;
  margin-right: 80px;
}

.rtl .header .auto-container {
  padding-right: 0px;
  padding-left: 50px;
}

.rtl .serach-button-style1 .search-toggler {
  border-left: 0px solid;
  border-right: 1px solid rgba(var(--thm-base-rgb), .10);
}

.rtl .btn-one .arrow {
  display: none;
}

.rtl .main-slider .owl-theme .owl-nav {
  align-items: flex-start;
}



.rtl .single-features-style1 {
  padding-left: 0px;
  padding-right: 75px;
}

.rtl .single-features-style1 .icon-holder {
  left: auto;
  right: 0;
}

.rtl .single-features-style1 .text-holder {
  padding-left: 0px;
  padding-right: 10px;
}


.rtl .about-style1__image .text-outer {
  display: none;
}



.rtl .about-style1__bottom-content .text-box ul li {
  padding-left: 0px;
  padding-right: 30px;
}

.rtl .about-style1__bottom-content .text-box ul li:before {
  left: auto;
  right: 1px;
}

.rtl .video-gallery-style1 {
  float: left;
}



.rtl .single-features-style2-box .inner-content {
  float: left;
  padding-left: 0;
  padding-right: 75px;
}

.rtl .single-features-style2-box .inner-content .icon {
  left: auto;
  right: 0;
}

.rtl .single-features-style2-box .inner-content .title {
  padding-left: 0px;
  padding-right: 20px;
}


.rtl .phone-number-box2 .phone {
  padding-left: 0px;
  padding-right: 30px;
}


.rtl .footer-widget-contact-info ul li .inner {
  padding-left: 0px;
  padding-right: 35px;
}

.rtl .footer-widget-contact-info ul li .inner .icon {
  left: auto;
  right: 1px;
}


.rtl .footer-social-link ul li {
  float: right;
  margin-right: 0px;
  margin-left: 10px;
}

.rtl .footer-social-link ul li:last-child {
  margin-left: 0;
}


.rtl .single-service-style1 .btn-box a {
  transform: rotate(180deg);
}

.rtl .single-blog-style1 .text-holder .meta-info li i {
  padding-right: 0;
  float: right;
  padding-left: 10px;
}


.rtl .single-features-style2-box.left .inner-content {
  float: left;
  margin-left: 0px;
}




.rtl .single-fact-counter:first-child {
  padding-left: 40px;
  padding-right: 0;
}

.rtl .single-fact-counter:first-child:before {
  display: none;
}

.rtl .single-fact-counter:last-child {
  padding-right: 0;
}




.rtl .order-11 {
  -ms-flex-order: 1;
  order: 1;
}

.rtl .order-22 {
  -ms-flex-order: 2;
  order: 2;
}

.rtl .testimonial-style1__conent-box .img-box {
  float: right;
}

.rtl .testimonial-style1__conent-box .img-box .quote-icon {
  left: -20px;
  right: auto;
}


.rtl #testimonials-style1__carousel-pagination {
  left: 0;
  right: auto;
  bottom: 24px;
  justify-content: center;
  align-items: center;
}

.rtl #testimonials-style1__carousel-pagination .swiper-pagination-bullet+.swiper-pagination-bullet {
  margin-left: 0px;
  margin-right: 10px;
}





.rtl .header-style2 .auto-container {
  padding-left: 0px;
  padding-right: 200px;
}

.rtl .header-style2 .outer-box::before {
  right: 367px;
  left: -100000px;
}

.rtl .main-logo-box-style2 {
  margin-right: 0px;
  margin-left: 120px;
}

.rtl .header-style2__right {
  padding-left: 50px;
  padding-right: 0px;
}



.rtl .main-slider.style2 {
  padding-left: 0px;
  padding-right: 200px;
}



.rtl .service-style3-area .container::before {
  right: 215px;
  left: -100000px;
}



.rtl .about-style2-area .container::before {
  right: 215px;
  left: -100000px;
}



.rtl .features-style3__list ul li span::before {
  padding-right: 13px;
  padding-left: 0px;
  transform: rotate(180deg);
}


.rtl .single-blog-style1--instyle2 .text-holder .meta-info {
  justify-content: flex-end;
  flex-direction: row-reverse;
  align-items: flex-end;
  float: right;
}


.rtl .about-style2__content {
  padding-left: 0px;
  padding-right: 70px;
}



.rtl .about-style2__content-list ul li p span {
  padding-right: 6px;
  padding-left: 0;
  transform: rotate(180deg);
}

.rtl .about-style2__content .author-box .title {
  padding-left: 0px;
  padding-right: 30px;
}






/*** 
=============================================
    Inner Page Css
=============================================
***/
.rtl .about-style3-experience {
  display: none;
}

.rtl .about-style3__img-box {
  max-width: 545px;
  width: 100%;
  padding-right: 0px;
}

.rtl .about-style3__content ul li:first-child {
  padding-left: 0px;
}

.rtl .about-style3__content ul li:first-child {
  padding-left: 0px;
  padding-right: 50px;
}


.rtl .about-style3__content .author-box .title {
  padding-left: 0px;
  padding-right: 30px;
}



.rtl .about-style3__content ul li span:before {
  left: 0px;
}



.rtl .breadcrumb-menu ul li {
  padding-right: 0px;
  margin-right: 0px;
  padding-left: 18px;
  margin-left: 15px;
}

.rtl .breadcrumb-menu ul li:last-child {
  padding-right: 0px;
  margin-right: 0px;
  padding-left: 0px;
  margin-left: 0px;
}

.rtl .breadcrumb-menu ul li:before {
  left: 0;
  right: auto;
}



.rtl .accordion-box .block .acc-btn .icon-outer {
  left: 30px;
  right: auto;
}



.rtl .view-all-service .service-pages li a span {
  float: left;
  transform: rotate(180deg);
}

.rtl .service-details__content .text-box2 .text-box2-single h4 span::before {
  padding-left: 7px;
  padding-right: 0px;
}

.rtl .service-details__content .text-box4 .content-box ul li h4 span::before {
  padding-right: 7px;
  transform: rotate(180deg);
}



.rtl .industries-details__text-box .text-right-box ul li {
  padding-left: 0px;
  padding-right: 30px;
}

.rtl .industries-details__text-box .text-right-box ul li::before {
  left: auto;
  right: 0;
  transform: rotate(180deg);
}



.rtl .single-service-style2 .img-holder .icon-box {
  top: 0px;
  right: 0px;
}


.rtl .styled-pagination li.arrow.next {
  transform: rotate(180deg);
}

.rtl .styled-pagination li.arrow.prev {
  transform: rotate(180deg);
}

.rtl .styled-pagination li:last-child {
  margin-right: 6px;
}



.rtl .sidebar-blog-post ul li .inner {
  padding-left: 0px;
  padding-right: 70px;
}

.rtl .sidebar-blog-post ul li .img-box {
  left: auto;
  right: 0;
}

.rtl .sidebar-blog-post ul li .title-box {
  padding-left: 0px;
  padding-right: 20px;
}

.rtl .sidebar-blog-post ul li .title-box .admin span:before {
  padding-right: 0px;
  padding-left: 3px;
}

.rtl .sidebar-categories-box li a:before {
  display: none;
}

.rtl .sidebar-categories-box li a:hover {
  padding-left: 0px;
  padding-right: 20px;
}

.rtl .single-sidebar-box .popular-tag li {
  float: right;
}

.rtl .single-blog-style1 .text-holder .meta-info li:last-child {
  margin-left: 0px;
  margin-right: 10px;
}



.rtl .blog-details-author .inner-box .text {
  padding-left: 0px;
  padding-right: 40px;
}



.rtl .comment-box .single-comment-box {
  padding-left: 0px;
  padding-right: 140px;
}

.rtl .comment-box .single-comment-box .img-holder {
  left: auto;
  right: 0;
}

.rtl .comment-box .single-comment-box .text-holder {
  padding-left: 0px;
  padding-right: 40px;
}


.rtl .contact-info-list li .text {
  padding-left: 0px;
  padding-right: 20px;
}



.rtl .btn-one:before {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}


.rtl .progress-box .bar .bar-fill {
  left: auto;
  right: 0;
}









/*** 
=============================================
    RTL Page Responsive Css
=============================================
***/


@media only screen and (min-width: 1200px) and (max-width: 1400px) {
  .rtl .main-logo-box-style2 {
    margin-right: 0px;
    margin-left: 60px;
  }


}


@media only screen and (min-width: 1200px) and (max-width: 1300px) {

  .rtl .phone-number-box1 {
    display: none;
  }



}


@media only screen and (min-width: 992px) and (max-width: 1199px) {


  .rtl .single-footer-widget--contact-info-box {
    float: right;
  }

  .rtl .testimonial-style1__conent-box .text-box {
    padding-top: 110px;
  }

  .rtl #testimonials-style1__thumb {
    left: -30px;
    right: 0;
    top: 0px;
  }



  .rtl .header-style2 .auto-container {
    padding-left: 0px;
    padding-right: 100px;
  }

  .rtl .header-style2 .outer-box::before {
    right: 300px;
    left: -100000px;
  }



  .rtl .main-slider.style2 {
    padding-left: 0px;
    padding-right: 100px;
  }



  .rtl .about-style2__content {
    padding-left: 0px;
    padding-right: 0px;
  }




  .rtl .features-style3__list ul {
    float: right;
  }

  .rtl .features-style3__list ul.style2 {
    float: right;
    padding-left: 0;
    padding-right: 50px;
  }













}





@media only screen and (max-width: 991px) and (min-width: 768px) {


  .rtl .single-footer-widget--contact-info-box {
    float: right;
  }



  .rtl .testimonial-style1__conent-box .text-box {
    padding-top: 110px;
  }

  .rtl #testimonials-style1__thumb {
    left: -30px;
    right: 0;
    top: 0px;
  }



  .rtl .header-style2 .auto-container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .rtl .header-style2 .outer-box::before {
    right: -100000px;
    left: -100000px;
  }



  .rtl .main-slider.style2 {
    padding-left: 0px;
    padding-right: 0px;
  }




  .rtl .about-style2__content {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .about-style2-area .container::before {
    right: -100000px;
    left: -100000px;
  }



  .rtl .features-style3__list ul {
    float: right;
  }

  .rtl .features-style3__list ul.style2 {
    float: right;
    padding-left: 0;
    padding-right: 50px;
  }













}






@media only screen and (max-width: 767px) {

  .rtl .single-features-style1 {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .single-features-style1 .text-holder {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .video-gallery-style1 {
    float: right;
  }



  .rtl .single-features-style2-box {
    padding: 112px 0px;
    min-height: 360px;
  }


  .rtl .single-features-style2-box .inner-content .icon {
    left: auto;
    right: 10px;
  }



  .rtl .single-footer-widget--contact-info-box {
    float: right;
  }



  .rtl .testimonial-style1__conent-box .text-box {
    padding-top: 110px;
  }

  .rtl #testimonials-style1__thumb {
    left: -30px;
    right: 0;
    top: 0px;
  }




  .rtl .header-style2 .auto-container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .rtl .header-style2 .outer-box::before {
    right: -100000px;
    left: -100000px;
  }

  .rtl .main-logo-box-style2 {
    margin-right: 0px;
    margin-left: 0px;
  }



  .rtl .main-slider.style2 {
    padding-left: 0px;
    padding-right: 0px;
  }



  .rtl .about-style2__content {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .about-style2-area .container::before {
    right: -100000px;
    left: -100000px;
  }

  .rtl .service-style3-area .container::before {
    right: -100000px;
    left: -100000px;
  }



  .rtl .single-fact-counter:first-child {
    padding-left: 0px;
    padding-right: 0;
  }



  .rtl .header .auto-container {
    padding-right: 0px;
    padding-left: 20px;
  }




  .rtl .about-style3__content ul li:first-child {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .about-style3__content ul li span:before {
    left: 0px;
  }



  .rtl .blog-details-author .inner-box .text {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .comment-box .single-comment-box {
    padding-left: 0px;
    padding-right: 0px;
  }

  .rtl .comment-box .single-comment-box .text-holder {
    padding-left: 0px;
    padding-right: 0px;
  }











}

.mCustomScrollbar{-ms-touch-action:none;touch-action:none}.mCustomScrollbar.mCS_no_scrollbar,.mCustomScrollbar.mCS_touch_action{-ms-touch-action:auto;touch-action:auto}.mCustomScrollBox{position:relative;overflow:hidden;height:100%;max-width:100%;outline:0;direction:ltr}.mCSB_container{overflow:hidden;width:auto;height:auto}.mCSB_inside>.mCSB_container{margin-right:30px}.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden{margin-right:0}.mCS-dir-rtl>.mCSB_inside>.mCSB_container{margin-right:0;margin-left:30px}.mCS-dir-rtl>.mCSB_inside>.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden{margin-left:0}.mCSB_scrollTools{position:absolute;width:16px;height:auto;left:auto;top:0;right:0;bottom:0;opacity:.75;filter:"alpha(opacity=75)";-ms-filter:"alpha(opacity=75)"}.mCSB_outside+.mCSB_scrollTools{right:-26px}.mCS-dir-rtl>.mCSB_inside>.mCSB_scrollTools,.mCS-dir-rtl>.mCSB_outside+.mCSB_scrollTools{right:auto;left:0}.mCS-dir-rtl>.mCSB_outside+.mCSB_scrollTools{left:-26px}.mCSB_scrollTools .mCSB_draggerContainer{position:absolute;top:0;left:0;bottom:0;right:0;height:auto}.mCSB_scrollTools a+.mCSB_draggerContainer{margin:20px 0}.mCSB_scrollTools .mCSB_draggerRail{width:2px;height:100%;margin:0 auto;-webkit-border-radius:16px;-moz-border-radius:16px;border-radius:16px}.mCSB_scrollTools .mCSB_dragger{cursor:pointer;width:100%;height:30px;z-index:1}.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{position:relative;width:4px;height:100%;margin:0 auto;-webkit-border-radius:16px;-moz-border-radius:16px;border-radius:16px;text-align:center}.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar{width:12px}.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{width:8px}.mCSB_scrollTools .mCSB_buttonDown,.mCSB_scrollTools .mCSB_buttonUp{display:block;position:absolute;height:20px;width:100%;overflow:hidden;margin:0 auto;cursor:pointer}.mCSB_scrollTools .mCSB_buttonDown{bottom:0}.mCSB_horizontal.mCSB_inside>.mCSB_container{margin-right:0;margin-bottom:30px}.mCSB_horizontal.mCSB_outside>.mCSB_container{min-height:100%}.mCSB_horizontal>.mCSB_container.mCS_no_scrollbar_x.mCS_x_hidden{margin-bottom:0}.mCSB_scrollTools.mCSB_scrollTools_horizontal{width:auto;height:16px;top:auto;right:0;bottom:0;left:0}.mCustomScrollBox+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,.mCustomScrollBox+.mCSB_scrollTools.mCSB_scrollTools_horizontal{bottom:-26px}.mCSB_scrollTools.mCSB_scrollTools_horizontal a+.mCSB_draggerContainer{margin:0 20px}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:2px;margin:7px 0}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_dragger{width:30px;height:100%;left:0}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{width:100%;height:4px;margin:6px auto}.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar{height:12px;margin:2px auto}.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{height:8px;margin:4px 0}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonLeft,.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonRight{display:block;position:absolute;width:20px;height:100%;overflow:hidden;margin:0 auto;cursor:pointer}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonLeft{left:0}.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonRight{right:0}.mCSB_container_wrapper{position:absolute;height:auto;width:auto;overflow:hidden;top:0;left:0;right:0;bottom:0;margin-right:30px;margin-bottom:30px}.mCSB_container_wrapper>.mCSB_container{padding-right:30px;padding-bottom:30px}.mCSB_vertical_horizontal>.mCSB_scrollTools.mCSB_scrollTools_vertical{bottom:20px}.mCSB_vertical_horizontal>.mCSB_scrollTools.mCSB_scrollTools_horizontal{right:20px}.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden+.mCSB_scrollTools.mCSB_scrollTools_vertical{bottom:0}.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_scrollTools.mCSB_scrollTools_horizontal,.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden+.mCSB_scrollTools~.mCSB_scrollTools.mCSB_scrollTools_horizontal{right:0}.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_scrollTools.mCSB_scrollTools_horizontal{left:20px}.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden+.mCSB_scrollTools~.mCSB_scrollTools.mCSB_scrollTools_horizontal{left:0}.mCS-dir-rtl>.mCSB_inside>.mCSB_container_wrapper{margin-right:0;margin-left:30px}.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden>.mCSB_container{padding-right:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden>.mCSB_container{padding-bottom:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden{margin-right:0;margin-left:0}.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden{margin-bottom:0}.mCSB_scrollTools,.mCSB_scrollTools .mCSB_buttonDown,.mCSB_scrollTools .mCSB_buttonLeft,.mCSB_scrollTools .mCSB_buttonRight,.mCSB_scrollTools .mCSB_buttonUp,.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{-webkit-transition:opacity .2s ease-in-out,background-color .2s ease-in-out;-moz-transition:opacity .2s ease-in-out,background-color .2s ease-in-out;-o-transition:opacity .2s ease-in-out,background-color .2s ease-in-out;transition:opacity .2s ease-in-out,background-color .2s ease-in-out}.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerRail,.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger_bar,.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerRail,.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger_bar{-webkit-transition:width .2s ease-out .2s,height .2s ease-out .2s,margin-left .2s ease-out .2s,margin-right .2s ease-out .2s,margin-top .2s ease-out .2s,margin-bottom .2s ease-out .2s,opacity .2s ease-in-out,background-color .2s ease-in-out;-moz-transition:width .2s ease-out .2s,height .2s ease-out .2s,margin-left .2s ease-out .2s,margin-right .2s ease-out .2s,margin-top .2s ease-out .2s,margin-bottom .2s ease-out .2s,opacity .2s ease-in-out,background-color .2s ease-in-out;-o-transition:width .2s ease-out .2s,height .2s ease-out .2s,margin-left .2s ease-out .2s,margin-right .2s ease-out .2s,margin-top .2s ease-out .2s,margin-bottom .2s ease-out .2s,opacity .2s ease-in-out,background-color .2s ease-in-out;transition:width .2s ease-out .2s,height .2s ease-out .2s,margin-left .2s ease-out .2s,margin-right .2s ease-out .2s,margin-top .2s ease-out .2s,margin-bottom .2s ease-out .2s,opacity .2s ease-in-out,background-color .2s ease-in-out}.mCS-autoHide>.mCustomScrollBox>.mCSB_scrollTools,.mCS-autoHide>.mCustomScrollBox~.mCSB_scrollTools{opacity:0;filter:"alpha(opacity=0)";-ms-filter:"alpha(opacity=0)"}.mCS-autoHide:hover>.mCustomScrollBox>.mCSB_scrollTools,.mCS-autoHide:hover>.mCustomScrollBox~.mCSB_scrollTools,.mCustomScrollBox:hover>.mCSB_scrollTools,.mCustomScrollBox:hover~.mCSB_scrollTools,.mCustomScrollbar>.mCustomScrollBox>.mCSB_scrollTools.mCSB_scrollTools_onDrag,.mCustomScrollbar>.mCustomScrollBox~.mCSB_scrollTools.mCSB_scrollTools_onDrag{opacity:1;filter:"alpha(opacity=100)";-ms-filter:"alpha(opacity=100)"}.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.4);filter:"alpha(opacity=40)";-ms-filter:"alpha(opacity=40)"}.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.75);filter:"alpha(opacity=75)";-ms-filter:"alpha(opacity=75)"}.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.85);filter:"alpha(opacity=85)";-ms-filter:"alpha(opacity=85)"}.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.9);filter:"alpha(opacity=90)";-ms-filter:"alpha(opacity=90)"}.mCSB_scrollTools .mCSB_buttonDown,.mCSB_scrollTools .mCSB_buttonLeft,.mCSB_scrollTools .mCSB_buttonRight,.mCSB_scrollTools .mCSB_buttonUp{background-image:url(mCSB_buttons.html);background-repeat:no-repeat;opacity:.4;filter:"alpha(opacity=40)";-ms-filter:"alpha(opacity=40)"}.mCSB_scrollTools .mCSB_buttonUp{background-position:0 0}.mCSB_scrollTools .mCSB_buttonDown{background-position:0 -20px}.mCSB_scrollTools .mCSB_buttonLeft{background-position:0 -40px}.mCSB_scrollTools .mCSB_buttonRight{background-position:0 -56px}.mCSB_scrollTools .mCSB_buttonDown:hover,.mCSB_scrollTools .mCSB_buttonLeft:hover,.mCSB_scrollTools .mCSB_buttonRight:hover,.mCSB_scrollTools .mCSB_buttonUp:hover{opacity:.75;filter:"alpha(opacity=75)";-ms-filter:"alpha(opacity=75)"}.mCSB_scrollTools .mCSB_buttonDown:active,.mCSB_scrollTools .mCSB_buttonLeft:active,.mCSB_scrollTools .mCSB_buttonRight:active,.mCSB_scrollTools .mCSB_buttonUp:active{opacity:.9;filter:"alpha(opacity=90)";-ms-filter:"alpha(opacity=90)"}.mCS-dark.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.15)}.mCS-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:rgba(0,0,0,.85)}.mCS-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:rgba(0,0,0,.9)}.mCS-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-80px 0}.mCS-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-80px -20px}.mCS-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-80px -40px}.mCS-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-80px -56px}.mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail,.mCS-light-2.mCSB_scrollTools .mCSB_draggerRail{width:4px;background-color:#fff;background-color:rgba(255,255,255,.1);-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px}.mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-light-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:4px;background-color:#fff;background-color:rgba(255,255,255,.75);-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px}.mCS-dark-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-dark-2.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-light-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-light-2.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:4px;margin:6px auto}.mCS-light-2.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.85)}.mCS-light-2.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-light-2.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.9)}.mCS-light-2.mCSB_scrollTools .mCSB_buttonUp{background-position:-32px 0}.mCS-light-2.mCSB_scrollTools .mCSB_buttonDown{background-position:-32px -20px}.mCS-light-2.mCSB_scrollTools .mCSB_buttonLeft{background-position:-40px -40px}.mCS-light-2.mCSB_scrollTools .mCSB_buttonRight{background-position:-40px -56px}.mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.1);-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px}.mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75);-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px}.mCS-dark-2.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-dark-2.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-dark-2.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-dark-2.mCSB_scrollTools .mCSB_buttonUp{background-position:-112px 0}.mCS-dark-2.mCSB_scrollTools .mCSB_buttonDown{background-position:-112px -20px}.mCS-dark-2.mCSB_scrollTools .mCSB_buttonLeft{background-position:-120px -40px}.mCS-dark-2.mCSB_scrollTools .mCSB_buttonRight{background-position:-120px -56px}.mCS-dark-thick.mCSB_scrollTools .mCSB_draggerRail,.mCS-light-thick.mCSB_scrollTools .mCSB_draggerRail{width:4px;background-color:#fff;background-color:rgba(255,255,255,.1);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-light-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:6px;background-color:#fff;background-color:rgba(255,255,255,.75);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}.mCS-dark-thick.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-light-thick.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:4px;margin:6px 0}.mCS-dark-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-light-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{width:100%;height:6px;margin:5px auto}.mCS-light-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.85)}.mCS-light-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-light-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.9)}.mCS-light-thick.mCSB_scrollTools .mCSB_buttonUp{background-position:-16px 0}.mCS-light-thick.mCSB_scrollTools .mCSB_buttonDown{background-position:-16px -20px}.mCS-light-thick.mCSB_scrollTools .mCSB_buttonLeft{background-position:-20px -40px}.mCS-light-thick.mCSB_scrollTools .mCSB_buttonRight{background-position:-20px -56px}.mCS-dark-thick.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.1);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonUp{background-position:-96px 0}.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonDown{background-position:-96px -20px}.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonLeft{background-position:-100px -40px}.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonRight{background-position:-100px -56px}.mCS-light-thin.mCSB_scrollTools .mCSB_draggerRail{background-color:#fff;background-color:rgba(255,255,255,.1)}.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-light-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:2px}.mCS-dark-thin.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-light-thin.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%}.mCS-dark-thin.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-light-thin.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{width:100%;height:2px;margin:7px auto}.mCS-dark-thin.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.15)}.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonUp{background-position:-80px 0}.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonDown{background-position:-80px -20px}.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonLeft{background-position:-80px -40px}.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonRight{background-position:-80px -56px}.mCS-rounded.mCSB_scrollTools .mCSB_draggerRail{background-color:#fff;background-color:rgba(255,255,255,.15)}.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger,.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger,.mCS-rounded.mCSB_scrollTools .mCSB_dragger{height:14px}.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:14px;margin:0 1px}.mCS-rounded-dark.mCSB_scrollTools_horizontal .mCSB_dragger,.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_dragger,.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_dragger,.mCS-rounded.mCSB_scrollTools_horizontal .mCSB_dragger{width:14px}.mCS-rounded-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{height:14px;margin:1px 0}.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar{width:16px;height:16px;margin:-1px 0}.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{width:4px}.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar{height:16px;width:16px;margin:0 -1px}.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{height:4px;margin:6px 0}.mCS-rounded.mCSB_scrollTools .mCSB_buttonUp{background-position:0 -72px}.mCS-rounded.mCSB_scrollTools .mCSB_buttonDown{background-position:0 -92px}.mCS-rounded.mCSB_scrollTools .mCSB_buttonLeft{background-position:0 -112px}.mCS-rounded.mCSB_scrollTools .mCSB_buttonRight{background-position:0 -128px}.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-rounded-dark.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.15)}.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-80px -72px}.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-80px -92px}.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-80px -112px}.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-80px -128px}.mCS-rounded-dots-dark.mCSB_scrollTools_vertical .mCSB_draggerRail,.mCS-rounded-dots.mCSB_scrollTools_vertical .mCSB_draggerRail{width:4px}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-rounded-dots.mCSB_scrollTools .mCSB_draggerRail,.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_draggerRail{background-color:transparent;background-position:center}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-rounded-dots.mCSB_scrollTools .mCSB_draggerRail{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAANElEQVQYV2NkIAAYiVbw//9/Y6DiM1ANJoyMjGdBbLgJQAX/kU0DKgDLkaQAvxW4HEvQFwCRcxIJK1XznAAAAABJRU5ErkJggg==);background-repeat:repeat-y;opacity:.3;filter:"alpha(opacity=30)";-ms-filter:"alpha(opacity=30)"}.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_draggerRail{height:4px;margin:6px 0;background-repeat:repeat-x}.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonUp{background-position:-16px -72px}.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonDown{background-position:-16px -92px}.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonLeft{background-position:-20px -112px}.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonRight{background-position:-20px -128px}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAALElEQVQYV2NkIAAYSVFgDFR8BqrBBEifBbGRTfiPZhpYjiQFBK3A6l6CvgAAE9kGCd1mvgEAAAAASUVORK5CYII=)}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-96px -72px}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-96px -92px}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-100px -112px}.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-100px -128px}.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-repeat:repeat-y;background-image:-moz-linear-gradient(left,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-webkit-gradient(linear,left top,right top,color-stop(0,rgba(255,255,255,.5)),color-stop(100%,rgba(255,255,255,0)));background-image:-webkit-linear-gradient(left,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-o-linear-gradient(left,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-ms-linear-gradient(left,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:linear-gradient(to right,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%)}.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{background-repeat:repeat-x;background-image:-moz-linear-gradient(top,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgba(255,255,255,.5)),color-stop(100%,rgba(255,255,255,0)));background-image:-webkit-linear-gradient(top,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-o-linear-gradient(top,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:-ms-linear-gradient(top,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%);background-image:linear-gradient(to bottom,rgba(255,255,255,.5) 0,rgba(255,255,255,0) 100%)}.mCS-3d-dark.mCSB_scrollTools_vertical .mCSB_dragger,.mCS-3d.mCSB_scrollTools_vertical .mCSB_dragger{height:70px}.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger,.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger{width:70px}.mCS-3d-dark.mCSB_scrollTools,.mCS-3d.mCSB_scrollTools{opacity:1;filter:"alpha(opacity=30)";-ms-filter:"alpha(opacity=30)"}.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_draggerRail{-webkit-border-radius:16px;-moz-border-radius:16px;border-radius:16px}.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-3d.mCSB_scrollTools .mCSB_draggerRail{width:8px;background-color:#000;background-color:rgba(0,0,0,.2);box-shadow:inset 1px 0 1px rgba(0,0,0,.5),inset -1px 0 1px rgba(255,255,255,.2)}.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#555}.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:8px}.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-3d.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:8px;margin:4px 0;box-shadow:inset 0 1px 1px rgba(0,0,0,.5),inset 0 -1px 1px rgba(255,255,255,.2)}.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{width:100%;height:8px;margin:4px auto}.mCS-3d.mCSB_scrollTools .mCSB_buttonUp{background-position:-32px -72px}.mCS-3d.mCSB_scrollTools .mCSB_buttonDown{background-position:-32px -92px}.mCS-3d.mCSB_scrollTools .mCSB_buttonLeft{background-position:-40px -112px}.mCS-3d.mCSB_scrollTools .mCSB_buttonRight{background-position:-40px -128px}.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.1);box-shadow:inset 1px 0 1px rgba(0,0,0,.1)}.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail{box-shadow:inset 0 1px 1px rgba(0,0,0,.1)}.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-112px -72px}.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-112px -92px}.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-120px -112px}.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-120px -128px}.mCS-3d-thick-dark.mCSB_scrollTools,.mCS-3d-thick.mCSB_scrollTools{opacity:1;filter:"alpha(opacity=30)";-ms-filter:"alpha(opacity=30)"}.mCS-3d-thick-dark.mCSB_scrollTools,.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerContainer,.mCS-3d-thick.mCSB_scrollTools,.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerContainer{-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.mCSB_inside+.mCS-3d-thick-dark.mCSB_scrollTools_vertical,.mCSB_inside+.mCS-3d-thick.mCSB_scrollTools_vertical{right:1px}.mCS-3d-thick-dark.mCSB_scrollTools_vertical,.mCS-3d-thick.mCSB_scrollTools_vertical{box-shadow:inset 1px 0 1px rgba(0,0,0,.1),inset 0 0 14px rgba(0,0,0,.5)}.mCS-3d-thick-dark.mCSB_scrollTools_horizontal,.mCS-3d-thick.mCSB_scrollTools_horizontal{bottom:1px;box-shadow:inset 0 1px 1px rgba(0,0,0,.1),inset 0 0 14px rgba(0,0,0,.5)}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;box-shadow:inset 1px 0 0 rgba(255,255,255,.4);width:12px;margin:2px;position:absolute;height:auto;top:0;bottom:0;left:0;right:0}.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{box-shadow:inset 0 1px 0 rgba(255,255,255,.4);height:12px;width:auto}.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#555}.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerContainer{background-color:#000;background-color:rgba(0,0,0,.05);box-shadow:inset 1px 1px 16px rgba(0,0,0,.1)}.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerRail{background-color:transparent}.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonUp{background-position:-32px -72px}.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonDown{background-position:-32px -92px}.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonLeft{background-position:-40px -112px}.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonRight{background-position:-40px -128px}.mCS-3d-thick-dark.mCSB_scrollTools{box-shadow:inset 0 0 14px rgba(0,0,0,.2)}.mCS-3d-thick-dark.mCSB_scrollTools_horizontal{box-shadow:inset 0 1px 1px rgba(0,0,0,.1),inset 0 0 14px rgba(0,0,0,.2)}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{box-shadow:inset 1px 0 0 rgba(255,255,255,.4),inset -1px 0 0 rgba(0,0,0,.2)}.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 0 -1px 0 rgba(0,0,0,.2)}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#777}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerContainer{background-color:#fff;background-color:rgba(0,0,0,.05);box-shadow:inset 1px 1px 16px rgba(0,0,0,.1)}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-minimal-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-minimal.mCSB_scrollTools .mCSB_draggerRail{background-color:transparent}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-112px -72px}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-112px -92px}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-120px -112px}.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-120px -128px}.mCSB_outside+.mCS-minimal-dark.mCSB_scrollTools_vertical,.mCSB_outside+.mCS-minimal.mCSB_scrollTools_vertical{right:0;margin:12px 0}.mCustomScrollBox.mCS-minimal+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,.mCustomScrollBox.mCS-minimal+.mCSB_scrollTools.mCSB_scrollTools_horizontal,.mCustomScrollBox.mCS-minimal-dark+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,.mCustomScrollBox.mCS-minimal-dark+.mCSB_scrollTools.mCSB_scrollTools_horizontal{bottom:0;margin:0 12px}.mCS-dir-rtl>.mCSB_outside+.mCS-minimal-dark.mCSB_scrollTools_vertical,.mCS-dir-rtl>.mCSB_outside+.mCS-minimal.mCSB_scrollTools_vertical{left:0;right:auto}.mCS-minimal-dark.mCSB_scrollTools_vertical .mCSB_dragger,.mCS-minimal.mCSB_scrollTools_vertical .mCSB_dragger{height:50px}.mCS-minimal-dark.mCSB_scrollTools_horizontal .mCSB_dragger,.mCS-minimal.mCSB_scrollTools_horizontal .mCSB_dragger{width:50px}.mCS-minimal.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.2);filter:"alpha(opacity=20)";-ms-filter:"alpha(opacity=20)"}.mCS-minimal.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-minimal.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.5);filter:"alpha(opacity=50)";-ms-filter:"alpha(opacity=50)"}.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.2);filter:"alpha(opacity=20)";-ms-filter:"alpha(opacity=20)"}.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.5);filter:"alpha(opacity=50)";-ms-filter:"alpha(opacity=50)"}.mCS-dark-3.mCSB_scrollTools .mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools .mCSB_draggerRail{width:6px;background-color:#000;background-color:rgba(0,0,0,.2)}.mCS-dark-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-light-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:6px}.mCS-dark-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-dark-3.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-light-3.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:6px;margin:5px 0}.mCS-dark-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-dark-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{width:12px}.mCS-dark-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-dark-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,.mCS-light-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail{height:12px;margin:2px 0}.mCS-light-3.mCSB_scrollTools .mCSB_buttonUp{background-position:-32px -72px}.mCS-light-3.mCSB_scrollTools .mCSB_buttonDown{background-position:-32px -92px}.mCS-light-3.mCSB_scrollTools .mCSB_buttonLeft{background-position:-40px -112px}.mCS-light-3.mCSB_scrollTools .mCSB_buttonRight{background-position:-40px -128px}.mCS-dark-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-dark-3.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-dark-3.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-dark-3.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-dark-3.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.1)}.mCS-dark-3.mCSB_scrollTools .mCSB_buttonUp{background-position:-112px -72px}.mCS-dark-3.mCSB_scrollTools .mCSB_buttonDown{background-position:-112px -92px}.mCS-dark-3.mCSB_scrollTools .mCSB_buttonLeft{background-position:-120px -112px}.mCS-dark-3.mCSB_scrollTools .mCSB_buttonRight{background-position:-120px -128px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-2.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-3.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset.mCSB_scrollTools .mCSB_draggerRail{width:12px;background-color:#000;background-color:rgba(0,0,0,.2)}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{width:6px;margin:3px 5px;position:absolute;height:auto;top:0;bottom:0;left:0;right:0}.mCS-inset-2-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,.mCS-inset.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar{height:6px;margin:5px 3px;position:absolute;width:auto;top:0;bottom:0;left:0;right:0}.mCS-inset-2-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-inset-2.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-inset-3-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-inset-3.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-inset-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,.mCS-inset.mCSB_scrollTools_horizontal .mCSB_draggerRail{width:100%;height:12px;margin:2px 0}.mCS-inset-2.mCSB_scrollTools .mCSB_buttonUp,.mCS-inset-3.mCSB_scrollTools .mCSB_buttonUp,.mCS-inset.mCSB_scrollTools .mCSB_buttonUp{background-position:-32px -72px}.mCS-inset-2.mCSB_scrollTools .mCSB_buttonDown,.mCS-inset-3.mCSB_scrollTools .mCSB_buttonDown,.mCS-inset.mCSB_scrollTools .mCSB_buttonDown{background-position:-32px -92px}.mCS-inset-2.mCSB_scrollTools .mCSB_buttonLeft,.mCS-inset-3.mCSB_scrollTools .mCSB_buttonLeft,.mCS-inset.mCSB_scrollTools .mCSB_buttonLeft{background-position:-40px -112px}.mCS-inset-2.mCSB_scrollTools .mCSB_buttonRight,.mCS-inset-3.mCSB_scrollTools .mCSB_buttonRight,.mCS-inset.mCSB_scrollTools .mCSB_buttonRight{background-position:-40px -128px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-dark.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.1)}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonUp,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonUp,.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonUp{background-position:-112px -72px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonDown,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonDown,.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonDown{background-position:-112px -92px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonLeft,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonLeft,.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonLeft{background-position:-120px -112px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonRight,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonRight,.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonRight{background-position:-120px -128px}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,.mCS-inset-2.mCSB_scrollTools .mCSB_draggerRail{background-color:transparent;border-width:1px;border-style:solid;border-color:#fff;border-color:rgba(255,255,255,.2);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail{border-color:#000;border-color:rgba(0,0,0,.2)}.mCS-inset-3.mCSB_scrollTools .mCSB_draggerRail{background-color:#fff;background-color:rgba(255,255,255,.6)}.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail{background-color:#000;background-color:rgba(0,0,0,.6)}.mCS-inset-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.75)}.mCS-inset-3.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.85)}.mCS-inset-3.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-inset-3.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#000;background-color:rgba(0,0,0,.9)}.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.75)}.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.85)}.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar{background-color:#fff;background-color:rgba(255,255,255,.9)}

/* Westo HTML5 Template  */

/************ TABLE OF CONTENTS ***************
1. Fonts
2. Reset
3. Global
4. Main Header
5. Hidden Sidebar
6. Banner Section
7. Page Title
8. Section Banner
9. Section Title
10. About Section
11. Blog Section

**********************************************/



:root {
    --thm-font: 'Catamaran', sans-serif;
    --thm-font-2: 'Caveat', cursive;
    --thm-gray: #737c76;
    --thm-gray-rgb: 115, 124, 118;
    --thm-primary: #fdc400;
    --thm-primary-rgb: 253, 196, 0;
    --thm-black: #1e3226;
    --thm-black-rgb: 30, 50, 38;
}



/*==============================================
   Base Css
===============================================*/
* {
    margin: 0px;
    padding: 0px;
    border: none;
    outline: none;
    font-size: 100%;
}

html,
body {
    height: 100%;
}



body {
    color: var(--thm-gray);
    font-size: 16px;
    line-height: 32px;
    font-weight: 500;
    font-family: var(--thm-font);
}

button:focus {
    outline: none;
}

button {
    cursor: pointer;
    border: none;
    background: transparent;
    padding: 0;
}





h1,
h2,
h3,
h4,
h5,
h6 {
    color: var(--thm-black);
    font-weight: 800;
    line-height: 1.25em;
    font-family: var(--thm-font);
    margin: 0;
}

h3 {
    font-size: 24px;
    line-height: 36px;
    font-weight: 700;
}



a,
a:hover,
a:active,
a:focus {
    text-decoration: none;
    outline: none;
    border: none;
    transition: .4s;
    -webkit-transition: all .4s ease-in-out;
}

textarea:focus {
    outline: none;
}


*::-moz-selection {
    background: var(--thm-black);
    color: #fff;
    text-shadow: none;
}

::-moz-selection {
    background: var(--thm-black);
    color: #fff;
    text-shadow: none;
}

::selection {
    background: var(--thm-black);
    color: #fff;
    text-shadow: none;
}



*::placeholder {
    color: #555555;
    opacity: 1;
}

*::-moz-placeholder {
    color: #555555;
    opacity: 1;
}

*:-ms-input-placeholder {
    color: #555555;
    opacity: 1;
}





.parallax-scene {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.fancybox-image,
.fancybox-spaceball {
    border-radius: 10px;
}


@media (min-width: 1200px) {
    .container {
        max-width: 1200px;
    }
}


img {
    max-width: 100%;
    height: auto;
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
}


.map-data {
    text-align: center;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.8em;
    padding: 5px 10px 5px;
}


.map-data a {
    color: #0b59d9;
    display: block;
}

.map-data h6 {
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 5px;
    color: #121212;
}




i {
    font-style: normal;
}

ul,
li {
    list-style: none;
    margin: 0;
    padding: 0;
}

ol,
li {
    margin: 0;
    padding: 0;
}

.auto-container {
    position: static;
    max-width: 1200px;
    padding: 0px 15px;
    margin: 0 auto;
}




.btn-one {
    position: relative;
    display: inline-block;
    overflow: hidden;
    padding-top: 7px;
    padding-left: 60px;
    padding-bottom: 3px;
    padding-right: 60px;
    background-color: var(--thm-primary);
    color: var(--thm-black);
    font-size: 14px;
    line-height: 50px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    font-family: var(--thm-font);
    z-index: 1;
}

.btn-one:before {
    position: absolute;
    top: 0px;
    left: 0;
    bottom: 0px;
    width: 100%;
    content: "";
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    border-radius: 0px;
    webkit-transition-duration: 800ms;
    transition-duration: 800ms;
    background-color: var(--thm-base);
    z-index: 1;
}

.btn-one:hover:before {
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
}


.btn-one .txt {
    position: relative;
    display: flex;
    align-items: center;
    z-index: 2;
}

.btn-one .arrow {
    position: relative;
    top: -2px;
    display: inline-block;
    padding-left: 10px;
    font-size: 16px;
    font-weight: 400;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
}

.btn-one:hover,
.btn-one:focus {
    color: #ffffff;
}













.btn-two {
    position: relative;
    display: inline-block;
    color: #ffffff;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
    text-transform: uppercase;
    font-family: var(--thm-font-2);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.btn-two span {
    position: relative;
    top: 3px;
    display: inline-block;
    padding-right: 10px;
    line-height: 15px;
    transform: rotate(180deg);
}

.btn-two span:before {
    position: relative;
    top: 3px;
    display: inline-block;
    color: var(--thm-black);
    font-size: 25px;
    font-weight: 400;
    z-index: 1;
}

.btn-two span:after {
    content: "";
    position: absolute;
    top: 0;
    right: 20px;
    bottom: 0;
    width: 20px;
    height: 20px;
    background: #ffffff;
    border-radius: 50%;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.btn-two:hover span:after {
    transform: scale(1.1);
}

.btn-two:hover:before {}

.btn-two:hover {
    color: var(--thm-base);
}








.checked-box1 {
    position: relative;
    display: block;
    min-height: 40px;
}

.checked-box1 label {
    position: relative;
    display: inline-block;
    padding-left: 50px;
    margin-right: 0px;
    margin-bottom: 0;
    color: #585858;
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    cursor: pointer;
    min-height: 40px;
    font-family: var(--thm-font);
}

.checked-box1 input[type="checkbox"] {
    display: none;
}

.checked-box1 input[type="checkbox"]+label span {
    position: absolute;
    display: block;
    top: 4px;
    left: 0;
    width: 40px;
    height: 40px;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px solid #dae5ec;
    cursor: pointer;
    border-radius: 50%;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.checked-box1 label span:before {
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0;
    right: 0;
    content: "";
    width: 30px;
    height: 30px;
    background: var(--thm-primary);
    border-radius: 50%;
    margin: 4px;
    transform: scale(0);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.checked-box1 input[type="checkbox"]:checked+label span {
    border-color: #dae5ec;
}

.checked-box1 input[type="checkbox"]:checked+label span:before {
    transform: scale(1.0);
}






.checked-box2 {
    position: relative;
    display: block;
    min-height: 30px;
}

.checked-box2 label {
    position: relative;
    display: inline-block;
    padding-left: 30px;
    margin-right: 0px;
    margin-bottom: 0;
    color: #757575;
    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
    cursor: pointer;
    min-height: 30px;
    font-family: var(--thm-font);
}

.checked-box2 input[type="checkbox"] {
    display: none;
}

.checked-box2 input[type="checkbox"]+label span {
    position: absolute;
    top: 5px;
    left: 0;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    background-color: #f5f5f5;
    border: 1px solid #e5e5e5;
    cursor: pointer;
    border-radius: 3px;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.checked-box2 label span:before {
    font-family: FontAwesome;
    content: "\f00c";
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0;
    right: 0;
    width: 16px;
    height: 16px;
    margin: 0px;
    color: var(--thm-base);
    font-size: 10px;
    line-height: 16px;
    text-align: center;
    opacity: 0;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.checked-box2 input[type="checkbox"]:checked+label span {
    border-color: #dedede;
}

.checked-box2 input[type="checkbox"]:checked+label span:before {
    opacity: 1;
}






.thm-social-link1 {
    position: relative;
    display: block;
}

.thm-social-link1 ul {
    position: relative;
}

.thm-social-link1 ul li {
    position: relative;
    float: left;
    margin-right: 10px;
}

.thm-social-link1 ul li:last-child {
    margin-right: 0;
}

.thm-social-link1 ul li a {
    position: relative;
    display: block;
    width: 40px;
    height: 40px;
    background: var(--thm-base);
    border-radius: 50%;
    border: 2px solid var(--thm-base);
    color: var(--thm-black);
    font-size: 14px;
    line-height: 36px;
    text-align: center;
    z-index: 1;
    transition: all 500ms ease;
}

.thm-social-link1 ul li a:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: var(--thm-black);
    content: "";
    border-radius: 50%;
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.thm-social-link1 ul li a:hover:before {
    transform: scaleX(1.0);
}

.thm-social-link1 ul li a:hover {
    color: #ffffff;
}





.thm-social-link2 {
    position: relative;
    display: block;
}

.thm-social-link2 ul {
    position: relative;
    overflow: hidden;
}

.thm-social-link2 ul li {
    position: relative;
    display: inline-block;
    float: left;
    margin-right: 20px;
}

.thm-social-link2 ul li:last-child {
    margin-right: 0;
}

.thm-social-link2 ul li a {
    position: relative;
    display: block;
    color: #909090;
    font-size: 16px;
    line-height: 30px;
    transition: all 500ms ease;
}

.thm-social-link2 ul li a:hover {
    color: var(--thm-primary);
}



.parallax-bg-one {
    background-attachment: fixed;
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1;
}

.parallax-bg-one::before {
    background: rgba(18, 32, 0, 0.90) none repeat scroll 0 0;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: -1;
}



/*___ owl Nav Dot Style _____*/
.owl-theme .owl-prev span,
.owl-theme .owl-next span {}

.owl-nav-style-one {}

.owl-nav-style-one .owl-controls {}

.owl-nav-style-one.owl-theme .owl-stage-outer {
    position: relative;
    display: block;
    padding-top: 0px;
    padding-bottom: 0px;
}

.owl-nav-style-one.owl-theme .owl-nav {
    position: relative;
    display: block;
    line-height: 0;
    z-index: 10;
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"] {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 60px;
    border-radius: 0%;
    margin: 0 0 0 0px;
    padding: 0;
    transition: all 700ms ease 0s;
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"]:before {
    content: "\f149";
    font-family: flaticon !important;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border: 2px solid #ffffff;
    color: var(--thm-base);
    font-size: 18px;
    line-height: 56px;
    font-weight: 600;
    text-align: center;
    -webkit-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"]:hover:before {
    border-color: var(--thm-base);
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"] span {
    display: none;
}

.owl-nav-style-one.owl-theme .owl-nav .owl-prev {
    transform: rotate(-270deg);
    margin-right: 10px;
}

.owl-nav-style-one.owl-theme .owl-nav .owl-next {
    margin-left: 0px;
    transform: rotate(270deg);
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"]:hover {
    background-color: var(--thm-base);
}

.owl-nav-style-one.owl-theme .owl-nav [class*="owl-"]:hover:before {
    color: #ffffff
}



.owl-carousel.owl-dot-style1 .owl-dots {
    position: relative;
    text-align: center;
    line-height: 0;
    margin-top: 0px !important;
    display: block;
}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 11px;
    height: 11px;
    background-color: rgba(var(--thm-base-rgb), .20);
    border: 0px solid #e0e0e0;
    margin: 0px 5px;
    padding: 0px;
    border-radius: 50%;
    transition: all 100ms linear;
    transition-delay: 0.1s;
}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot:before {
    content: "";
    position: absolute;
    top: -2px;
    left: -2px;
    bottom: -2px;
    right: -2px;
    border-radius: 50%;
    background: var(--thm-primary);
    transform: scale(0);
    transition: all 500ms ease;
}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot.active {
    background: var(--thm-primary);
}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot.active:before {
    transform: scale(1.0);
}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot span {}

.owl-carousel.owl-dot-style1 .owl-dots .owl-dot.active span {}




@keyframes pulse {
    50% {
        box-shadow: 0 0 0 5px rgba(255, 255, 255, .1),
            0 0 0 20px rgba(238, 238, 238, 0.3000);
    }
}

@keyframes pulse2 {
    50% {
        box-shadow: 0 0 0 5px rgba(255, 231, 1, .1),
            0 0 0 20px rgba(255, 231, 1, 0.3000);
    }
}



.rating-box {
    position: relative;
    display: block;
    overflow: hidden;
}

.rating-box ul {
    overflow: hidden;
}

.rating-box ul li {
    position: relative;
    display: inline-block;
    float: left;
    margin-right: 5px;
}

.rating-box ul li:last-child {
    margin-right: 0;
}

.rating-box ul li a {
    font-size: 20px;
    font-weight: 400;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}





.boxed_wrapper {
    position: relative;
    margin: 0 auto;
    overflow: hidden !important;
    background: #ffffff none repeat scroll 0 0;
    width: 100%;
    min-width: 320px;
}

.styled-pagination {
    position: relative;
    display: block;
    width: 100%;
    height: auto;
    padding-top: 10px;
}

.styled-pagination.pdtop0 {
    padding-top: 0;
}

.styled-pagination li {
    position: relative;
    display: inline-block;
    float: none;
    margin-right: 6px;
}

.styled-pagination li:last-child {
    margin-right: 0;
}

.styled-pagination li.prev a {
    transform: rotate(0deg);
}

.styled-pagination li a span:before {
    position: relative;
    top: 6px;
    font-size: 25px;
}

.styled-pagination li.prev a span.left {
    position: relative;
    top: 1px;
}

.styled-pagination li.next a span.right {
    position: relative;
    top: 2px;
}

.styled-pagination li a {
    position: relative;
    display: inline-block;
    width: 55px;
    height: 55px;
    border-radius: 0%;
    background: #f5f5f5;
    border: 1px solid #f5f5f5;
    color: var(--thm-black);
    font-size: 18px;
    line-height: 53px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    transition: all 500ms ease;
    font-family: var(--thm-font);
    z-index: 1;
}

.styled-pagination li:hover a,
.styled-pagination li.active a {
    color: #ffffff;
    border-color: var(--thm-base);
    background: var(--thm-base);
}

.styled-pagination li.prev a,
.styled-pagination li.next a {
    color: var(--thm-base);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.styled-pagination li.prev a:hover,
.styled-pagination li.next a:hover {
    color: #ffffff;
}






/*=============== Color-Layout =============*/
.switcher {
    position: fixed;
    top: 320px;
    z-index: 99;
}

.switcher .switch_btn {
    position: absolute;
    top: 0px;
    right: -50px;
    z-index: -1;
}

.switcher .switch_btn button {
    width: 50px;
    height: 50px;
    color: #fff;
    line-height: 50px;
    cursor: pointer;
    border-radius: 0;
    margin-left: 0;
    transition: all 500ms ease;
    background: rgba(0, 0, 0, 0.90);
}

.switcher .switch_menu {
    position: absolute;
    width: 220px;
    height: 30px;
    background: transparent;
    display: none;
    top: 0px;
    left: 60px;
    bottom: 0;
    margin: 10px 0;
}

.switcher #styleOptions li {
    position: relative;
    display: inline-block;
    width: 30px;
    height: 30px;
    margin-right: 3px;
}

.switcher #styleOptions li:last-child {
    margin-right: 0;
}

.switcher #styleOptions li a {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    box-shadow: 0 0 0 0px #fff;
}

.switcher #styleOptions li a.blue-color {
    background: #1266e3;
}

.switcher #styleOptions li a.pink-color {
    background: #e70887;
}

.switcher #styleOptions li a.violet-color {
    background: #6936d8;
}

.switcher #styleOptions li a.crimson-color {
    background: #ba0913;
}

.switcher #styleOptions li a.orange-color {
    background: #FFA500;
}

.switcher #styleOptions li a.green-color {
    background: #95c41f;
}







/** Search Pop Up Style **/
.serach-button-style1 {
    position: relative;
    display: block;
}

.serach-button-style1 .search-toggler {
    position: relative;
    display: block;
    width: 70px;
    height: 40px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 0px;
    color: var(--thm-black);
    font-size: 25px;
    line-height: 46px;
    font-weight: 400;
    cursor: pointer;
    border-left: 1px solid rgba(var(--thm-base-rgb), .10);
    transition: all 500ms ease;
}

.serach-button-style1 .search-toggler:hover {
    color: var(--thm-base);
}


.search-popup {
    position: fixed;
    left: 0;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 99999;
    visibility: hidden;
    opacity: 0;
    overflow: auto;
    background: rgba(0, 0, 0, 0.9);
    -webkit-transform: translateY(101%);
    -ms-transform: translateY(101%);
    transform: translateY(101%);
    transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -webkit-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
}

.search-popup.popup-visible {
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    transform: translateY(0%);
    visibility: visible;
    opacity: 1;
}

.search-popup .overlay-layer {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    display: block;
}

.search-popup .close-search {
    position: absolute;
    right: 25px;
    top: 25px;
    font-size: 22px;
    color: #ffffff;
    cursor: pointer;
    background-image: url(../images/icon/icon-cross.png);
    width: 40px;
    height: 40px;
    z-index: 5;
    transition: all 500ms ease;
}

.search-popup .search-form {
    position: relative;
    padding: 0px 15px 0px;
    max-width: 1024px;
    margin: 0 auto;
    margin-top: 150px;
    margin-bottom: 100px;
    opacity: 0;
    -webkit-transform: translateY(50px);
    -ms-transform: translateY(50px);
    transform: translateY(50px);
    z-index: 10;
}

.search-popup.popup-visible .search-form {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    transition: all 500ms ease 500ms;
    -moz-transition: all 900ms ease 500ms;
    -webkit-transition: all 900ms ease 500ms;
    -ms-transition: all 900ms ease 500ms;
    -o-transition: all 900ms ease 500ms;
}

.search-popup .search-form .form-group {
    margin-bottom: 30px;
}

.search-popup .search-form fieldset {
    position: relative;
    border-radius: 12px;
}

.search-popup .search-form fieldset input[type="search"] {
    position: relative;
    height: 70px;
    padding: 20px 250px 20px 30px;
    background: #ffffff;
    line-height: 30px;
    font-size: 24px;
    color: #233145;
    border-radius: 7px;
}

.search-popup .search-form fieldset input[type="submit"] {
    position: absolute;
    display: block;
    right: 0px;
    top: 0px;
    text-align: center;
    width: 220px;
    height: 70px;
    padding: 20px 10px 20px 10px;
    color: #ffffff !important;
    line-height: 30px;
    font-size: 20px;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 0px 7px 7px 0px;
    background: var(--thm-base);
}

.search-popup .search-form fieldset input[type="submit"]:hover {
    transform: translateY(0px);
}



.search-popup h3 {
    text-transform: uppercase;
    font-size: 20px;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 20px;
    letter-spacing: 1px;
    text-align: center;
}

.search-popup .recent-searches {
    font-size: 16px;
    color: #ffffff;
    text-align: center;
}

.search-popup .recent-searches li {
    display: inline-block;
    margin: 0px 10px 10px 0px;
}

.search-popup .recent-searches li a {
    display: block;
    line-height: 24px;
    border: 1px solid #ffffff;
    padding: 7px 15px;
    color: #ffffff;
    border-radius: 3px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.search-popup .recent-searches li a:hover {
    border-color: var(--thm-base);
    background-color: var(--thm-base);
}





.serach-button-style1--instyle2 {
    margin-left: 0;
    margin-right: 0;
}

.serach-button-style1--instyle2 .search-toggler {
    color: #ffffff;
    border-left: 1px solid rgba(255, 255, 255, 0.20);
}

.serach-button-style1--instyle2 .search-toggler:hover {
    color: var(--thm-black);
}



/*________________Preloader_______________ */
.preloader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 999999999999999;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: url(../images/icon/preloader.svg);
}

.preloader-close {
    position: fixed;
    z-index: 999999;
    color: #fff;
    padding: 10px 20px;
    cursor: pointer;
    right: 0;
    bottom: 0;
    font-weight: 600;
    background-color: var(--thm-black);
}

.loader-wrap {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 999999;
}

.loader-wrap .layer-one {
    position: absolute;
    left: 0%;
    top: 0;
    width: 33.3333%;
    height: 100%;
    overflow: hidden;
}

.loader-wrap .layer-two {
    position: absolute;
    left: 33.3333%;
    top: 0;
    width: 33.3333%;
    height: 100%;
    overflow: hidden;
}

.loader-wrap .layer-three {
    position: absolute;
    left: 66.6666%;
    top: 0;
    width: 33.3333%;
    height: 100%;
    overflow: hidden;
}



.loader-wrap .layer .overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: var(--thm-base);
}





/*** Scroll To Top style ***/
.scroll-top {
    position: fixed;
    right: 15px;
    bottom: 20px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #ffffff;
    border: 2px solid #ffffff;
    color: var(--thm-base);
    font-size: 20px;
    line-height: 56px;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    display: none;
    cursor: pointer;
    transform: rotate(0deg);
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 999999999;
}

.scroll-top span {}

.scroll-top:after {
    position: absolute;
    content: '';
    top: 100%;
    left: 5%;
    height: 10px;
    width: 90%;
    opacity: 1;
    z-index: -1;
    background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
    background: -webkit-radial-gradient(center ellipse, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
    background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
}



.scroll-top:before {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: transparent;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-animation-delay: .9s;
    animation-delay: .9s;
    content: "";
    -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.9);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.9);
    -webkit-animation: ripple 3s infinite;
    animation: ripple 3s infinite;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
}



.scroll-top:hover {
    color: #ffffff;
    background-color: var(--thm-black);
    border-color: var(--thm-black);
}





/* Form validation styles */
input:focus,
textarea:focus,
select:focus {
    border-color: #43c3ea;
    outline: none;
}

#contact-form input[type="text"].error {
    border-color: red;
}

#contact-form input[type="email"].error {
    border-color: red;
}

#contact-form select.error {
    border-color: red;
}

#contact-form textarea.error {
    border-color: red;
}







/* Overlay styles */
.overlay-style-one {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(218, 60, 34, 0.80);
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
    opacity: 0;
    z-index: 1;
}

.overlay-style-one .box {
    display: table;
    height: 100%;
    width: 100%;
}

.overlay-style-one .box .content {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}

.overlay-style-one .box .inner {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}





.overlay-style-two {
    position: absolute;
    left: 0px;
    bottom: 0px;
    right: 0px;
    top: 0px;
    z-index: 2;
    opacity: 0;
    transition: all 900ms ease;
}

.overlay-style-two:before {
    position: absolute;
    content: '';
    top: 0px;
    left: 0px;
    width: 100%;
    height: 50%;
    display: block;
    opacity: 0;
    text-align: center;
    transform: perspective(400px) rotateX(-90deg);
    transform-origin: top;
    transition: all 0.5s;
    background-color: rgba(18, 18, 18, 0.90);
}

.overlay-style-two:after {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 100%;
    height: 50%;
    display: block;
    opacity: 0;
    text-align: center;
    transform: perspective(400px) rotateX(90deg);
    transform-origin: bottom;
    transition: all 0.5s;
    background-color: rgba(18, 18, 18, 0.90);
}




.review-box {
    position: relative;
    display: block;
    overflow: hidden;
    line-height: 16px;
}

.review-box>ul {
    display: block;
    overflow: hidden;
}

.review-box>ul>li {
    display: inline-block;
    float: none;
    margin: 0 1px;
}

.review-box>ul>li:last-child {
    margin-right: 0px;
}

.review-box>ul>li>i {
    position: relative;
    display: inline-block;
    color: #ffa800;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.review-box>ul>li:hover>i {
    color: var(--thm-gray);
}




/* Update header Style */
@keyframes menu_sticky {
    0% {
        margin-top: -90px;
    }

    50% {
        margin-top: -74px;
    }

    100% {
        margin-top: 0;
    }
}




/*** 
========================================
    Mobile Menu
========================================
***/
.nav-outer .mobile-nav-toggler {
    position: relative;
    display: none;
    float: right;
    cursor: pointer;
    padding: 30px 0;
}

.nav-outer.style1 .mobile-nav-toggler {
    padding: 35px 0 35px;
}

.nav-outer.style2 .mobile-nav-toggler {
    padding: 25px 0;
}

.nav-outer.style3 .mobile-nav-toggler {
    padding: 30px 0;
}

.nav-outer .mobile-nav-toggler .inner {
    position: relative;
    display: block;
    padding: 3px 5px;
    background: var(--thm-base);
}

.nav-outer.style2 .mobile-nav-toggler .inner {
    background-color: var(--thm-black);
}




.mobile-menu {
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    max-width: 100%;
    height: 100%;
    padding-right: 30px;
    opacity: 0;
    visibility: hidden;
    z-index: 999999;
}

.mobile-menu .menu-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(9, 16, 32, 0.90);
    -webkit-transform: translateX(101%);
    -ms-transform: translateX(101%);
    transform: translateX(101%);
    transition: all 900ms ease;
    -moz-transition: all 900ms ease;
    -webkit-transition: all 900ms ease;
    -ms-transition: all 900ms ease;
    -o-transition: all 900ms ease;
    z-index: 1;
}

.mobile-menu-visible .mobile-menu .menu-backdrop {
    opacity: 0.70;
    visibility: visible;
    -webkit-transition: all 0.7s ease;
    -moz-transition: all 0.7s ease;
    -ms-transition: all 0.7s ease;
    -o-transition: all 0.7s ease;
    transition: all 0.7s ease;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
}

.mobile-menu .mCSB_inside>.mCSB_container {
    margin-right: 5px;
}

.mobile-menu .navbar-collapse {
    display: block !important;
}


.mobile-menu .nav-logo {
    position: relative;
    padding: 30px 25px;
    text-align: left;
}

.mobile-menu .nav-logo a {
    position: relative;
    display: inline-block;
}

.mobile-menu-visible {
    overflow: hidden;
}

.mobile-menu-visible .mobile-menu {
    opacity: 1;
    visibility: visible;
}

.mobile-menu .menu-box {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    max-height: 100%;
    overflow-y: auto;
    background: #000000;
    padding: 0px 0px;
    z-index: 5;
    opacity: 0;
    visibility: hidden;
    border-radius: 0px;
    -webkit-transform: translateX(101%);
    -ms-transform: translateX(101%);
    transform: translateX(101%);
}

.mobile-menu-visible .mobile-menu .menu-box {
    opacity: 1;
    visibility: visible;
    -webkit-transition: all 0.7s ease;
    -moz-transition: all 0.7s ease;
    -ms-transition: all 0.7s ease;
    -o-transition: all 0.7s ease;
    transition: all 0.7s ease;
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%);
}

.mobile-menu .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #ffffff;
    font-size: 30px;
    line-height: 30px;
    width: 30px;
    text-align: center;
    cursor: pointer;
    z-index: 10;
    -webkit-transition: all 0.9s ease;
    -moz-transition: all 0.9s ease;
    -ms-transition: all 0.9s ease;
    -o-transition: all 0.9s ease;
    transition: all 0.9s ease;
}

.mobile-menu-visible .mobile-menu .close-btn {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
}


.mobile-menu .close-btn:hover {
    color: var(--thm-base);
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

.mobile-menu .navigation {
    position: relative;
    display: block;
    width: 100%;
    float: none;
}

.mobile-menu .navigation li {
    position: relative;
    display: block;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}

.mobile-menu .navigation:last-child {
    border-bottom: 1px solid rgba(255, 255, 255, 0.10);
}

.mobile-menu .navigation li>ul>li:first-child {
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}

.mobile-menu .navigation li>a {
    position: relative;
    display: block;
    padding: 10px 25px;
    color: #ffffff;
    font-size: 15px;
    line-height: 24px;
    font-weight: 600;
    text-transform: uppercase;
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

.mobile-menu .navigation li>a:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 0;
    border-left: 5px solid var(--thm-base);
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

.mobile-menu .navigation li.current>a:before {
    height: 100%;
}

.mobile-menu .navigation li.current>a,
.mobile-menu .navigation li>a:hover {
    color: var(--thm-base);
}


.mobile-menu .navigation li ul li>a {
    font-size: 15px;
    font-weight: 400;
    margin-left: 20px;
    text-transform: capitalize;
}

.mobile-menu .navigation li.dropdown .dropdown-btn {
    position: absolute;
    top: 6px;
    right: 6px;
    width: 32px;
    height: 32px;
    text-align: center;
    color: #ffffff;
    font-size: 16px;
    line-height: 32px;
    background: rgba(255, 255, 255, 0.10);
    cursor: pointer;
    border-radius: 2px;
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 5;
}

.mobile-menu .navigation li.dropdown .dropdown-btn.open {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

.mobile-menu .navigation li>ul,
.mobile-menu .navigation li>ul>li>ul,
.mobile-menu .navigation>li.dropdown>.megamenu {
    display: none;
}

.mobile-menu .social-links {
    position: relative;
    text-align: center;
    padding: 50px 15px;
}

.mobile-menu .social-links li {
    position: relative;
    display: inline-block;
    margin: 0px 1px 10px;
}

.mobile-menu .social-links li a {
    position: relative;
    display: block;
    width: 45px;
    height: 45px;
    border: 1px solid rgba(255, 255, 255, 0.20);
    border-radius: 50%;
    background: var(--thm-base);
    color: #ffffff;
    font-size: 16px;
    line-height: 41px;
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}

.mobile-menu .social-links li a:hover {
    color: var(--thm-base);
    background-color: #ffffff;
}







/** xs sidebar **/
.xs-sidebar-group .xs-overlay {
    left: 0%;
    top: 0;
    position: fixed;
    height: 100%;
    opacity: 0;
    width: 100%;
    visibility: hidden;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    cursor: url(../images/icon/cross-out.png), pointer;
    z-index: 99999999;
}

.xs-sidebar-group.isActive .xs-overlay {
    opacity: .8;
    visibility: visible;
    transition-delay: 0.3s;
    right: 100%;
    background-color: #000000;
}


.xs-sidebar-widget {
    position: fixed;
    left: -100%;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 365px;
    background-color: #2c2c2c;
    overflow: hidden;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
    transition: all 700ms ease 100ms;
    visibility: hidden;
    opacity: 1;
    z-index: 999999999;
}

.xs-sidebar-group.isActive .xs-sidebar-widget {
    opacity: 1;
    visibility: visible;
    left: 0;
    transition: all 500ms ease 800ms;
}



.sidebar-textwidget {
    padding: 70px 30px;
}

.sidebar-widget-container {
    position: relative;
    top: 150px;
    opacity: 0;
    visibility: hidden;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: all 300ms ease 100ms;
}

.xs-sidebar-group.isActive .sidebar-widget-container {
    top: 0px;
    opacity: 1;
    visibility: visible;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: all 700ms ease 1500ms;
}

.xs-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: .8;
    z-index: 0;
    background-color: #000000;
}



.xs-sidebar-group .widget-heading {
    position: absolute;
    top: 0;
    right: 0;
    padding: 25px;
}

.xs-sidebar-group .widget-heading a {
    position: relative;
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 26px;
    text-align: center;
    border: 2px solid #fff;
    border-radius: 50%;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.xs-sidebar-group .widget-heading a:hover {
    color: var(--thm-base);
    border-color: var(--thn-base);
}


.xs-sidebar-group .content-inner .logo {
    position: relative;
    display: block;
    margin-bottom: 30px;
}

.xs-sidebar-group .content-inner .logo a {
    position: relative;
    display: inline-block;
}

.xs-sidebar-group .content-inner h4 {
    position: relative;
    display: block;
    font-size: 20px;
    line-height: 30px;
    color: #fff;
    font-weight: 400;
    text-transform: uppercase;
    padding-bottom: 14px;
    margin-bottom: 30px;
}

.xs-sidebar-group .content-inner h4:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background: var(--thm-base);
}



.xs-sidebar-group .content-inner .content-box {
    margin-bottom: 30px;
    padding-right: 15px;
}

.xs-sidebar-group .content-inner .content-box .inner-text {
    position: relative;
    display: block;
    padding-top: 2px;
}

.xs-sidebar-group .content-inner .content-box p {
    color: #b0bcc2;
    margin: 0;
}

.xs-sidebar-group .content-inner .form-inner .form-group {
    position: relative;
    margin-bottom: 20px;
}

.xs-sidebar-group .content-inner .form-inner .form-group:last-child {
    margin-bottom: 0px;
}

.xs-sidebar-group .content-inner .form-inner .form-group input[type='text'],
.xs-sidebar-group .content-inner .form-inner .form-group input[type='email'],
.xs-sidebar-group .content-inner .form-inner .form-group textarea {
    position: relative;
    display: block;
    width: 100%;
    height: 50px;
    font-size: 15px;
    padding: 10px 20px;
    color: #848484;
    transition: all 500ms ease;
}

.xs-sidebar-group .content-inner .form-inner .form-group button.btn-one {
    color: var(--thm-black);
}

.xs-sidebar-group .content-inner .form-inner .form-group .theme-btn-one:hover {}

.xs-sidebar-group .content-inner .form-inner .form-group textarea {
    resize: none;
    height: 120px;
}

.xs-sidebar-group .content-inner .form-inner .form-group input:focus,
.xs-sidebar-group .content-inner .form-inner .form-group textarea:focus {
    border-color: #00224f;
}


.sidebar-contact-info {
    position: relative;
    display: block;
    padding-top: 43px;
}

.sidebar-contact-info h3 {}

.sidebar-contact-info ul {
    position: relative;
    display: block;
    padding-bottom: 22px;
}

.sidebar-contact-info ul li {
    position: relative;
    display: block;
    color: #b0bcc2;
    line-height: 30px;
    margin-bottom: 6px;
}

.sidebar-contact-info ul li:last-child {
    margin-bottom: 0;
}

.sidebar-contact-info ul li span {
    position: relative;
    display: inline-block;
    width: 25px;
}

.sidebar-contact-info ul li span:before {
    position: relative;
    display: inline-block;
    color: var(--thm-base);
    top: 3px;
}

.sidebar-contact-info ul li a {
    color: #b0b0bd;
}

.xs-sidebar-group .content-inner .thm-social-link1 {
    overflow: hidden;
}




.sec-title {
    position: relative;
    display: block;
    margin-top: -8px;
    padding-bottom: 44px;
}

.sec-title .sub-title {
    position: relative;
    display: block;
    line-height: 0;
    padding-bottom: 9px;
}

.sec-title .sub-title h3 {
    color: var(--thm-base);
    font-size: 24px;
    line-height: 34px;
    font-family: var(--thm-font-2);
    font-weight: 700;
    font-style: normal;
}

.sec-title h2 {
    font-size: 50px;
    line-height: 1.2em;
    font-weight: 800;
    text-transform: none;
}


.sec-title--style2 {
    position: relative;
}

.sec-title--style2 .sub-title h3 {
    color: var(--thm-primary);
}

.sec-title--style2 h2 {
    color: #ffffff;
}





@keyframes slide5 {
    from {
        background-position: 0 0;
    }

    to {
        background-position: -200px 0;
    }
}

@-webkit-keyframes slide5 {
    from {
        background-position: 0 0;
    }

    to {
        background-position: -200px 0;
    }
}







/*** 
=============================================
    Features Style1 Content Css
=============================================
***/
.features-style1-area {
    position: relative;
    display: block;
}

.features-style1__content {
    position: relative;
    display: block;
    z-index: 10;
}

.features-style1__content ul {
    position: relative;
    display: flex;
    background: #ffffff;
    padding: 0 50px;
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    margin-top: -60px;
    z-index: 10;
}

.features-style1__content ul li {
    position: relative;
    display: block;
    padding: 0 20px;
    padding-top: 54px;
    padding-bottom: 45px;
    max-width: 33.333333%;
    width: 100%;
}

.features-style1__content ul li:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    height: 3px;
    background: var(--thm-primary);
    transform: scaleX(0);
    transition: all 500ms linear;
    transition-delay: 0.1s;
}

.features-style1__content ul li:hover:before {
    transform: scaleX(1.0);
}

.single-features-style1 {
    position: relative;
    display: block;
    padding-left: 75px;
}

.single-features-style1 .icon-holder {
    position: absolute;
    top: 0;
    left: 0;
    width: 75px;
    height: 75px;
    padding-top: 10px;
}

.single-features-style1 .icon-holder .box {
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    background-color: rgba(var(--thm-base-rgb), .10);
    transition: all 500ms ease;
}

.single-features-style1:hover .icon-holder .box {
    background-color: var(--thm-primary);
}

.single-features-style1 .icon-holder span:before {
    position: relative;
    display: inline-block;
    color: var(--thm-base);
    font-size: 65px;
    line-height: 65px;
    transform: scale(1.0);
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.single-features-style1:hover .icon-holder span:before {
    color: var(--thm-black);
    transform: scale(0.9);
}


.single-features-style1 .text-holder {
    position: relative;
    display: block;
    padding-top: 7px;
    padding-left: 10px;
}

.single-features-style1 .text-holder h3 {
    font-size: 20px;
    line-height: 24px;
    margin: 0 0 14px;
}

.single-features-style1 .text-holder h3 a {
    color: var(--thm-black);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.single-features-style1 .text-holder h3 a:hover {
    color: var(--thm-primary);
}

.single-features-style1 .text-holder p {
    margin: 0;
}



/*** 
=============================================
    Features style2 Area Css
=============================================
***/
.features-style2-area {
    position: relative;
    display: block;
}

.features-style2-area .auto-container {
    max-width: 100%;
    padding: 0;
}

.features-style2-area .row {
    margin-left: 0px;
    margin-right: 0px;
}

.features-style2-area .row [class*=col-] {
    padding-left: 0px;
    padding-right: 0px;
}

.single-features-style2-box {
    position: relative;
    display: block;
    overflow: hidden;
    background: var(--thm-black);
    padding: 112px 0;
    min-height: 360px;
}

.single-features-style2-box .inner-content {
    position: relative;
    display: block;
    max-width: 585px;
    width: 100%;
    float: right;
    padding-left: 75px;
}

.single-features-style2-box.left .inner-content {
    float: left;
    margin-left: 100px;
}

.single-features-style2-box .inner-content .icon {
    position: absolute;
    top: 25px;
    left: 0;
    padding-top: 10px;
}

.single-features-style2-box .inner-content .icon .box {
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.07);
    transition: all 300ms ease 100ms;
}

.single-features-style2-box:hover .inner-content .icon .box {
    background: var(--thm-base);
    transform: rotate(90deg);
}

.single-features-style2-box .inner-content .icon span::before {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 65px;
    line-height: 65px;
    transform: scale(1.0);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.single-features-style2-box:hover .inner-content .icon span::before {
    transform: scale(0.8);
}

.single-features-style2-box .inner-content .title {
    position: relative;
    display: block;
    padding-left: 20px;
}

.single-features-style2-box .inner-content .title h3 {
    color: #a5b9ad;
    font-size: 24px;
    line-height: 36px;
    font-weight: 700;
    font-family: var(--thm-font-2);
    margin-bottom: 4px;
}

.single-features-style2-box .inner-content .title h2 {
    color: #ffffff;
    font-size: 40px;
    line-height: 1.2em;
    font-weight: 700;
}

.single-features-style2-box .img-bg {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}



/*** 
=============================================
    Features Style3 Area Css
=============================================
***/
.features-style3-area {
    position: relative;
    display: block;
    padding: 120px 0px 120px;
    background: #ffffff;
    z-index: 10;
}

.features-style3__bg {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-position: center center;
    background-attachment: scroll;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: var(--thm-black);
    background-blend-mode: luminosity;
    z-index: -1;
}

.features-style3__bg::before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: rgba(var(--thm-black-rgb), 0.85);
    z-index: -2;
    content: "";
}


.features-style3__content {
    position: relative;
    display: block;
}

.features-style3__content .sec-title {
    padding-bottom: 34px;
}

.features-style3__content .video-btn {
    position: relative;
    display: block;
}

.features-style3__content .video-btn .icon {
    position: relative;
    display: inline-block;
}

.features-style3__content .video-btn .icon .video-popup {
    position: relative;
    display: block;
    width: 100px;
    height: 100px;
    line-height: 100px;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    background: var(--thm-base);
}

.features-style3__content .video-btn .icon .video-popup span:before {
    position: relative;
    top: 3px;
}



.features-style3__list {
    position: relative;
    display: block;
    overflow: hidden;
}

.features-style3__list ul {
    position: relative;
    display: block;
    float: left;
}

.features-style3__list ul.style2 {
    position: relative;
    display: block;
    float: left;
    padding-left: 75px;
}

.features-style3__list ul li {
    position: relative;
    display: block;
    color: #ffffff;
    font-size: 18px;
    line-height: 40px;
    font-weight: 600;
    transition: all 500ms ease;
}

.features-style3__list ul li:hover {
    color: var(--thm-primary);
}

.features-style3__list ul li span::before {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 20px;
    padding-right: 13px;
    top: 3px;
}














/*** 
=============================================
    Choose Style1 Area Css
=============================================
***/
.choose-style1-area {
    position: relative;
    display: block;
    margin-bottom: -100px;
    z-index: 10;
}

.choose-style1__title-box {
    position: relative;
    display: block;
    background: var(--thm-base);
    padding: 62px 60px 65px;
}

.choose-style1__title-box .sec-title--style2 {
    padding-bottom: 58px;
}

.choose-style1__title-box .sec-title--style2 h2 {
    color: #ffffff;
    font-size: 30px;
    line-height: 40px;
    font-weight: 800;
}

.choose-style1__title-box .btn-box {
    position: relative;
    display: block;
    line-height: 0;
}

.choose-style1__title-box .btn-box a {
    padding-left: 40px;
    padding-right: 40px;
}

.choose-style1__title-box .btn-box a.btn-one:before {
    background-color: var(--thm-black);
}



.video-gallery-style2 {
    position: relative;
    width: 100%;
    min-height: 400px;
}

.video-gallery-style2__bg {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-color: var(--thm-base);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.video-gallery-style2 .icon {
    position: absolute;
    bottom: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    background: var(--thm-primary);
    border-radius: 0%;
    z-index: 2;
}

.video-gallery-style2 .icon .video-popup {
    position: relative;
    display: block;
    font-size: 25px;
    text-align: center;
}

.video-gallery-style2 .icon .video-popup span::before {
    position: relative;
    top: 4px;
    color: var(--thm-black);
}




/*** 
=============================================
    Slogan area style
=============================================
***/
.slogan-area {
    position: relative;
    display: block;
    overflow: hidden;
    background: var(--thm-base);
    padding: 100px 0;
    z-index: 10;
}

.slogan-area .row {
    align-items: center;
}

.phone-number-box2 {
    position: relative;
    display: flex;
    align-items: center;
}

.phone-number-box2 .icon {
    position: relative;
    display: block;
    width: 75px;
    height: 75px;
    background-color: rgb(30, 50, 38);
    border-radius: 50%;
    z-index: 1;
}

.phone-number-box2 .icon span::before {
    position: relative;
    display: block;
    color: var(--thm-primary);
    font-size: 25px;
    line-height: 75px;
    text-align: center;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.phone-number-box2 .icon:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 50%;
    background: var(--thm-primary);
    content: "";
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.phone-number-box2:hover .icon:before {
    transform: scaleX(1.0);
}

.phone-number-box2:hover .icon span::before {
    color: #fff;
}


.phone-number-box2 .phone {
    position: relative;
    display: block;
    padding-left: 30px;
}

.phone-number-box2 .phone p {
    position: relative;
    display: block;
    top: 5px;
    color: var(--thm-primary);
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
    margin: 0 0 16px;
    font-family: var(--thm-font-2);
}

.phone-number-box2 .phone a {
    position: relative;
    display: inline-block;
    color: #ffffff;
    font-size: 34px;
    line-height: 40px;
    font-weight: 800;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    font-family: var(--thm-font);
}

.phone-number-box2 .phone a:hover {
    color: var(--thm-primary);
}


.slogan-text-box {
    position: relative;
    display: block;
}

.slogan-text-box p {
    color: rgba(255, 255, 255, 0.70);
    font-size: 18px;
    line-height: 32px;
    font-weight: 500;
    margin: 0;
}

.slogan-btn-box {
    position: relative;
    display: block;
    line-height: 0;
}

.slogan-btn-box a {
    padding-left: 50px;
    padding-right: 50px;
}

.slogan-btn-box a:before {
    background-color: var(--thm-black);
}



/*** 
=============================================
    Google Map Style1 Area Css
=============================================
***/
.google-map-style1-area {
    position: relative;
    display: block;
    background: #ffffff;
    z-index: 10;
}

.google-map-style1-area .auto-container {
    max-width: 100%;
    padding: 0;
}

.home1-page-map-outer {
    position: relative;
    display: block;
    z-index: 10;
}

.home1-page-map-outer .map-canvas {
    position: relative;
    width: 100%;
    height: 550px;
}



/*** 
=============================================
    Working Process Area Css
=============================================
***/
.working-process-area {
    position: relative;
    display: block;
    padding: 0px 0 70px;
    background: #ffffff;
    z-index: 10;
}

.working-process-area.pdtop120 {
    padding-top: 120px;
}

.working-process-area .sec-title {
    padding-bottom: 80px;
}

.working-process__inner {
    position: relative;
    display: block;
    z-index: 1;
}

.working-process__inner .horizontal-line {
    position: absolute;
    top: 90px;
    left: -90px;
    right: -90px;
    height: 1px;
    background: #cad7cf;
}

.working-process__inner .horizontal-line:before {
    content: "";
    position: absolute;
    top: -5px;
    left: 0;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: var(--thm-primary);
}

.working-process__inner .horizontal-line:after {
    content: "";
    position: absolute;
    top: -5px;
    right: 0;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: var(--thm-primary);
}




.working-process-box {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    counter-reset: count;
}

.single-working-process {
    position: relative;
    display: block;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    width: 100%;
    text-align: center;
    padding: 0px 30px 0px;
    margin-bottom: 38px;
    z-index: 1;
}

.single-working-process .icon-holder {
    position: relative;
    display: block;
    width: 180px;
    height: 180px;
    margin: 0 auto;
    background-color: var(--thm-base);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.single-working-process .icon-holder::after {
    content: "";
    position: absolute;
    top: -36px;
    left: -36px;
    bottom: -36px;
    right: -36px;
    border: 1px solid #cad7cf;
    border-radius: 50%;
    z-index: -2;
}

.single-working-process .icon-holder:before {
    content: "";
    position: absolute;
    left: -36px;
    bottom: -37px;
    right: -36px;
    height: 127px;
    background: #ffffff;
    z-index: -1;
}

.single-working-process:nth-child(2n+2) .icon-holder:before {
    top: -37px;
    bottom: auto;
    height: 128px;
}



.single-working-process .icon-holder span:before {
    position: relative;
    color: #ffffff;
    font-size: 60px;
    line-height: 60px;
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
    z-index: 5;
}

.single-working-process:hover .icon-holder span:before {
    transform: scale(1.0) rotate(1deg);
}

.single-working-process .counting-box {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 50px;
    background: var(--thm-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.single-working-process .counting-box.top {
    left: auto;
    bottom: auto;
    top: 0;
    right: 0;
}

.single-working-process .counting-box:before {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: var(--thm-black);
    font-size: 20px;
    font-weight: 700;
    counter-increment: count;
    content: "0"counter(count);
    transition: all 100ms linear;
    transition-delay: 0.1s;
    font-family: var(--thm-font);
}


.single-working-process .text-holder {
    position: relative;
    display: block;
    padding-top: 70px;
}

.single-working-process .text-holder h3 {
    font-size: 24px;
    line-height: 24px;
    font-weight: 700;
    margin-bottom: 15px;
}

.single-working-process .text-holder p {
    margin: 0;
}

.single-working-process .text-holder .btn-box {
    position: relative;
    display: block;
    padding-top: 15px;
}

.single-working-process .text-holder p {
    margin: 0;
}



/*** 
=============================================
    Industries Details Area Css
=============================================
***/
.industries-details-area {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 120px 0 120px;
    z-index: 10;
}

.industries-details__content {
    position: relative;
    display: block;
}

.industries-details__content .single-service-style2 {
    margin-bottom: 50px;
}




.industries-details__text-box {
    position: relative;
    display: block;
}

.industries-details__text-box .text {
    position: relative;
    display: block;
}

.industries-details__text-box .text h2 {
    font-size: 40px;
    line-height: 50px;
    font-weight: 800;
    margin: 0 0 27px;
}



.industries-details__text-box .text-right-box {
    position: relative;
    display: block;
    padding-top: 77px;
}

.industries-details__text-box .text-right-box ul {
    position: relative;
    display: block;
    padding-top: 17px;
}

.industries-details__text-box .text-right-box ul li {
    position: relative;
    display: block;
    padding-left: 30px;
    color: var(--thm-black);
    font-size: 18px;
    font-weight: 600;
    line-height: 26px;
    margin-bottom: 12px;
}

.industries-details__text-box .text-right-box ul li::before {
    font-family: 'icomoon' !important;
    content: "\e90f";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    color: var(--thm-primary);
    font-size: 22px;
    font-weight: 400;
}

.industries-details__text-box .text-right-box ul li:last-child {
    margin-bottom: 0;
}



.industries-details__features-box {
    position: relative;
    display: block;
    border-bottom: 1px solid #cad7cf;
    padding-top: 52px;
    padding-bottom: 65px;
}

.industries-details__features-box__single {
    position: relative;
    display: block;
    margin-bottom: 43px;
}

.industries-details__features-box__single .img-holder {
    position: relative;
    display: block;
    overflow: hidden;
}

.industries-details__features-box__single .img-holder img {
    width: 100%;
}


.industries-details__features-box__single .text-holder {
    position: relative;
    display: block;
    padding-top: 42px;
}

.industries-details__features-box__single .text-holder:before {
    content: "";
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    height: 5px;
    background: var(--thm-base);
}

.industries-details__features-box__single .text-holder h3 {
    font-size: 24px;
    line-height: 30px;
    font-weight: 800;
    margin: 0 0 9px;
}

.industries-details__features-box__single .text-holder p {
    margin: 0;
}













/*** 
=============================================
    Contact Info Style1 Area Css
=============================================
***/
.contact-info-style1-area {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 0px 0 120px;
    z-index: 10;
}

.contact-info-style1__box {
    position: relative;
    display: block;
}

.contact-form {
    position: relative;
    display: block;
}

.contact-form.max-width {
    max-width: 770px;
    margin: 0 auto;
}

.contact-form form {
    position: relative;
    display: block;
}

.contact-form form .input-box {
    position: relative;
    display: block;
    margin-bottom: 20px;
}

.contact-form form input[type="text"],
.contact-form form input[type="email"],
.contact-form form textarea {
    position: relative;
    display: block;
    background: #ebf1ed;
    width: 100%;
    height: 62px;
    border: 1px solid #ebf1ed;
    color: #737c76;
    font-size: 14px;
    font-weight: 500;
    font-style: normal;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 0px;
    transition: all 500ms ease;
    font-family: var(--thm-font);
}

.contact-form form textarea {
    height: 155px;
    padding-top: 12px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 10px;
}

.contact-form form input[type="text"]::-webkit-input-placeholder {
    color: #737c76;
}

.contact-form form input[type="text"]:-moz-placeholder {
    color: #737c76;
}

.contact-form form input[type="text"]::-moz-placeholder {
    color: #737c76;
}

.contact-form form input[type="text"]:-ms-input-placeholder {
    color: #737c76;
}

.contact-form form input[type="email"]::-webkit-input-placeholder {
    color: #737c76;
}

.contact-form form input[type="email"]:-moz-placeholder {
    color: #737c76;
}

.contact-form form input[type="email"]::-moz-placeholder {
    color: #737c76;
}

.contact-form form input[type="email"]:-ms-input-placeholder {
    color: #737c76;
}

.contact-form form textarea::-webkit-input-placeholder {
    color: #737c76;
}

.contact-form form textarea:-moz-placeholder {
    color: #737c76;
}

.contact-form form textarea::-moz-placeholder {
    color: #737c76;
}

.contact-form form textarea:-ms-input-placeholder {
    color: #737c76;
}

.contact-form form .button-box {
    position: relative;
    display: block;
    padding-top: 10px;
}

.contact-form form .button-box button {
    padding-top: 9px;
    padding-bottom: 5px
}




@-webkit-keyframes iliketomoveit {
    0% {
        left: 0px;
    }

    25% {
        left: 400px;
    }

    75% {
        left: 200px;
    }

    100% {
        left: 0px;
    }
}

@keyframes iliketomoveit {
    0% {
        left: 0px;
    }

    25% {
        left: 400px;
    }

    75% {
        left: 200px;
    }

    100% {
        left: 0px;
    }
}



/*** 
=============================================
    Error Page Area Style      
=============================================
***/
.error-page-area {
    position: relative;
    display: block;
    padding: 115px 0 120px;
    background: #ffffff;
    z-index: 10;
}

.error-content {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.error-content .big-title {
    position: relative;
    display: block;
    z-index: 1;
}

.error-content .big-title h2 {
    color: var(--thm-base);
    font-size: 72px;
    line-height: 70px;
    font-weight: 800;
    text-transform: uppercase;
}

.error-content .title {
    position: relative;
    display: block;
    padding-top: 17px;
    padding-bottom: 24px;
}

.error-content .title h2 {
    font-size: 48px;
    line-height: 60px;
    font-weight: 700;
}

.error-content .text {
    position: relative;
    display: block;
    padding-bottom: 29px;
}

.error-content .text p {
    margin: 0;
}

.error-page-search-box {
    position: relative;
    display: block;
    max-width: 570px;
    width: 100%;
    margin: 0 auto;
}

.error-page-search-box form.search-form {
    position: relative;
    display: block;
    width: 100%;
}

.error-page-search-box .search-form input[type="text"] {
    position: relative;
    display: block;
    width: 100%;
    height: 60px;
    border-radius: 0px;
    background: #ffffff;
    border: 1px solid #e5e5e5;
    color: #757575;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: .1em;
    padding-left: 30px;
    padding-right: 60px;
    transition: all 500ms ease 0s;
    font-family: var(--thm-font);
}

.error-page-search-box .search-form button {
    position: absolute;
    top: 10px;
    right: 10px;
    bottom: 10px;
    width: 40px;
    height: 40px;
    background: var(--thm-base);
    color: #ffffff;
    font-size: 16px;
    line-height: 10px;
    display: block;
    text-align: center;
    border: 0px solid #e1e1e1;
    transition: all 500ms ease 0s;
}

.error-page-search-box .search-form button i {
    font-size: 16px
}

.error-page-search-box .search-form input[type="text"]:focus {
    color: var(--thm-black);
    border-color: var(--thm-base);
}

.error-page-search-box .search-form input[type="text"]:focus+button,
.error-page-search-box .search-form button:hover {
    color: #fff;
}

.error-page-search-box .search-form input::-webkit-input-placeholder {
    color: #757575;
}

.error-page-search-box .search-form input:-moz-placeholder {
    color: #757575;
}

.error-page-search-box .search-form input::-moz-placeholder {
    color: #757575;
}

.error-page-search-box .search-form input:-ms-input-placeholder {
    color: #757575;
}

.error-content .btns-box {
    line-height: 0;
    padding-top: 20px;
}

.error-content .btns-box a {
    padding-left: 40px;
    padding-right: 40px;
}




/*** 
=============================================
    Main Contact Form Area Css
=============================================
***/
.main-contact-form-area {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 120px 0px 120px;
    z-index: 10;
}

.contact-info-box {
    position: relative;
    display: block;
}

.contact-info-box .sec-title {
    padding-bottom: 25px;
}

.contact-info-box .text {
    position: relative;
    display: block;
}

.contact-info-box .text p {
    margin: 0px;
}

.contact-info-list {
    position: relative;
    display: block;
    margin-top: 38px;
}

.contact-info-list li {
    position: relative;
    display: block;
    margin-bottom: 20px;
}

.contact-info-list li .icon,
.contact-info-list li .text {
    display: table-cell;
    vertical-align: middle;
}

.contact-info-list li .icon {
    position: relative;
    width: 60px;
    height: 60px;
    background: var(--thm-primary);
    border-radius: 50%;
    text-align: center;
    color: var(--thm-black);
    font-size: 15px;
}

.contact-info-list li .icon span::before {
    position: relative;
    display: block;
    line-height: 60px;
}

.contact-info-list li .text {
    position: relative;
    padding-left: 20px;
}

.contact-info-list li .text p {
    font-size: 14px;
    line-height: 20px;
    margin: 0 0 10px;
}

.contact-info-list li .text h4 {
    font-size: 18px;
    line-height: 20px;
}

.contact-info-list li .text h4 a {
    color: var(--thm-black);
}

.contact-info-list li .text h4 a:hover {
    color: var(--thm-primary);
}




.contact-form--style2 {
    position: relative;
    display: block;
    max-width: 570px;
    background: #ffffff;
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07), inset 0px 10px 0px 0px rgba(0, 105, 64, 0.004);
    padding: 58px 70px 48px;
    margin-top: -235px;
}

.contact-form--style2::before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background: var(--thm-base);
    height: 10px;
    content: "";
}

.contact-form--style2 .sec-title {
    padding-bottom: 14px;
}

.contact-form--style2 form .button-box {
    padding-top: 0px;
}

.contact-form--style2 form textarea {
    height: 110px !important;
    padding-top: 20px;
}

.contact-form--style2 form .input-box {
    margin-bottom: 15px;
}

.contact-form--style2 form input[type="text"],
.contact-form--style2 form input[type="email"],
.contact-form--style2 form textarea {
    height: 52px;
}



/*** 
=============================================
    Google Map Area Css
=============================================
***/
.google-map-area {
    position: relative;
    display: block;
    background: #ffffff;
    z-index: 10;
}

.google-map-area .auto-container {
    max-width: 100%;
    padding: 0;
}

.contact-page-map-outer {
    position: relative;
    display: block;
    z-index: 10;
}

.contact-page-map-outer .map-canvas {
    position: relative;
    width: 100%;
    height: 675px;
}









#ui-datepicker-div.ui-widget-content {
    border: 1px solid #c5c5c5;
    background: #fff none repeat scroll 0 0;
    border: 1px solid #777;
    color: #252525;
    font-family: "Poppins", sans-serif;
    font-size: 14px;
    border-radius: 0px;
    width: 270px;
    padding: 5px;
}

#ui-datepicker-div.ui-datepicker .ui-datepicker-header {
    background: var(--thm-base);
    border: 2px solid rgba(var(--thm-base-rgb), .80);
    border-radius: 0;
    color: #fff;
    font-weight: 700;
    padding: 5px 0;
    position: relative;
}

.ui-datepicker td a {
    color: #000000 !important;
    text-align: center;
    background-image: none !important;
    background: #f5f5f5 !important;
    border: 1px solid #f9f9f9 !important;
}

.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
    border: 1px solid var(--thm-base) !important;
    background: var(--thm-base) !important;
    color: #ffffff !important;
}

.ui-datepicker .ui-datepicker-prev {
    left: 5px;
}

.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
    border-radius: 30%;
    height: 20px;
    position: absolute;
    top: 7px;
    width: 20px;
    transition: all 500ms ease;
    cursor: pointer;
}

.ui-datepicker .ui-datepicker-next {
    right: 5px;
}

.ui-datepicker .ui-datepicker-prev:hover,
.ui-datepicker .ui-datepicker-next:hover {
    top: 7px;
    background: #fff;
    border: none;
}

.ui-datepicker table {
    border-collapse: collapse;
    font-size: 13px;
    margin: 0 0 0.4em;
    width: 100%;
    z-index: 99999999;
}

.ui-datepicker th {
    border: medium none;
    font-weight: 600;
    padding: 2px 3px;
    text-align: center;
}

.ui-datepicker-calendar .ui-state-default:hover,
.ui-datepicker-calendar .ui-state-default:active {
    background: #43c3ea;
    color: #fff;
    border-color: #43c3ea;
}





/*** 
=============================================
    Element Page Css      
=============================================
***/



/**
 * Swiper 4.5.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2019 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: February 22, 2019
 */
.swiper-container{margin:0 auto;position:relative;overflow:hidden;list-style:none;padding:0;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform;-webkit-box-sizing:content-box;box-sizing:content-box}.swiper-container-android .swiper-slide,.swiper-wrapper{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-container-multirow>.swiper-wrapper{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;height:100%;position:relative;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;-o-transition-property:transform;transition-property:transform;transition-property:transform,-webkit-transform}.swiper-slide-invisible-blank{visibility:hidden}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-transition-property:height,-webkit-transform;transition-property:height,-webkit-transform;-o-transition-property:transform,height;transition-property:transform,height;transition-property:transform,height,-webkit-transform}.swiper-container-3d{-webkit-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{-webkit-transform-style:preserve-3d;transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:-webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-wp8-horizontal,.swiper-container-wp8-horizontal>.swiper-wrapper{-ms-touch-action:pan-y;touch-action:pan-y}.swiper-container-wp8-vertical,.swiper-container-wp8-vertical>.swiper-wrapper{-ms-touch-action:pan-x;touch-action:pan-x}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:27px;height:44px;margin-top:-22px;z-index:10;cursor:pointer;background-size:27px 44px;background-position:center;background-repeat:no-repeat}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");left:10px;right:auto}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");right:10px;left:auto}.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-lock{display:none}.swiper-pagination{position:absolute;text-align:center;-webkit-transition:.3s opacity;-o-transition:.3s opacity;transition:.3s opacity;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:10px;left:0;width:100%}.swiper-pagination-bullets-dynamic{overflow:hidden;font-size:0}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33);position:relative}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main{-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next{-webkit-transform:scale(.66);-ms-transform:scale(.66);transform:scale(.66)}.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next{-webkit-transform:scale(.33);-ms-transform:scale(.33);transform:scale(.33)}.swiper-pagination-bullet{width:8px;height:8px;display:inline-block;border-radius:100%;background:#000;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;-webkit-box-shadow:none;box-shadow:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-bullet-active{opacity:1;background:#007aff}.swiper-container-vertical>.swiper-pagination-bullets{right:10px;top:50%;-webkit-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0)}.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:6px 0;display:block}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);width:8px}.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{display:inline-block;-webkit-transition:.2s top,.2s -webkit-transform;transition:.2s top,.2s -webkit-transform;-o-transition:.2s transform,.2s top;transition:.2s transform,.2s top;transition:.2s transform,.2s top,.2s -webkit-transform}.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 4px}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic{left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);white-space:nowrap}.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s left,.2s -webkit-transform;transition:.2s left,.2s -webkit-transform;-o-transition:.2s transform,.2s left;transition:.2s transform,.2s left;transition:.2s transform,.2s left,.2s -webkit-transform}.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet{-webkit-transition:.2s right,.2s -webkit-transform;transition:.2s right,.2s -webkit-transform;-o-transition:.2s transform,.2s right;transition:.2s transform,.2s right;transition:.2s transform,.2s right,.2s -webkit-transform}.swiper-pagination-progressbar{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progressbar .swiper-pagination-progressbar-fill{background:#007aff;position:absolute;left:0;top:0;width:100%;height:100%;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);-webkit-transform-origin:left top;-ms-transform-origin:left top;transform-origin:left top}.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{-webkit-transform-origin:right top;-ms-transform-origin:right top;transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progressbar,.swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{width:100%;height:4px;left:0;top:0}.swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,.swiper-container-vertical>.swiper-pagination-progressbar{width:4px;height:100%;left:0;top:0}.swiper-pagination-white .swiper-pagination-bullet-active{background:#fff}.swiper-pagination-progressbar.swiper-pagination-white{background:rgba(255,255,255,.25)}.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill{background:#fff}.swiper-pagination-black .swiper-pagination-bullet-active{background:#000}.swiper-pagination-progressbar.swiper-pagination-black{background:rgba(0,0,0,.25)}.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill{background:#000}.swiper-pagination-lock{display:none}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-scrollbar-lock{display:none}.swiper-zoom-container{width:100%;height:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;text-align:center}.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg{max-width:100%;max-height:100%;-o-object-fit:contain;object-fit:contain}.swiper-slide-zoomed{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;-webkit-transform-origin:50%;-ms-transform-origin:50%;transform-origin:50%;-webkit-animation:swiper-preloader-spin 1s steps(12,end) infinite;animation:swiper-preloader-spin 1s steps(12,end) infinite}.swiper-lazy-preloader:after{display:block;content:'';width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-position:50%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}@-webkit-keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-container-fade.swiper-container-free-mode .swiper-slide{-webkit-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;-webkit-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube{overflow:visible}.swiper-container-cube .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1;visibility:hidden;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;width:100%;height:100%}.swiper-container-cube .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-cube.swiper-container-rtl .swiper-slide{-webkit-transform-origin:100% 0;-ms-transform-origin:100% 0;transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0;width:100%;height:100%;background:#000;opacity:.6;-webkit-filter:blur(50px);filter:blur(50px);z-index:0}.swiper-container-flip{overflow:visible}.swiper-container-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-container-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-coverflow .swiper-wrapper{-ms-perspective:1200px}


/*** 
=============================================
    About Style1 Area Css   
=============================================
***/
.about-style1-area {
    position: relative;
    display: block;
    padding: 120px 0 120px;
    z-index: 9;
}

.about-style1-area.bg-white {
    background: #ffffff;
}

.about-style1-area .shape1 {
    position: absolute;
    top: -410px;
    right: -450px;
    background-color: rgb(235, 241, 237);
    width: 875px;
    height: 875px;
    border-radius: 50%;
    z-index: -1;
    -webkit-animation: animation1 5s ease-in infinite;
    animation: animation1 5s ease-in infinite;
}

.about-style1__image {
    position: relative;
    display: block;
    max-width: 500px;
    width: 100%;
}

.about-style1__image .text-outer {
    position: absolute;
    top: 30px;
    left: -105px;
    bottom: 0;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    color: rgba(var(--thm-base-rgb), .10);
    font-size: 120px;
    font-weight: 200;
    letter-spacing: 0.4em;
    text-transform: uppercase;
    font-family: var(--thm-font);
    transform: rotate(0deg) translateX(0%);
    width: max-content;
}

.about-style1__image .border-top {
    position: absolute;
    top: 30px;
    left: 30px;
    right: 30px;
    height: 2px;
    background: #ffffff;
    z-index: 2;
}

.about-style1__image .border-left {
    position: absolute;
    top: 30px;
    left: 30px;
    bottom: 30px;
    width: 2px;
    background: #ffffff;
    z-index: 2;
}

.about-style1__image .border-bottom {
    position: absolute;
    left: 30px;
    bottom: 30px;
    right: 30px;
    height: 2px;
    background: #ffffff;
    z-index: 2;
}

.about-style1__image .border-right {
    position: absolute;
    top: 30px;
    right: 30px;
    bottom: 30px;
    width: 2px;
    background: #ffffff;
    z-index: 2;
}


.about-style1__image ul {
    position: relative;
    display: block;
    margin-left: -5px;
    margin-right: -5px;
}

.about-style1__image ul li {
    position: relative;
    display: block;
    float: left;
    padding: 0 5px;
}

.about-style1__image ul li .img-box {
    position: relative;
    display: block;
    overflow: hidden;
}

.about-style1__image ul li .img-box img {
    width: 100%;
}

.about-style1__image ul li .img-box::before {
    position: absolute;
    top: 0;
    left: -100%;
    display: block;
    content: '';
    width: 30%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, .7) 0%, rgba(255, 255, 255, .6) 100%);
    transform: skewX(5deg);
    z-index: 2;
}

.about-style1__image ul li:hover .img-box::before {
    -webkit-animation: shine 1.6s;
    animation: shine 1.6s;
}



.about-style1__content {
    position: relative;
    display: block;
    margin-left: -30px;
}

.about-style1__content .sec-title {
    padding-bottom: 25px;
}

.about-style1__content .inner-content {
    position: relative;
    display: block;
}

.about-style1__content .inner-content .text {
    position: relative;
    display: block;
    padding-bottom: 8px;
}

.about-style1__content .inner-content .text p {
    font-size: 18px;
    line-height: 34px;
    font-weight: 500;
    margin: 0;
}

.progress-levels {
    position: relative;
    display: block;
}

.progress-box {
    position: relative;
    display: block;
    margin-top: 28px;
}

.progress-box .inner {
    position: relative;
    display: block;
}

.progress-box .inner .top {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    align-items: center;
    padding-bottom: 11px;
}

.progress-box .inner .top .text {
    position: relative;
    color: var(--thm-black);
    font-size: 18px;
    line-height: 20px;
    font-weight: 700;
    text-transform: capitalize;
    font-family: var(--thm-font)
}


.progress-box .top .skill-percent {
    position: relative;
    display: block;
    line-height: 0;
}

.progress-box .top .count-text {
    position: relative;
    color: var(--thm-gray);
    font-size: 16px;
    line-height: 20px;
    font-weight: 500;
    display: inline-block;
    float: none;
    font-family: var(--thm-font);
}

.progress-box .top .percent {
    position: relative;
    color: var(--thm-gray);
    font-size: 16px;
    line-height: 20px;
    font-weight: 500;
    display: inline-block;
    float: none;
    margin-left: -2px;
}

.progress-box .bar {
    position: relative;
    display: block;
}

.progress-box .bar .bar-innner {
    position: relative;
    width: 100%;
    height: 8px;
    background-color: rgba(var(--thm-base-rgb), .10);
    border-radius: 10px;
}

.progress-box .bar .bar-fill {
    position: absolute;
    top: 0%;
    left: 0px;
    bottom: 0%;
    width: 0px;
    height: 8px;
    border-radius: 10px;
    transition: all 2000ms ease 300ms;
    background: var(--thm-primary);
}

.about-style1__bottom-content {
    position: relative;
    display: block;
    padding-top: 33px;
}

.about-style1__bottom-content .text-box {
    position: relative;
    display: block;
    margin-top: -7px;
}

.about-style1__bottom-content .text-box ul {
    position: relative;
    display: block;
    overflow: hidden;
}

.about-style1__bottom-content .text-box ul li {
    position: relative;
    display: block;
    padding-left: 30px;
    color: var(--thm-black);
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
}

.about-style1__bottom-content .text-box ul li+li {
    margin-top: 8px;
}

.about-style1__bottom-content .text-box ul li:before {
    position: absolute;
    content: "\e926";
    font-family: 'icomoon' !important;
    left: 1px;
    color: var(--thm-primary);
    font-size: 16px;
    font-weight: 400;
}



.video-gallery-style1 {
    position: relative;
    max-width: 220px;
    min-height: 110px;
    display: flex;
    align-items: center;
    justify-content: center;
    float: right;
    width: 100%;
}

.video-gallery-style1__bg {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-color: var(--thm-black);
    background-blend-mode: multiply;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.video-gallery-style1:hover .video-gallery-style1__bg {
    opacity: 0.70;
}

.video-gallery-style1 .icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background: var(--thm-base);
    border-radius: 50%;
    z-index: 2;
}

.video-gallery-style1 .icon:before {
    position: absolute;
    content: '';
    top: -5px;
    left: -5px;
    bottom: -5px;
    right: -5px;
    border: 1px solid rgba(255, 255, 255, 0.40);
    border-radius: 50%;
    z-index: -1;
}

.video-gallery-style1 .icon:before {
    -webkit-box-shadow: 0 0 0 0 rgba(0, 10, 20, .20);
    box-shadow: 0 0 0 0 rgba(0, 10, 20, .30);
    -webkit-animation: ripple 3s infinite;
    animation: ripple 3s infinite
}

.video-gallery-style1 .icon:after {
    position: absolute;
    content: '';
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    border: 0px dashed rgba(255, 255, 255, 0.40);
    border-radius: 50%;
    z-index: -1;
    -webkit-box-shadow: 0 0 0 0 rgba(0, 10, 20, .70);
    box-shadow: 0 0 0 0 rgba(0, 10, 20, .70);
    -webkit-animation: ripple 6s infinite;
    animation: ripple 6s infinite
}

.video-gallery-style1 .icon .video-popup {
    position: relative;
    display: block;
    color: #ffffff;
    font-size: 15px;
    text-align: center;
}

.video-gallery-style1 .icon .video-popup span::before {
    position: relative;
    top: 2px;
    color: #ffffff;
}



/*** 
=============================================
    About Style2 Area Css   
=============================================
***/
.about-style2-area {
    position: relative;
    display: block;
    padding: 0px 0px 120px;
    z-index: 1;
}

.about-style2-area .container {
    position: relative;
}

.about-style2-area .container::before {
    position: absolute;
    top: 0px;
    left: 215px;
    bottom: -120px;
    right: -100000px;
    background: #ebf1ed;
    content: "";
    z-index: -1;
}

.about-style2__image {
    position: relative;
    display: block;
}

.about-style2__image::before {
    position: absolute;
    left: 160px;
    bottom: -120px;
    width: 10px;
    height: 90px;
    background: var(--thm-base);
    content: "";
}

.about-style2__image-inner {
    position: relative;
    display: block;
    overflow: hidden;
}

.about-style2__image-inner img {
    width: 100%;
    transition: all 500ms linear;
    transition-delay: 0.2s;
}

.about-style2__image:hover .about-style2__image-inner img {
    transform: scale(1.1) rotate(0deg);
    transition: all 500ms linear;
    transition-delay: 0.1s;
}

.about-style2__image-inner::before {
    position: absolute;
    top: 0;
    left: -100%;
    display: block;
    content: '';
    width: 50%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, .7) 0%, rgba(255, 255, 255, .3) 100%);
    transform: skewX(25deg);
    z-index: 2;
}

.about-style2__image:hover .about-style2__image-inner::before {
    -webkit-animation: shine 1.9s;
    animation: shine 1.9s;
}


.about-style2__content {
    position: relative;
    display: block;
    padding-left: 70px;
}

.about-style2__content .sec-title {
    padding-bottom: 24px;
}

.about-style2__content .inner-content {
    position: relative;
    display: block;
}

.about-style2__content .inner-content .text {
    position: relative;
    display: block;
}

.about-style2__content .inner-content .text p {
    color: var(--thm-base);
    font-size: 20px;
    line-height: 36px;
    font-weight: 600;
    margin: 0px;
}

.about-style2__content-list {
    position: relative;
    display: block;
    margin-top: 28px;
}

.about-style2__content-list ul {
    position: relative;
    display: block;
}

.about-style2__content-list ul li {
    position: relative;
    display: block;
    line-height: 36px;
}

.about-style2__content-list ul li p {
    font-size: 18px;
    margin: 0px;
}

.about-style2__content-list ul li p span {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 20px;
    line-height: 20px;
    top: 3px;
    padding-right: 6px;
}



.about-style2__content .author-box {
    position: relative;
    display: flex;
    align-items: center;
    margin-top: 50px;
    margin-left: 5px;
}

.about-style2__content .author-box .img-box {
    position: relative;
    display: block;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.about-style2__content .author-box .img-box::before {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border: 1px solid var(--thm-primary);
    border-radius: 50%;
    content: "";
}

.about-style2__content .author-box .img-box img {
    width: 100%;
    border-radius: 50%;
}

.about-style2__content .author-box .title {
    position: relative;
    display: block;
    padding-left: 30px;
}

.about-style2__content .author-box .title h2 {
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
}

.about-style2__content .author-box .title span {
    color: var(--thm-base);
    font-size: 20px;
    line-height: 26px;
    font-weight: 700;
    font-family: var(--thm-font-2);
}



/*** 
=============================================
    About Style2 Area Css   
=============================================
***/
.about-style3-area {
    position: relative;
    display: block;
    overflow: hidden;
    background: #ffffff;
    padding-top: 120px;
    padding-bottom: 5px;
    z-index: 10;
}

.about-style3-area .shape1 {
    position: absolute;
    top: -260px;
    right: -450px;
    background-color: rgb(235, 241, 237);
    width: 875px;
    height: 875px;
    border-radius: 50%;
    z-index: -1;
}


.about-style3__img-box {
    position: relative;
    display: block;
    max-width: 545px;
    width: 100%;
    padding-right: 30px;
}

.about-style3__img-box .inner {
    position: relative;
    display: block;
}

.about-style3__img-box .inner img {
    width: 100%;
}


.about-style3-experience {
    position: absolute;
    top: 60px;
    right: 0px;
    bottom: 60px;
    width: 70px;
    text-align: center;
    background-color: var(--thm-base);
}

.about-style3-experience p {
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transform: rotate(90deg) translateX(0%);
    transform-origin: 0 0;
    width: max-content;
    margin: 90px 50px;
}

.about-style3-experience p span {
    color: var(--thm-primary);
}



.about-style3__content {
    position: relative;
    display: block;
    margin-left: -50px;
}

.about-style3__content .sec-title {
    padding-bottom: 34px;
}

.about-style3__content ul {
    position: relative;
    display: block;
    overflow: hidden;
}

.about-style3__content ul li {
    position: relative;
    display: block;
    float: left;
    width: 50%;
    float: left;
    border-right: 1px solid #cad7cf;
}

.about-style3__content ul li:last-child {
    border-right: none;
    padding-left: 50px;
}

.about-style3__content ul li span:before {
    position: relative;
    display: inline-block;
    left: 1px;
    color: var(--thm-primary);
    font-size: 20px;
    line-height: 20px;
}

.about-style3__content ul li h3 {
    color: var(--thm-base);
    font-size: 18px;
    line-height: 24px;
    font-weight: 700;
    margin: 5px 0 8px;
}

.about-style3__content ul li p {
    margin: 0;
}

.about-style3__content .text {
    position: relative;
    display: block;
    padding-top: 29px;
}

.about-style3__content .text p {
    margin: 0;
}


.about-style3__content .author-box {
    position: relative;
    display: flex;
    align-items: center;
    margin-top: 43px;
    margin-left: 5px;
}

.about-style3__content .author-box .img-box {
    position: relative;
    display: block;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.about-style3__content .author-box .img-box::before {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border: 1px solid var(--thm-primary);
    border-radius: 50%;
    content: "";
}

.about-style3__content .author-box .img-box img {
    width: 100%;
    border-radius: 50%;
}

.about-style3__content .author-box .title {
    position: relative;
    display: block;
    padding-left: 30px;
}

.about-style3__content .author-box .title h2 {
    font-size: 24px;
    line-height: 26px;
    font-weight: 700;
}

.about-style3__content .author-box .title span {
    color: var(--thm-base);
    font-size: 20px;
    line-height: 26px;
    font-weight: 700;
    font-family: var(--thm-font-2);
}


/*** 
=====================================================
	Main Slider style
=====================================================
***/
.main-slider {
    position: relative;
    display: block;
    z-index: 10;
}

.main-slider.style1 {
    position: relative;
    display: block;
    background-color: #ffffff;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: bottom center;
    background-size: cover;
}

.main-slider .slide {
    position: relative;
    display: block;
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.main-slider .slide .image-layer {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center bottom;
    background-size: cover;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 6000ms linear;
    -moz-transition: all 6000ms linear;
    -ms-transition: all 6000ms linear;
    -o-transition: all 6000ms linear;
    transition: all 6000ms linear;
    z-index: 1;
}


.main-slider .active .slide .image-layer {
    -webkit-transform: scale(1.15);
    -ms-transform: scale(1.15);
    transform: scale(1.15);
}

.main-slider .slide .image-layer:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: "";
    background-color: var(--thm-black);
    opacity: 0.70;
    z-index: -1;
}

.main-slider .content {
    position: relative;
    z-index: 11;
}

.main-slider .auto-container {
    position: relative;
}

.main-slider .active .slide .image-layer {
    -webkit-transform: scale(1.5);
    -ms-transform: scale(1.5);
    transform: scale(1.5);
}

.main-slider .slide {
    position: relative;
    display: block;
    padding-top: 198px;
    padding-bottom: 265px;
}

.main-slider .content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
}

.main-slider .sub-title {
    position: relative;
    display: block;
    opacity: 0;
    -webkit-transform: perspective(400px) rotateY(0deg) translateY(-80px);
    -ms-transform: perspective(400px) rotateY(0deg) translateY(-80px);
    transform: perspective(400px) rotateY(0deg) translateY(-80px);
    -webkit-transform-origin: bottom;
    -ms-transform-origin: bottom;
    transform-origin: bottom;
    -webkit-transition: all 1500ms ease;
    -moz-transition: all 1500ms ease;
    -ms-transition: all 1500ms ease;
    -o-transition: all 1500ms ease;
    transition: all 1500ms ease;
    z-index: 10;
}

.main-slider .active .sub-title {
    opacity: 1;
    -webkit-transform: perspective(400px) rotateY(0deg) translateY(0px);
    -ms-transform: perspective(400px) rotateY(0deg) translateY(0px);
    transform: perspective(400px) rotateY(0deg) translateY(0px);
    -webkit-transition-delay: 1500ms;
    -moz-transition-delay: 1500ms;
    -ms-transition-delay: 1500ms;
    -o-transition-delay: 1500ms;
    transition-delay: 1500ms;
}

.main-slider .sub-title h3 {
    color: var(--thm-primary);
    font-size: 26px;
    line-height: 34px;
    font-weight: 700;
    text-transform: none;
    font-family: var(--thm-font-2);
}



.main-slider .content .big-title {
    position: relative;
    display: block;
    margin-top: 22px;
    opacity: 0;
    -webkit-transform: perspective(400px) rotateY(20deg) translateY(80px);
    -ms-transform: perspective(400px) rotateY(20deg) translateY(80px);
    transform: perspective(400px) rotateY(20deg) translateY(80px);
    -webkit-transform-origin: bottom;
    -ms-transform-origin: bottom;
    transform-origin: bottom;
    -webkit-transition: all 1000ms ease;
    -moz-transition: all 1000ms ease;
    -ms-transition: all 1000ms ease;
    -o-transition: all 1000ms ease;
    transition: all 1000ms ease;
    z-index: 10;
}

.main-slider .active .content .big-title {
    opacity: 1;
    -webkit-transform: perspective(400px) rotateY(0deg) translateY(0px);
    -ms-transform: perspective(400px) rotateY(0deg) translateY(0px);
    transform: perspective(400px) rotateY(0deg) translateY(0px);
    -webkit-transition-delay: 1000ms;
    -moz-transition-delay: 1000ms;
    -ms-transition-delay: 1000ms;
    -o-transition-delay: 1000ms;
    transition-delay: 1000ms;
}

.main-slider .content .big-title h2 {
    color: #ffffff;
    font-size: 80px;
    line-height: 1.1em;
    font-weight: 800;
    text-transform: none;
}

.main-slider .content .big-title h2 span {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
}

.main-slider .content .big-title h2 span:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    height: 2px;
    background: var(--thm-primary);
}


.main-slider .content .btns-box {
    position: relative;
    display: block;
    overflow: hidden;
    width: 100%;
    line-height: 0;
    margin-top: 39px;
    opacity: 0;
    -webkit-transform: perspective(400px) rotateY(0deg) translateY(80px);
    -ms-transform: perspective(400px) rotateY(0deg) translateY(80px);
    transform: perspective(400px) rotateY(0deg) translateY(80px);
    -webkit-transform-origin: bottom;
    -ms-transform-origin: bottom;
    transform-origin: bottom;
    -webkit-transition: all 1500ms ease;
    -moz-transition: all 1500ms ease;
    -ms-transition: all 1500ms ease;
    -o-transition: all 1500ms ease;
    transition: all 1500ms ease;
    z-index: 10;
}

.main-slider .active .content .btns-box {
    opacity: 1;
    -webkit-transform: perspective(400px) rotateY(0deg) translateY(0px);
    -ms-transform: perspective(400px) rotateY(0deg) translateY(0px);
    transform: perspective(400px) rotateY(0deg) translateY(0px);
    -webkit-transition-delay: 2500ms;
    -moz-transition-delay: 2500ms;
    -ms-transition-delay: 2500ms;
    -o-transition-delay: 2500ms;
    transition-delay: 2500ms;
}

.main-slider .content .btns-box a {
    padding-left: 50px;
    padding-right: 50px;
}








/*=== Main Slider Nav Style=========*/
.main-slider .owl-theme .owl-nav {
    position: absolute;
    top: 50%;
    left: 0px;
    right: 0px;
    line-height: 0;
    height: 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    opacity: 0;
    transform: scaleX(1.0) translateX(0px);
    max-width: 1250px;
    width: 100%;
    margin: 0 auto;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    height: 150px;
    transition: all 500ms ease;
}

.main-slider:hover .owl-theme .owl-nav {
    opacity: 1;
    transform: scaleX(1.0) translateY(-50%);
}

.main-slider .owl-theme .owl-nav .owl-prev,
.main-slider .owl-theme .owl-nav .owl-next {
    position: relative;
    display: block;
    height: 70px;
    width: 70px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .20);
    border-radius: 50%;
    text-align: center;
    color: rgba(255, 255, 255, .20);
    font-size: 25px;
    line-height: 66px;
    font-weight: 100;
    opacity: 1;
    margin: 0;
    padding: 0;
    transform: translateY(0px);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.main-slider .owl-theme .owl-prev span,
.main-slider .owl-theme .owl-next span {
    display: block;
}

.main-slider .owl-theme .owl-prev span:before {
    transition: all 100ms ease;
}

.main-slider .owl-theme .owl-nav .owl-prev {
    transform: rotate(180deg);
}

.main-slider .owl-theme .owl-nav .owl-next {
    transform: rotate(0deg);
}

.main-slider .owl-theme .owl-nav .owl-prev:hover,
.main-slider .owl-theme .owl-nav .owl-next:hover {
    color: rgba(255, 255, 255, 1.0);
    border-color: rgba(255, 255, 255, 1.0);
}

.banner-carousel .owl-dots {
    display: block;
}








/*===== Main Slider Dot Style ====*/
.main-slider .banner-carousel.owl-carousel .owl-dots {
    position: absolute;
    top: 0;
    right: 70px;
    bottom: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    opacity: 0;
    transform: scaleX(1.0) translateX(0px);
    -webkit-transition: all 1500ms ease;
    -moz-transition: all 1500ms ease;
    -ms-transition: all 1500ms ease;
    -o-transition: all 1500ms ease;
    transition: all 1500ms ease;
    display: none;
}

.main-slider .banner-carousel.owl-carousel .owl-dots:before {
    content: "";
    position: absolute;
    top: auto;
    left: 6px;
    bottom: auto;
    width: 3px;
    height: 95px;
    background: #262626;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.main-slider:hover .banner-carousel.owl-carousel .owl-dots {
    opacity: 1;
    transform: scaleX(1.0) translateX(0px);
}

.main-slider .banner-carousel.owl-carousel button.owl-dot {
    position: relative;
    display: block;
    width: 15px;
    height: 15px;
    background: #262626;
    float: none;
    border-radius: 50%;
    margin: 20px 0px;
    -webkit-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;
    z-index: 1;
}

.main-slider .banner-carousel.owl-carousel button.owl-dot.active:before {
    transform: scaleX(1.0);
}

.main-slider .banner-carousel.owl-carousel button.owl-dot.active {
    background-image: -moz-linear-gradient(0deg, rgb(128, 183, 87) 0%, rgb(147, 188, 48) 40%, rgb(165, 193, 9) 100%);
    background-image: -webkit-linear-gradient(0deg, rgb(128, 183, 87) 0%, rgb(147, 188, 48) 40%, rgb(165, 193, 9) 100%);
    background-image: -ms-linear-gradient(0deg, rgb(128, 183, 87) 0%, rgb(147, 188, 48) 40%, rgb(165, 193, 9) 100%);
}



/*** 
=====================================================
	Main Slider style2 Css
=====================================================
***/
.main-slider.style2 {
    position: relative;
    display: block;
    background-color: #ffffff;
    padding-left: 200px;
}

.main-slider.style2 .slide {
    position: relative;
    display: block;
    padding-top: 198px;
    padding-bottom: 205px;
}

.main-slider.style2 .slide:after {
    position: absolute;
    top: 0;
    left: 0px;
    bottom: 0;
    right: 0;
    content: "";
    background: rgb(30, 50, 38);
    background: linear-gradient(90deg, rgba(30, 50, 38, 1) 0%, rgba(30, 50, 38, 1) 0%, rgba(7, 62, 156, 0.011642156862745057) 44%, rgba(0, 212, 255, 0) 45%);
    z-index: 1;
}

/*==============================================
    Main Header Css        
===============================================*/
.main-header {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    margin: 0px;
    z-index: 999;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
}

.sticky-header {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    padding: 0px 0px;
    background: rgba(255, 255, 255, 0.98);
    opacity: 0;
    visibility: hidden;
    transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    z-index: 0;
}

.fixed-header .sticky-header {
    visibility: visible;
    -ms-animation-name: fadeInDown;
    -moz-animation-name: fadeInDown;
    -op-animation-name: fadeInDown;
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -ms-animation-duration: 500ms;
    -moz-animation-duration: 500ms;
    -op-animation-duration: 500ms;
    -webkit-animation-duration: 500ms;
    animation-duration: 500ms;
    -ms-animation-timing-function: linear;
    -moz-animation-timing-function: linear;
    -op-animation-timing-function: linear;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -ms-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -op-animation-iteration-count: 1;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    opacity: 1;
    z-index: 999999;
}

.sticky-header .logo {
    position: relative;
    display: block;
    padding: 19px 0 19px;
}

.sticky-header .logo a {
    position: relative;
    display: inline-block;
}

.sticky-header .main-menu .navigation>li {
    margin-right: 35px;
}

.sticky-header .main-menu .navigation>li>a {
    color: var(--thm-black);
    padding: 38px 0px 39px;
}

.sticky-header .main-menu .navigation>li:hover>a,
.sticky-header .main-menu .navigation>li.current>a {
    color: var(--thm-base);
}

.sticky-header .main-menu .navigation>li>a span:before {
    display: none;
}

.sticky-header .main-menu .navigation>li>a:before {
    display: none;
}

.sticky-header .main-menu.style6 .navigation>li>a {
    color: var(--thm-black);
    padding: 38px 0px 38px;
}

.main-menu .navigation.scroll-nav>li:hover>a,
.main-menu .navigation.scroll-nav>li.current>a {
    color: var(--thm-base);
}



.header-style-one {
    position: relative;
}



.header-top {
    position: relative;
    display: block;
    background: var(--thm-black);
    z-index: 1;
}

.header-top .auto-container {
    max-width: 100%;
    padding: 0px 80px;
    padding-right: 0;
}

.header-top .outer-box {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}


.header-contact-info-style1 {
    position: relative;
    display: block;
}

.header-contact-info-style1 ul {
    position: relative;
    display: block;
    overflow: hidden;
}

.header-contact-info-style1 ul li {
    position: relative;
    display: flex;
    align-items: center;
    float: left;
    margin-right: 30px;
}

.header-contact-info-style1 ul li:last-child {
    margin-right: 0;
}

.header-contact-info-style1 ul li .icon {
    position: relative;
    display: block;
    width: 25px;
    line-height: 20px;
}

.header-contact-info-style1 ul li .icon span:before {
    position: relative;
    top: 1px;
    color: var(--thm-primary);
    font-size: 16px;
    transition: all 500ms ease;
}

.header-contact-info-style1 ul li:hover .icon span:before {
    color: #ffffff;
}

.header-contact-info-style1 ul li .text {
    position: relative;
    display: block;
}


.header-contact-info-style1 ul li .text p {
    color: #a5b9ad;
    font-size: 14px;
    line-height: 24px;
    font-weight: 600;
    margin: 0;
}

.header-contact-info-style1 ul li .text p a {
    color: #a5b9ad;
}

.header-contact-info-style1 ul li .text p a:hover {
    color: #ffffff;
}


.header-top__right {
    position: relative;
    display: block;
}

.header-button-style1 {
    position: relative;
    display: block;
    line-height: 0;
}




.header {
    position: relative;
    display: block;
    background: #ffffff;
    z-index: 1;
}

.header .auto-container {
    max-width: 100%;
    padding: 0px 0px;
    padding-right: 50px;
}

.header .outer-box {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}


.header-left {
    position: relative;
    display: flex;
    align-items: center;
}


.main-logo-box {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 265px;
    height: 110px;
    background-color: rgba(var(--thm-base-rgb), .10);
}

.main-logo-box a {
    position: relative;
    display: inline-block;
}



.header-social-link {
    position: relative;
    display: block;
    margin-left: 80px;
}

.header-social-link ul {}

.header-social-link ul li {
    position: relative;
    display: block;
    float: left;
    margin-right: 10px;
}

.header-social-link ul li:last-child {
    margin-right: 0;
}

.header-social-link ul li a {
    position: relative;
    display: block;
    height: 40px;
    width: 40px;
    background-color: rgba(var(--thm-base-rgb), .10);
    border-radius: 50%;
    color: var(--thm-black);
    font-size: 16px;
    font-weight: 600;
    line-height: 44px;
    text-align: center;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
}

.header-social-link ul li a:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: var(--thm-base);
    content: "";
    border-radius: 50%;
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.header-social-link ul li:hover a:before {
    transform: scaleX(1.0);
}

.header-social-link ul li:hover a {
    color: #ffffff;
}



.main-menu.style1 {}

.main-menu {
    position: relative;
    display: block;
    float: left;
}

.main-menu .navbar-collapse {
    padding: 0px;
    display: block !important;
}

.main-menu .navigation {
    position: inherit;
    display: block;
}

.main-menu .navigation>li {
    position: inherit;
    display: inline-block;
    float: left;
    margin-right: 40px;
}

.main-menu .navigation>li:last-child {
    margin-right: 0;
}

.main-menu .navigation>li>a {
    position: relative;
    display: flex;
    align-items: center;
    padding: 43px 0px 44px;
    color: #737c76;
    font-size: 16px;
    line-height: 20px;
    font-weight: 600;
    text-transform: capitalize;
    transition: all 500ms ease;
    font-family: var(--thm-font);
    opacity: 1;
    z-index: 1;
}

.main-menu .navigation>li>a span {
    position: relative;
    display: block;
    line-height: 20px;
    padding: 3px 10px 0;
    z-index: 1;
}

.main-menu .navigation>li>a span:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: var(--thm-base);
    z-index: -1;
    transform: scaleY(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.main-menu .navigation>li:hover>a span:before,
.main-menu .navigation>li.current>a span:before {
    transform: scaleY(1.0);
}

.main-menu .navigation>li:hover>a,
.main-menu .navigation>li.current>a {
    color: #ffffff;
}

.main-menu .navigation>li.dropdown>a {}

.main-menu .navigation>li.dropdown>a:after {
    position: absolute;
    right: 0px;
    font-family: Fontawesome;
    content: "\f107";
    font-size: 16px;
    font-weight: 600;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
    display: none;
}

.main-menu .navigation>li.dropdown:hover>a:after,
.main-menu .navigation>li.dropdown.current>a:after {
    transform: rotate(180deg);
}



.main-menu .navigation>li>ul {
    position: absolute;
    top: 100%;
    left: inherit;
    width: 270px;
    padding: 0px 0;
    opacity: 0;
    visibility: hidden;
    border-radius: 0px;
    -moz-transform: translateY(30px);
    -webkit-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
    transition: all 100ms ease;
    z-index: 100;
}

.main-menu .navigation>li>ul:before {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    content: '';
    background-color: var(--thm-base);
    border-radius: 0px;
    z-index: -1;
}

.main-menu .navigation>li>ul:after {
    position: absolute;
    top: -3px;
    left: 0px;
    right: 0;
    height: 3px;
    content: '';
    background: var(--thm-primary);
    border-radius: 0px;
    z-index: -1;
}

.main-menu .navigation>li.dropdown:hover>ul {
    opacity: 1;
    visibility: visible;
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
}

.main-menu .navigation>li>ul>li {
    position: relative;
    display: block;
    padding: 0 0px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.main-menu .navigation>li:hover>ul>li {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.main-menu .navigation>li>ul>li:nth-child(2n+1) {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+2) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+3) {
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+4) {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+5) {
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+6) {
    -webkit-transition-delay: 0.6s;
    transition-delay: 0.6s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+7) {
    -webkit-transition-delay: 0.7s;
    transition-delay: 0.7s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+8) {
    -webkit-transition-delay: 0.8s;
    transition-delay: 0.8s;
}

.main-menu .navigation>li>ul>li:nth-child(2n+9) {
    -webkit-transition-delay: 0.9s;
    transition-delay: 0.9s;
}


.main-menu .navigation>li>ul>li>a {
    position: relative;
    display: block;
    border-bottom: 1px dashed rgba(255, 255, 255, .20);
    padding: 15px 0px 15px;
    padding-left: 30px;
    padding-right: 10px;
    color: #ffffff;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    text-align: left;
    text-transform: capitalize;
    transition: all 500ms ease;
    letter-spacing: normal;
    font-family: var(--thm-font);
    z-index: 1;
}

.main-menu .navigation>li>ul>li:last-child>a {
    border: none;
}

.main-menu .navigation>li>ul>li>a:before {
    content: "";
    position: absolute;
    top: -1px;
    left: 0px;

    right: 0;
    bottom: -1px;
    background-color: var(--thm-black);
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
    -webkit-transform-origin: right center;
    transform-origin: right center;
    z-index: -1;
}

.main-menu .navigation>li>ul>li:hover>a:before {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    transform-origin: left center;
}

.main-menu .navigation>li>ul>li>a:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 30px;
    bottom: 15px;
    border-left: 5px solid #ffffff;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    transform: scaleY(0);
    transition: all 500ms ease;
}

.main-menu .navigation>li>ul>li:hover>a:after {
    transform: scaleY(1.0);
}

.main-menu .navigation>li>ul>li:hover>a {
    color: #ffffff;
    padding-left: 50px;
}

.main-menu .navigation>li>ul>li.dropdown {}

.main-menu .navigation>li>ul>li.dropdown:after {
    position: absolute;
    top: 0px;
    right: 30px;
    bottom: 0;
    font-family: FontAwesome;
    content: "\f105";
    color: #ffffff;
    font-size: 18px;
    font-weight: 400;
    margin: 13px 0;
    text-align: right;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 5;
}

.main-menu .navigation>li>ul>li.dropdown:hover:after {
    color: #ffffff;
}




.main-menu .navigation>li>ul>li>ul {
    position: absolute;
    top: 0%;
    left: 100%;
    width: 260px;
    padding: 0px 0;
    display: none;
    border-left: 0px solid transparent;
    padding-left: 10px;
    border-radius: 0px;
    -moz-transform: translateY(30px);
    -webkit-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
    transition: all 100ms ease;
    z-index: 100;
}

.main-menu .navigation>li>ul>li>ul:before {
    position: absolute;
    top: 0px;
    left: 10px;
    right: 0;
    height: 100%;
    content: '';
    background-color: var(--thm-base);
    border-radius: 0px;
    -webkit-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -o-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    z-index: -1;
}

.main-menu .navigation li>ul>li.dropdown:hover ul {
    opacity: 1;
    visibility: visible;
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
}

.main-menu .navigation>li>ul>li>ul>li {
    position: relative;
    display: block;
    padding: 0px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.main-menu .navigation>li>ul>li:hover>ul>li {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.main-menu .navigation>li>ul>li>ul>li:nth-child(2n+1) {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}

.main-menu .navigation>li>ul>li>ul>li:nth-child(2n+2) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}

.main-menu .navigation>li>ul>li>ul>li:nth-child(2n+3) {
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.main-menu .navigation>li>ul>li>ul>li:nth-child(2n+4) {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.main-menu .navigation>li>ul>li>ul>li:nth-child(2n+5) {
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
}


.main-menu .navigation>li>ul>li>ul>li>a {
    position: relative;
    display: block;
    border-bottom: 1px dashed rgba(255, 255, 255, .20);
    padding: 15px 0px 15px;
    padding-left: 30px;
    padding-right: 10px;
    color: #ffffff;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    text-align: left;
    text-transform: capitalize;
    transition: all 500ms ease;
    letter-spacing: normal;
    font-family: var(--thm-font);
    z-index: 1;
}

.main-menu .navigation>li>ul>li>ul>li:last-child>a {
    border: none;
}

.main-menu .navigation>li>ul>li>ul>li>a:before {
    content: "";
    position: absolute;
    top: -1px;
    left: 0px;
    right: 0;
    bottom: -1px;
    background-color: var(--thm-black);
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
    -webkit-transform-origin: right center;
    transform-origin: right center;
    z-index: -1;
}

.main-menu .navigation>li>ul>li>ul>li:hover>a:before {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    transform-origin: left center;
}

.main-menu .navigation>li>ul>li>ul>li>a:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 30px;
    bottom: 15px;
    border-left: 5px solid #ffffff;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    transform: scaleY(0);
    transition: all 500ms ease;
}

.main-menu .navigation>li>ul>li>ul>li:hover>a:after {
    transform: scaleX(1.0);
}

.main-menu .navigation>li>ul>li>ul>li:hover>a {
    color: #ffffff;
    padding-left: 50px;
}




/** Megamenu Style **/
.main-menu .navigation>li>.megamenu {
    position: absolute;
    top: 100%;
    left: -50px;
    right: -50px;
    padding: 20px 0;
    padding-right: 40px;
    opacity: 0;
    visibility: hidden;
    border-radius: 0px;
    border-top: 3px solid var(--thm-primary);
    -moz-transform: translateY(30px);
    -webkit-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
    transition: all 100ms ease;
    z-index: 100;
}

.main-menu .navigation>li>.megamenu:after {
    content: "";
    position: absolute;
    top: 40px;
    left: 50%;
    bottom: 40px;
    width: 1px;
    background: #ffffff;
    opacity: 0.10;
}

.main-menu .navigation>li>.megamenu .row {
    margin-right: 0px;
    margin-left: 0px;
}

.main-menu .navigation>li>.megamenu .row [class*=col-] {
    padding-left: 0px;
    padding-right: 0px;
}

.main-menu .navigation>li>.megamenu:before {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    content: '';
    background-color: var(--thm-base);
    border-radius: 0px;
    -webkit-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -ms-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -o-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.05), -2px 0px 5px 1px rgba(0, 0, 0, 0.05);
    z-index: -1;
}

.main-menu .navigation>li.dropdown:hover .megamenu {
    opacity: 1;
    margin-top: -3px;
    visibility: visible;
    -moz-transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
}

.main-menu .navigation>li>.megamenu li {
    position: relative;
    display: block;
    padding: 0 40px;
    padding-right: 0;
    width: 100%;
    opacity: 1;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.main-menu .navigation>li:hover .megamenu li {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}


/*****
.main-menu .navigation> li> .megamenu li:nth-child(2n+1) {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+2) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+3) {
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+4) {
    -webkit-transition-delay: 0.4s;
    transition-delay: 0.4s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+5) {
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
}

.main-menu .navigation> li> .megamenu li:nth-child(2n+6) {
    -webkit-transition-delay: 0.6s;
    transition-delay: 0.6s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+7) {
    -webkit-transition-delay: 0.7s;
    transition-delay: 0.7s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+8) {
    -webkit-transition-delay: 0.8s;
    transition-delay: 0.8s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+9) {
    -webkit-transition-delay: 0.9s;
    transition-delay: 0.9s;
}
.main-menu .navigation> li> .megamenu li:nth-child(2n+10) {
    -webkit-transition-delay: 0.10s;
    transition-delay: 0.10s;
}
****/

.main-menu .navigation>li>.megamenu li>a {
    position: relative;
    display: block;
    border-bottom: 1px dashed rgba(255, 255, 255, 0.20);
    padding: 15px 0px 15px;
    color: #ffffff;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    text-align: left;
    text-transform: capitalize;
    transition: all 500ms ease;
    letter-spacing: 0.03em;
    font-family: var(--thm-font);
}

.main-menu .navigation>li>.megamenu li:last-child a {
    border: none;
}

.main-menu .navigation>li>.megamenu li>a:before {
    content: "";
    position: absolute;
    top: -1px;
    left: 0px;
    right: 0;
    bottom: -1px;
    background-color: var(--thm-black);
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
    -webkit-transform-origin: right center;
    transform-origin: right center;
    z-index: -1;
}

.main-menu .navigation>li>.megamenu li:hover>a:before {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transform-origin: left center;
    transform-origin: left center;
}

.main-menu .navigation>li>.megamenu li:hover>a {
    color: #ffffff;
    padding-left: 40px;
}


.main-menu .navigation>li>.megamenu li>a:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 20px;
    bottom: 15px;
    border-left: 5px solid #ffffff;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    transform: scaleY(0);
    transition: all 500ms ease;
}

.main-menu .navigation>li>.megamenu li:hover>a:after {
    transform: scaleX(1.0);
}



.main-menu .navigation li.dropdown .megamenu li h4 {
    font-weight: 500;
    padding: 3px 0px;
    color: #fff;
}

.main-menu .navbar-collapse>ul li.dropdown .dropdown-btn {
    position: absolute;
    right: 0px;
    top: 0;
    width: 50px;
    height: 42px;
    border-left: 1px solid #04102a;
    text-align: center;
    font-size: 16px;
    line-height: 42px;
    color: #ffffff;
    cursor: pointer;
    display: none;
    z-index: 5;
}





.header-right {
    position: relative;
    display: flex;
    align-items: center;
}


.phone-number-box1 {
    position: relative;
    display: flex;
    align-items: center;
    margin-right: 50px;
}

.phone-number-box1 .icon {
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    background-color: rgba(var(--thm-base-rgb), .10);
    border-radius: 50%;
    z-index: 1;
}

.phone-number-box1 .icon:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 50%;
    background: var(--thm-black);
    content: "";
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.phone-number-box1:hover .icon:before {
    transform: scaleX(1.0);
}

.phone-number-box1 .icon span::before {
    position: relative;
    display: block;
    color: var(--thm-base);
    font-size: 25px;
    line-height: 60px;
    text-align: center;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.phone-number-box1:hover .icon span::before {
    color: #fff;
}


.phone-number-box1 .phone {
    position: relative;
    display: block;
    padding-left: 20px;
}

.phone-number-box1 .phone p {
    position: relative;
    display: block;
    top: 5px;
    font-size: 14px;
    line-height: 16px;
    font-weight: 500;
    margin: 0 0 3px;
}

.phone-number-box1 .phone a {
    position: relative;
    display: inline-block;
    color: var(--thm-black);
    font-size: 16px;
    line-height: 16px;
    font-weight: 700;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.phone-number-box1 .phone a:hover {
    color: var(--thm-primary);
}



/*==============================================
    Main Header Style2 Css        
===============================================*/
.header-style-two {
    position: relative;
}

.header-style2 {
    position: relative;
    display: block;
    background: #ffffff;
    z-index: 1;
}

.header-style2 .auto-container {
    max-width: 100%;
    padding: 0px;
    padding-left: 200px;
}

.header-style2 .outer-box {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    z-index: 1;
}

.header-style2 .outer-box::before {
    position: absolute;
    top: 0px;
    left: 367px;
    bottom: 0px;
    right: -100000px;
    background: #ebf1ed;
    content: "";
    z-index: -1;
}


.header-style2__left {
    position: relative;
    display: flex;
    align-items: center;
}

.main-logo-box-style2 {
    position: relative;
    display: block;
    margin-right: 120px;
}

.main-logo-box-style2 a {
    position: relative;
    display: inline-block;
}



.header-style2__middle {
    position: relative;
    display: block;
}

.header-style2__middle .main-menu .navigation>li>a {
    padding: 63px 0px 64px;
}



.header-style2__right {
    position: relative;
    display: block;
    padding-right: 50px;
}

/*** 
=============================================
    Footer area style
=============================================
***/
.bottom-parallax {
    position: relative;
    height: 670px;
    opacity: 0;
    z-index: -999;
}

.bottom-parallax .footer-area {
    position: fixed;
    left: 0px;
    bottom: 0px;
    right: 0px;
    height: 670px;
}

.parallax-visible .bottom-parallax {
    opacity: 1;
    z-index: 1;
}

.footer-area {
    position: relative;
    display: block;
    background: var(--thm-black);
    z-index: 10;
}

.footer-area-bg {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    max-width: 755px;
    width: 100%;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: top right;
    background-size: cover;
    background-color: var(--thm-black);
    background-blend-mode: luminosity;
}

.footer-area-bg:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0.95;
    background-color: var(--thm-black);
    transform: scale(1.0);
    transform-origin: bottom;
    transform-style: preserve-3d;
    transition: all 500ms ease 100ms;
}


.footer-top {
    position: relative;
    display: block;
    padding-top: 60px;
}

.subscribe-content-box {
    position: relative;
    display: block;
    overflow: hidden;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 31px 60px 31px;
}

.subscribe-title {
    position: relative;
    display: flex;
    align-items: center;
}

.subscribe-title .icon {
    position: relative;
    display: block;
    width: 80px;
}

.subscribe-title .icon span:before {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 60px;
    line-height: 60px;
}

.subscribe-title .inner-title {
    position: relative;
    display: block;
}

.subscribe-title .inner-title h3 {
    color: #ffffff;
    font-size: 20px;
    line-height: 30px;
    font-weight: 800;
}



.subscribe-box {
    position: relative;
    display: block;
    width: 100%;
}

.subscribe-form {
    position: relative;
    display: block;
    width: 100%;
}

.subscribe-form input[type="email"] {
    position: relative;
    display: block;
    padding-left: 0px;
    padding-right: 70px;
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    border-bottom: 2px solid rgba(255, 255, 255, 0.10);
    color: #a5b9ad;
    font-size: 16px;
    font-weight: 500;
    font-style: normal;
    transition: all 500ms ease;
    font-family: var(--thm-font);
}

.subscribe-form input::-webkit-input-placeholder {
    color: #a5b9ad;
}

.subscribe-form input:-moz-placeholder {
    color: #a5b9ad;
}

.subscribe-form input::-moz-placeholder {
    color: #a5b9ad;
}

.subscribe-form input:-ms-input-placeholder {
    color: #a5b9ad;
}

.subscribe-form button {
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    width: 50px;
    line-height: 50px;
    text-align: center;
    color: var(--thm-base);
    background: transparent;
    padding: 0;
    font-size: 25px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}



.footer {
    position: relative;
    display: block;
    overflow: hidden;
    padding-top: 60px;
    padding-bottom: 90px;
    z-index: 9;
}

.single-footer-widget {
    position: relative;
    display: block;
}

.single-footer-widget.margin-left40 {
    margin-left: 40px;
}

.single-footer-widget .title {
    position: relative;
    display: block;
    margin-top: -3px;
}

.single-footer-widget .title h3 {
    color: #ffffff;
    font-size: 20px;
    line-height: 24px;
    font-weight: 800;
    text-transform: capitalize;
}



.single-footer-widget .our-company-info {
    position: relative;
    display: block;
    max-width: 300px;
    width: 100%;
    padding-top: 22px;

}

.single-footer-widget .our-company-info .text-box {
    position: relative;
    display: block;
    padding-bottom: 26px;
}

.single-footer-widget .our-company-info .text-box p {
    color: #a5b9ad;
    font-size: 16px;
    line-height: 36px;
    font-weight: 500;
    margin: 0;
}



.footer-social-link {
    position: relative;
    display: block;
}

.footer-social-link ul {
    position: relative;
    display: block;
}

.footer-social-link ul li {
    position: relative;
    float: left;
    margin-right: 10px;
}

.footer-social-link ul li:last-child {
    margin-right: 0;
}

.footer-social-link ul li a {
    position: relative;
    display: block;
    height: 50px;
    width: 50px;
    background: var(--thm-base);
    border-radius: 50%;
    color: #ffffff;
    font-size: 15px;
    text-align: center;
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
}

.footer-social-link ul li a i::before {
    position: relative;
    display: inline-block;
    line-height: 50px;
}

.footer-social-link ul li a:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: var(--thm-primary);
    content: "";
    border-radius: 50%;
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.footer-social-link ul li:hover a:before {
    transform: scaleX(1.0);
}

.footer-social-link ul li:hover a {
    color: #ffffff;
}



.footer-widget-links {
    position: relative;
    display: block;
    overflow: hidden;
    padding-top: 27px;
}

.footer-widget-links ul {
    position: relative;
    display: block;
    overflow: hidden;
}

.footer-widget-links ul li {
    position: relative;
    display: block;
    line-height: 26px;
    margin-bottom: 15px;
}

.footer-widget-links ul li:last-child {
    margin-bottom: 0;
}

.footer-widget-links ul li a {
    position: relative;
    display: inline-block;
    color: #a5b9ad;
    font-size: 16px;
    font-weight: 500;
    font-family: var(--thm-font);
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.footer-widget-links ul li a:hover {
    color: #ffffff;
}

.footer-widget-links ul li a:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    height: 1px;
    transform: perspective(400px) scaleX(0);
    transform-origin: center;
    transition: all 300ms linear;
    transition-delay: 0.2s;
    background: var(--thm-primary);
    z-index: 1;
}

.footer-widget-links ul li a:hover:before {
    transform: perspective(400px) scaleX(1.0);
}




.single-footer-widget--contact-info-box {
    position: relative;
    display: block;
    max-width: 270px;
    width: 100%;
    float: right;
}

.footer-widget-contact-info {
    position: relative;
    display: block;
    padding-top: 27px;
}

.footer-widget-contact-info ul {
    position: relative;
    display: block;
}

.footer-widget-contact-info ul li {
    position: relative;
    display: block;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    margin-bottom: 17px;
    padding-bottom: 16px;
}

.footer-widget-contact-info ul li:last-child {
    margin-bottom: 0;
    padding-bottom: 0px;
    border-bottom: none;
}

.footer-widget-contact-info ul li .inner {
    position: relative;
    display: block;
    padding-left: 35px;
}

.footer-widget-contact-info ul li .inner .icon {
    position: absolute;
    top: 0;
    left: 1px;
    color: var(--thm-primary);
    font-size: 18px;
}

.footer-widget-contact-info ul li .inner .icon.phone {
    top: 2px;
}

.footer-widget-contact-info ul li .inner .icon.mapmarker {
    top: 2px;
    font-size: 18px;
}

.footer-widget-contact-info ul li .inner .text {
    position: relative;
    display: block;
}

.footer-widget-contact-info ul li .inner .text p {
    color: #a5b9ad;
    line-height: 26px;
    margin: 0;
}

.footer-widget-contact-info ul li .inner .text p a {
    color: #a5b9ad;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.footer-widget-contact-info ul li .inner .text p a:hover {
    color: var(--thm-primary);
}



.footer-bottom {
    position: relative;
    display: block;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}

.footer-bottom .bottom-inner {
    position: relative;
    display: block;
    text-align: center;
    padding: 29px 0px 30px;
}

.footer-bottom .bottom-inner .copyright {
    position: relative;
    display: block;
}

.footer-bottom .bottom-inner .copyright p {
    color: #a5b9ad;
    font-size: 16px;
    font-weight: 500;
    font-family: var(--thm-font);
    margin: 0;
}

.footer-bottom .bottom-inner .copyright p a {
    color: var(--thm-primary);
}

/*** 
=============================================
    service Style1 Area Css
=============================================
***/
.service-style1-area {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 120px 0 80px;
    z-index: 10;
}

.service-style1__bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 490px;
    background-attachment: scroll;
    background-repeat: no-repeat;
    background-position: top center;
    background-repeat: no-repeat;
    background-color: var(--thm-base);
    background-blend-mode: luminosity;
    z-index: -1;
}

.service-style1__bg:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: var(--thm-base);
    opacity: 0.95;
}


.service-style1__top {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-bottom: 44px;
}

.service-style1__top-title {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    max-width: 900px;
    width: 100%;
}

.service-style1__top-title .sec-title {
    padding: 0;
}

.service-style1__top-title .text {
    position: relative;
    display: block;
    max-width: 370px;
    width: 100%;
}

.service-style1__top-title .text p {
    color: rgba(255, 255, 255, 0.70);
    font-weight: 600;
    margin: 0;
}

.service-style1__top-button {
    position: relative;
    display: block;
    line-height: 0;
}



.single-service-style1 {
    position: relative;
    display: block;
    padding-bottom: 72px;
}

.single-service-style1:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 72px;
    right: 0;
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
}

.single-service-style1 .inner {
    position: relative;
    display: block;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid rgba(var(--thm-base-rgb), .10);
    padding: 48px 40px 60px;
    transition: all 500ms ease;
    z-index: 2;
}

.single-service-style1:hover .inner {
    border-color: var(--thm-primary);
}

.single-service-style1 .inner:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    background: var(--thm-primary);
    transform: perspective(400px) rotateY(90deg);
    transform-origin: left;
    transform-style: preserve-3d;
    transition: all 500ms linear;
    transition-delay: 0.1s;
}

.single-service-style1:hover .inner:before {
    opacity: 1;
    transform: perspective(400px) rotateY(0deg);
    transition: all 500ms linear;
    transition-delay: 0.1s;
}

.single-service-style1:hover .inner:before {
    opacity: 1.0;
    height: 100%;
    transform: scale(1.0);
    transition: all 800ms linear;
    transition-delay: 0.1s;
}

.single-service-style1 .inner .round-box {
    position: absolute;
    top: -105px;
    right: -105px;
    width: 215px;
    height: 215px;
    background: var(--thm-black);
    opacity: 0.10;
    border-radius: 50%;
    z-index: 1;
}

.single-service-style1 .icon {
    position: relative;
    display: block;
    margin-bottom: 17px;
    z-index: 2;
}

.single-service-style1 .icon span:before {
    position: relative;
    display: inline-block;
    color: var(--thm-base);
    font-size: 65px;
    line-height: 65px;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.single-service-style1:hover .icon span:before {
    color: var(--thm-black);
    transform: scale(1.1);
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.single-service-style1 .text {
    position: relative;
    display: block;
    z-index: 2;
}

.single-service-style1 .text h3 {
    font-size: 24px;
    line-height: 30px;
    margin: 0 0 22px;
}

.single-service-style1 .text p {
    margin: 0;
    transition: all 500ms ease;
}

.single-service-style1:hover .text p {
    color: var(--thm-black);
}

.single-service-style1 .btn-box {
    position: relative;
    float: right;
    margin-top: -32px;
    margin-right: 50px;
    z-index: 5;
}

.single-service-style1 .btn-box a {
    position: relative;
    display: block;
    width: 64px;
    height: 64px;
    background: #ffffff;
    border-radius: 50%;
    border: 2px solid rgba(var(--thm-base-rgb), .10);
    color: var(--thm-gray);
    font-size: 24px;
    line-height: 68px;
    text-align: center;
    z-index: 1;
}

.single-service-style1 .btn-box a:hover {
    color: #ffffff;
}

.single-service-style1 .btn-box a:before {
    position: absolute;
    top: -2px;
    left: -2px;
    bottom: -2px;
    right: -2px;
    background: var(--thm-black);
    content: "";
    border-radius: 50%;
    z-index: -1;
    transform: scale(0.0);
    transform-origin: center;
    transform-style: preserve-3d;
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
}

.single-service-style1 .btn-box a:hover:before {
    transform: scale(1.0);
}



/*** 
=============================================
    service Style2 Area Css
=============================================
***/
.service-style2-area {
    position: relative;
    display: block;
    padding: 120px 0 80px;
    background: #ffffff;
    z-index: 10;
}

.service-style2-area .gray-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 390px;
    background: #ebf1ed;
    z-index: -1;
}

.single-service-style2 {
    position: relative;
    display: block;
    margin-bottom: 40px;
}

.single-service-style2 .img-holder {
    position: relative;
    display: block;
    overflow: hidden;
}

.single-service-style2 .img-holder:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0.80;
    background-color: var(--thm-base);
    z-index: 1;
    transform: scale(0.0);
    transform-origin: bottom;
    transform-style: preserve-3d;
    transition: all 500ms ease 100ms;
}

.single-service-style2:hover .img-holder:before {
    transform: scale(1.0);
}

.single-service-style2 .img-holder .icon-box {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    color: #ffffff;
    font-size: 60px;
    background: var(--thm-base);
    transition: all 500ms ease;
    z-index: 2;
}

.single-service-style2:hover .img-holder .icon-box {
    color: var(--thm-black);
}

.single-service-style2 .img-holder .icon-box:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: var(--thm-primary);
    z-index: 1;
    transform: scale(0.0);
    transform-origin: top;
    transform-style: preserve-3d;
    transition: all 500ms ease 100ms;
    z-index: -1;
}

.single-service-style2:hover .img-holder .icon-box:before {
    transform: scale(1.0);
}



.single-service-style2 .img-holder img {
    width: 100%;
}


.single-service-style2 .text-holder {
    position: relative;
    display: block;
    border: 1px solid #cad7cf;
    border-top: none;
    padding: 33px 56px 43px;
}

.single-service-style2 .text-holder::before {
    position: absolute;
    left: 20px;
    bottom: -1px;
    right: 20px;
    height: 5px;
    background: var(--thm-base);
    content: "";
}

.single-service-style2 .text-holder::after {
    position: absolute;
    left: 20px;
    bottom: -1px;
    right: 20px;
    height: 5px;
    background: var(--thm-primary);
    content: "";
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    -webkit-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    -webkit-transform-origin: bottom;
    -ms-transform-origin: bottom;
    transform-origin: bottom;
}

.single-service-style2:hover .text-holder::after {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
}

.single-service-style2 .text-holder h3 {
    font-size: 24px;
    line-height: 34px;
    font-weight: 800;
    margin-bottom: 15px;
}

.single-service-style2 .text-holder h3 a {
    color: var(--thm-black);
}

.single-service-style2 .text-holder h3 a:hover {
    color: var(--thm-base);
}

.single-service-style2 .text-holder p {
    font-size: 18px;
    line-height: 34px;
    margin: 0;
}



/*** 
=============================================
    service Style3 Area Css
=============================================
***/
.service-style3-area {
    position: relative;
    display: block;
    padding: 120px 0 80px;
    background: #ffffff;
    z-index: 10;
}

.service-style3-area .container {
    position: relative;
}

.service-style3-area .container::before {
    position: absolute;
    top: -120px;
    left: 215px;
    bottom: -80px;
    right: -100000px;
    background: #ebf1ed;
    content: "";
    z-index: -1;
}

.service-style3__top {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-bottom: 44px;
}

.service-style3__top .sec-title {
    position: relative;
    display: block;
    padding: 0;
}

.service-style3__top .text {
    position: relative;
    top: -4px;
    display: block;
    max-width: 370px;
    width: 100%;
}

.service-style3__top .text p {
    margin: 0;
}

.service-style3-area .single-service-style1 {
    padding: 0;
    margin-bottom: 40px;
}

.service-style3-area .single-service-style1:before {
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}

.service-style3-area .single-service-style1 .text h3 {
    margin: 0;
}

.service-style3-area .single-service-style1 .inner {
    padding: 48px 40px 40px;
}

.service-style3-area .single-service-style1 .inner .round-box {
    transform: scale(0);
    transition: all 300ms linear;
    transition-delay: 0.1s;
}

.service-style3-area .single-service-style1:hover .inner .round-box {
    transform: scale(1.0);
}



/*** 
=============================================
    Service Details Area Css
=============================================
***/
.service-details-area {
    position: relative;
    display: block;
    background: #ffffff;
    padding: 120px 0px 120px;
    z-index: 10;
}

.service-details__sidebar {
    position: relative;
    display: block;
    max-width: 370px;
    width: 100%;
}

.view-all-service {
    position: relative;
    display: block;
}

.view-all-service .service-pages {
    position: relative;
    display: block;
}

.view-all-service .service-pages li {
    position: relative;
    display: block;
    margin-bottom: 10px;
}

.view-all-service .service-pages li:last-child {
    margin-bottom: 0px;
}

.view-all-service .service-pages li a {
    position: relative;
    display: block;
    background: #ebf1ed;
    padding: 0px 40px 0px;
    color: var(--thm-black);
    font-size: 16px;
    font-weight: 700;
    line-height: 60px;
    font-family: var(--thm-font);
    transition: all 200ms linear;
    transition-delay: 0.1s;
    z-index: 1;
}

.view-all-service .service-pages li a span {
    position: relative;
    display: block;
    color: #cbd7cf;
    font-size: 20px;
    font-weight: 700;
    float: right;
    line-height: 60px;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.view-all-service .service-pages li.active a span,
.view-all-service .service-pages li:hover a span {
    color: var(--thm-black);
}

.view-all-service .service-pages li a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: var(--thm-primary);
    transform: perspective(400px) scaleY(0);
    transform-origin: center;
    transition: all 300ms linear;
    transition-delay: 0.1s;
    z-index: -1;
}

.view-all-service .service-pages li:hover a::before,
.view-all-service .service-pages li.active a::before {
    transform: perspective(400px) scaleY(1.0);
}



.service-details-contact-info {
    position: relative;
    display: block;
    background: var(--thm-base);
    padding: 60px 65px 55px;
    margin-top: 30px;
}

.service-details-contact-info .top-box {
    position: relative;
    display: block;
    margin-bottom: 48px;
}

.service-details-contact-info .top-box .icon {
    position: relative;
    display: block;
    width: 80px;
    height: 80px;
    background: var(--thm-primary);
    border-radius: 50%;
    text-align: center;
    color: var(--thm-black);
    font-size: 25px;
    margin: 0 auto 25px;
}

.service-details-contact-info .top-box .icon span::before {
    position: relative;
    display: inline-block;
    line-height: 80px;
}

.service-details-contact-info .top-box h2 {
    color: #ffffff;
    font-size: 36px;
    line-height: 40px;
    font-weight: 700;
}


.service-details-contact-info .bottom-box {
    position: relative;
    display: block;
    padding-top: 44px;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}

.service-details-contact-info .bottom-box p {
    color: rgba(255, 255, 255, 0.70);
    font-size: 16px;
    line-height: 26px;
    font-weight: 600;
    margin: 0;
}

.service-details-contact-info .bottom-box h2 {
    font-size: 24px;
    line-height: 26px;
    font-weight: 800;
    margin-top: 11px;
}

.service-details-contact-info .bottom-box h2 a {
    color: #ffffff;
}

.service-details-contact-info .bottom-box h2 a:hover {
    color: var(--thm-primary);
}



.service-details__content {
    position: relative;
    display: block;
}

.service-details__content .img-box1 {
    position: relative;
    display: block;
    overflow: hidden;
}

.service-details__content .img-box1::after {
    position: absolute;
    top: 0;
    left: -100%;
    content: '';
    width: 50%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
    transform: skewX(-25deg);
    z-index: 2;
}

.service-details__content .img-box1:hover::after {
    -webkit-animation: shine 1.5s;
    animation: shine 1.5s;
}

@-webkit-keyframes shine {
    100% {
        left: 125%;
    }
}

@keyframes shine {
    100% {
        left: 125%;
    }
}







.service-details__content .img-box1 img {
    width: 100%;
}

.service-details__content .text-box1 {
    position: relative;
    display: block;
    margin-top: 42px;
}

.service-details__content .text-box1 h2 {
    font-size: 34px;
    line-height: 44px;
    font-weight: 800;
    margin-bottom: 17px;
}

.service-details__content .text-box1 p {
    font-size: 18px;
    line-height: 34px;
    margin: 0;
}

.service-details__content .text-box2 {
    position: relative;
    display: block;
    margin-top: 48px;
    margin-bottom: 50px;
}

.service-details__content .text-box2 .text-box2-single {
    position: relative;
    display: block;
    border: 1px solid #cad7cf;
    padding: 21px 30px 17px;
}

.service-details__content .text-box2 .text-box2-single h4 {
    font-size: 18px;
    line-height: 28px;
    font-weight: 600;
}

.service-details__content .text-box2 .text-box2-single h4 span::before {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 20px;
    top: 2px;
    padding-right: 7px;
}



.service-details__content .text-box3 {
    position: relative;
    display: block;
}

.service-details__content .text-box3 p {
    font-size: 18px;
    line-height: 34px;
    margin: 0;
}



.service-details__content .text-box4 {
    position: relative;
    display: block;
    margin-top: 48px;
}

.service-details__content .text-box4 .img-box {
    position: relative;
    display: block;
}

.service-details__content .text-box4 .img-box img {
    width: 100%;
}

.service-details__content .text-box4 .content-box {
    position: relative;
    display: block;
    margin-top: -7px;
}

.service-details__content .text-box4 .content-box h2 {
    font-size: 30px;
    line-height: 40px;
    font-weight: 800;
    margin-bottom: 20px;
}

.service-details__content .text-box4 .content-box p {
    font-size: 20px;
    line-height: 34px;
    margin: 0;
}



.service-details__content .text-box4 .content-box ul {
    position: relative;
    display: block;
    margin-top: 33px;
}

.service-details__content .text-box4 .content-box ul li {
    position: relative;
    display: block;
    margin-bottom: 18px;
}

.service-details__content .text-box4 .content-box ul li:last-child {
    margin-bottom: 0;
}

.service-details__content .text-box4 .content-box ul li h4 {
    font-size: 18px;
    line-height: 28px;
    font-weight: 600;
}

.service-details__content .text-box4 .content-box ul li h4 span::before {
    position: relative;
    display: inline-block;
    color: var(--thm-primary);
    font-size: 20px;
    top: 2px;
    padding-right: 7px;
}

/*** 
=============================================
    Location Info Area Css
=============================================
***/
.location-info-area {
    position: relative;
    display: block;
    background: #f5f5f5;
    padding: 120px 0 80px;
    z-index: 10;
}

.single-location-info-box {
    position: relative;
    display: block;
    margin-bottom: 40px;
}

.single-location-info-box .img-holder {
    position: relative;
    display: block;
}

.single-location-info-box .img-holder .inner {
    position: relative;
    display: block;
    overflow: hidden;
    border-radius: 10px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    z-index: 1;
}

.single-location-info-box .img-holder .inner:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    background: var(--thm-black);
    transform: scale(1.0);
    transform-origin: bottom;
    transform-style: preserve-3d;
    transition: all 500ms ease 100ms;
    z-index: 2;
}

.single-location-info-box .img-holder .inner img {
    width: 100%;
    transform: scale(1.0);
    transition: all 700ms ease;
}

.single-location-info-box:hover .img-holder .inner:before {
    opacity: 0.80;
    transform: scale(1.0);
}

.single-location-info-box .img-holder .flag {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 70px;
    height: 40px;
    overflow: hidden;
    border-radius: 7px;
    z-index: 2;
}

.single-location-info-box .img-holder .flag img {
    width: 100%;
}



.single-location-info-box .title-holder {
    position: relative;
    display: block;
    background: #ffffff;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.06);
    padding: 25px 30px 39px;
    z-index: 1;
}

.single-location-info-box .title-holder h3 {
    font-size: 24px;
    line-height: 30px;
    font-weight: 500;
    margin: 0 0 13px;
    transition: all 200ms linear;
    transition-delay: 0.1s;
}

.single-location-info-box .title-holder ul {
    position: relative;
    display: block;
}

.single-location-info-box .title-holder ul li {
    position: relative;
    display: block;
    padding-left: 100px;
    margin-bottom: 14px;
}

.single-location-info-box .title-holder ul li:last-child {
    margin-bottom: 0;
}

.single-location-info-box .title-holder ul li .inner-title {
    position: absolute;
    top: 4px;
    left: 0;
}

.single-location-info-box .title-holder ul li .inner-title h5 {
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
}

.single-location-info-box .title-holder ul li .inner-text {
    position: relative;
    display: block;
}

.single-location-info-box .title-holder ul li .inner-text p {
    margin: 0;
}

.single-location-info-box .title-holder ul li .inner-text p a {
    color: var(--thm-gray);
    transition: all 500ms ease;
}

.single-location-info-box .title-holder ul li .inner-text p a:hover {
    color: var(--thm-base);
}


.single-location-info-box .title-holder ul li .inner-text .social-links {
    position: relative;
    display: block;
}

.single-location-info-box .title-holder ul li .inner-text .social-links a {
    position: relative;
    display: inline-block;
    color: var(--thm-gray);
    font-size: 18px;
    transition: all 500ms ease;
}

.single-location-info-box .title-holder ul li .inner-text .social-links a+a {
    margin-left: 15px;
}

.single-location-info-box .title-holder ul li .inner-text .social-links a:hover {
    color: var(--thm-base);
}



    </style>

</body>

</html>
