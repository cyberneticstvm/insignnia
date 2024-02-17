<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <title>Insignnia Projects</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/timepickers.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="home-six onepage">
    <!-- header style two -->

    @include("header")

    @yield("content")

    <!-- Footer two -->
    <!-- footer style three start -->
    <div class="rts-footer-area-start fooetr-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="left-footer-wrapper-3 pt--120 pb--80">
                        <h3 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            Let's Build Something <br>
                            Great Together!
                        </h3>
                        <div class="button-group-footer" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800">
                            <a href="#" class="rts-btn btn-primary">Get started</a>
                            <a href="contact.html" class="rts-btn btn-seconday">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="right-footer-wrapper-3 pt--120 pb--80 pl--120 pr--120 pl_md--0 pt_md--30 pl_sm--0 pt_sm--30">
                        <div class="single-information">
                            <h5 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                Address
                            </h5>
                            <a href="#" class="address" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" style="display: block;">
                                Reg No. 20/224<br>
                                K.S Road, Kovalam PO<br>
                                Trivandrum
                            </a>
                            <div class="rts-social-wrapper-three">
                                <ul>
                                    <li data-sal="slide-up" data-sal-delay="100" data-sal-duration="800"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li data-sal="slide-up" data-sal-delay="200" data-sal-duration="800"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li data-sal="slide-up" data-sal-delay="300" data-sal-duration="800"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li data-sal="slide-up" data-sal-delay="400" data-sal-duration="800"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-information">
                            <h5 class="title" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                                Say Hello
                            </h5>
                            <a href="mailto:insignniahomes@gmail.com" class="mail" data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" style="display: block;">
                                insignniahomes@gmail.com
                            </a>
                            <a href="tel:+18475555555" class="number" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800" style="display: block;">
                                +91 9633557955
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-three">
                        <div class="menu-area-copyright">
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="project.html">Project</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="condition">
                            <ul>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer style three end -->
    <!-- Footer two End -->

    <!-- header style two -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>


    <div id="anywhere-home" class="">
    </div>

    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->



    <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/twinmax.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('assets/js/plugins/text-plugins.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ asset('assets/js/vendor/jquery.nav.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <!-- jquery ui js -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- timepickers -->
    <script src="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.js"></script>
    <!-- sal animation -->
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- swip image -->
    <script src="{{ asset('assets/js/plugins/swip-img.js') }}"></script>
    <!-- header style two End -->
</body>

</html>