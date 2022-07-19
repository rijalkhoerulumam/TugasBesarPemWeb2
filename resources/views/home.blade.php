
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>{!! $title !!}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('style/assets/images/favicon.png" type="image/png') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/slick.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/LineIcons.css') }}">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/materialdesignicons.min.css') }}">

    <!--====== Jquery Ui CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/jquery-ui.min.css') }}">

    <!--====== nice select CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/nice-select.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">

</head>

<body>

    <!--====== Preloader Part Start ======-->
    <!--div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!--====== Preloader Part Ends ======-->

    <!--====== Navbar Style 7 Part Start ======-->
    <div class="navigation">
        <header class="navbar-style-7 position-relative">
            <div class="container">
                <!-- navbar mobile Start -->
                <div class="navbar-mobile d-lg-none">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class="navbar-search mt-15 search-style-5">
                        <div class="search-select">
                            <select>
                                <option value="">All</option>
                                <option value="1">option 01</option>
                                <option value="2">option 02</option>
                                <option value="3">option 03</option>
                                <option value="4">option 04</option>
                                <option value="5">option 05</option>
                            </select>
                        </div>
                        <div class="search-input">
                            <input type="text" placeholder="Search">
                        </div>
                        <div class="search-btn">
                            <button><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class="navbar-container navbar-sidebar-7">
                <!-- navbar close  Ends -->
                <div class="navbar-close d-lg-none">
                    <a class="close-mobile-menu-7" href="javascript:void(0)"><i class="mdi mdi-close"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class="navbar-top-wrapper">
                    <div class="container-lg">
                        <div class="navbar-top d-lg-flex justify-content-between">
                            <!-- navbar top left Start -->
                            <div class="navbar-top-left">
                                <ul class="navbar-top-link">
                                    <li><a href="about-page.html">About</a></li>
                                    <li><a href="contact-page.html">Contact</a></li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-phone-in-talk"></i>
                                            +628161700621
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class="navbar-top-right">
                                <ul class="navbar-top-link">
                                    <li>
                                        <select>
                                            <option value="0">Rp RUPIAH</option>
                                            <option value="1">$ USD</option>
                                            <option value="2">€ EURO</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="0">Indonesia</option>
                                            <option value="2">English</option>
                                        </select>
                                    </li>
                                    <li><a href="login-page.html"><i class="mdi mdi-account"></i>Login</a></li>
                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class="navbar-wrapper">
                    <div class="container-lg">
                        <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
                            <div class="navbar-menu">
                                <ul class="main-menu">
                                    <li><a href="category.html">Sepatu Olahraga</a></li>
                                    <li><a href="category.html">Pakaian Olahraga</a></li>
                                    <li><a href="category.html">Bola</a></li>
                                    <li><a href="category.html">Lainnnya</a></li>
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class="navbar-search-cart d-none d-lg-flex">
                                <!-- navbar search start -->
                                <div class="navbar-search search-style-5">
                                    <div class="search-input">
                                        <input type="text" placeholder="Search">
                                    </div>
                                    <div class="search-btn">
                                        <button><i class="lni lni-search-alt"></i></button>
                                    </div>
                                </div>
                                <!-- navbar search Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class="overlay-7"></div>
        </header>
    </div>
    <!--====== Navbar Style 7 Part Ends ======-->

    <!--====== Product Style 1 Part Start ======-->
    <section class="product-wrapper pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-700">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>                     
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">                        
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                Rp 250.000
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product Style 1 Part Ends ======-->

    <!--====== Product Style 7 Part Start ======-->
    <section class="product-wrapper pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-700">Recent Items</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                            </ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                            </ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                            </ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta"></ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta">
                            </ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-style-7 mt-30">
                        <div class="product-image">                            
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="#" alt="">
                                </div>
                                <div class="product-item">
                                    <img src="#" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <ul class="product-meta"></ul>
                            <h4 class="title"><a href="product-details-page.html">Sample</a></h4>
                            <span class="price">Rp 250.000</span>
                            <a href="javascript:void(0)" class="main-btn primary-btn">
                                <img src="assets/images/icon-svg/cart-4.svg" alt="">
                                Beli
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product Style 7 Part Ends ======-->

    <!--====== Clients Logo Part Start ======-->
    <section class="clients-logo-section pt-70 pb-70">
        <div class="container">
            <div class="row client-logo-active">
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/uideck-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/graygrids-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/lineicons-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="assets/images/client-logo/pagebulb-logo.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== Footer Style 3 Part Start ======-->
    <section class="footer-style-3 pt-100 pb-100">
        <div class="container">
            <div class="footer-top">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7 col-sm-10">
                        <div class="footer-logo text-center">
                            <a href="index.html">
                                <img src="assets/images/logo.svg" alt="">
                            </a>
                        </div>
                        <h5 class="heading-5 text-center mt-30">Follow Us</h5>
                        <ul class="footer-follow text-center">
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
                 
            <div class="footer-copyright text-center">
                <p>Developed by <a href="#" rel="nofollow" target="_blank">???</a>. Basesd on <a href="#" rel="nofollow" target="_blank">????</a>
                </p>
        </div>
    </section>
    <!--====== Footer Style 3 Part Ends ======-->

    <!--====== Bootstrap 5 js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="assets/js/jquery-vj-accordion-steps.js"></script>

    <!--====== Jquery Ui js ======-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!--====== Form validator js ======-->
    <script src="assets/js/jquery.form-validator.min.js"></script>

    <!--====== nice select js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== formatter js ======-->
    <script src="assets/js/jquery.formatter.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/count-up.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
