<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Add site Favicon -->
    <link rel="icon" href="assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/cropped-favicon-270x270.png" />

    <!-- All CSS is here
 ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="assets/css/plugins/slinky.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <div class="main-wrapper main-wrapper-2">
        <header class="header-area header-responsive-padding header-height-1">
            <div class="header-top d-none d-lg-block bg-gray">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="welcome-text">
                                <p>Default Welcome Msg! </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="language-currency-wrap">
                                <div class="currency-wrap border-style">
                                    <a class="currency-active" href="#">$ Dollar (US) <i
                                            class=" ti-angle-down "></i></a>
                                    <div class="currency-dropdown">
                                        <ul>
                                            <li><a href="#">Taka (BDT) </a></li>
                                            <li><a href="#">Riyal (SAR) </a></li>
                                            <li><a href="#">Rupee (INR) </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="language-wrap">
                                    <a class="language-active" href="#"><img src="assets/images/icon-img/flag.png"
                                            alt=""> English <i class=" ti-angle-down "></i></a>
                                    <div class="language-dropdown">
                                        <ul>
                                            <li><a href="#"><img src="assets/images/icon-img/flag.png"
                                                        alt="">English </a></li>
                                            <li><a href="#"><img src="assets/images/icon-img/spanish.png"
                                                        alt="">Spanish</a></li>
                                            <li><a href="#"><img src="assets/images/icon-img/arabic.png"
                                                        alt="">Arabic </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom sticky-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="/">HOME</a>
                                            <ul class="sub-menu-style">
                                                <li><a href="index.html">Home version 1 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/shop">МАГАЗИН</a>
                                            <ul class="mega-menu-style mega-menu-mrg-1">
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <a class="dropdown-title" href="#">Shop Layout</a>
                                                            <ul>
                                                                <li><a href="shop.html">standard style</a></li>
                                                                <li><a href="shop-sidebar.html">shop grid sidebar</a>
                                                                </li>
                                                                <li><a href="shop-list.html">shop list style</a></li>
                                                                <li><a href="shop-list-sidebar.html">shop list
                                                                        sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html">shop right
                                                                        sidebar</a></li>
                                                                <li><a href="shop-location.html">store location</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-title" href="#">Products
                                                                Layout</a>
                                                            <ul>
                                                                <li><a href="product-details.html">tab style 1</a></li>
                                                                <li><a href="product-details-2.html">tab style 2</a>
                                                                </li>
                                                                <li><a href="product-details-gallery.html">gallery
                                                                        style </a></li>
                                                                <li><a href="product-details-affiliate.html">affiliate
                                                                        style</a></li>
                                                                <li><a href="product-details-group.html">group
                                                                        style</a></li>
                                                                <li><a href="product-details-fixed-img.html">fixed
                                                                        image style </a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="shop.html"><img
                                                                    src="assets/images/banner/menu.png"
                                                                    alt=""></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PAGES</a>
                                            <ul class="sub-menu-style">
                                                <li><a href="about-us.html">about us </a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout </a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="wishlist.html">wishlist </a></li>
                                                <li><a href="compare.html">compare </a></li>
                                                <li><a href="contact-us.html">contact us </a></li>
                                                <li><a href="login-register.html">login / register </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">BLOG</a>
                                            <ul class="sub-menu-style">
                                                <li><a href="blog.html">blog standard </a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">ABOUT</a></li>
                                        <li><a href="contact-us.html">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="header-action-wrap">
                                <div class="header-action-style header-search-1">
                                    <a class="search-toggle" href="#">
                                        <i class="pe-7s-search s-open"></i>
                                        <i class="pe-7s-close s-close"></i>
                                    </a>
                                    <div class="search-wrap-1">
                                        <form action="#">
                                            <input placeholder="Search products…" type="text">
                                            <button class="button-search"><i class="pe-7s-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-action-style">
                                    <a title="Login Register" href="login-register.html"><i
                                            class="pe-7s-user"></i></a>
                                </div>
                                <div class="header-action-style">
                                    <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="header-action-style header-action-cart">
                                    <a class="cart-active" href="#"><i class="pe-7s-shopbag"></i>
                                        <span class="product-count bg-black">01</span>
                                    </a>
                                </div>
                                <div class="header-action-style d-block d-lg-none">
                                    <a class="mobile-menu-active-button" href="#"><i
                                            class="pe-7s-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="footer-area">
            <div class="bg-gray-2">
                <div class="container">
                    <div class="footer-top pt-80 pb-35">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-about mb-40">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/logo.png"
                                                alt="logo"></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, cons adipi elit, sed do eiusmod tempor incididunt ut
                                        aliqua.</p>
                                    <div class="payment-img">
                                        <a href="#"><img src="assets/images/icon-img/payment.png"
                                                alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <h3 class="footer-title">Information</h3>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-list mb-40">
                                    <h3 class="footer-title">My Accound</h3>
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Order History</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-widget-margin-2 footer-address mb-40">
                                    <h3 class="footer-title">Get in touch</h3>
                                    <ul>
                                        <li><span>Address: </span>Your address goes here </li>
                                        <li><span>Telephone Enquiry:</span> (012) 345 6789</li>
                                        <li><span>Email: </span>demo@example.com</li>
                                    </ul>
                                    <div class="open-time">
                                        <p>Open : <span>8:00 AM</span> - Close : <span>18:00 PM</span></p>
                                        <p>Saturday - Sunday : Close</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-3">
                <div class="container">
                    <div class="footer-bottom copyright text-center bg-gray-3">
                        <p>Copyright ©2021 All rights reserved | Made with <i class="fa fa-heart"></i> by <a
                                href="https://hasthemes.com/"> HasThemes</a>.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- All JS is here -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/counterup.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/slinky.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
