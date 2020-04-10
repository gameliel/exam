<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thememine.net/themeforest/examin/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Mar 2020 01:33:46 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>my exam system</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="../../../fonts.googleapis.com/cssd2d5.css?family=Open+Sans" rel="stylesheet">
    <link href="../../../fonts.googleapis.com/css6e13.css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-two-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <span><i class="fas fa-map"></i> Address</span>Alhaji main Estate
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open"></i> Email</span>Info@codewithibiso.com
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i> Contact</span>+234 902 619 0497
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                @guest
                    <a href="{{ route('login')}}">
                        <i class="fas fa-user"></i> Login
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register')}}">
                        <i class="fas fa-edit"></i> Register
                    </a>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                </li>
                @endguest
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- End Header -->
@yield('content')
<!-- Start Footer 
    ============================================= -->
    <footer>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">simvic</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from thememine.net/themeforest/examin/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Mar 2020 01:37:36 GMT -->
</html>