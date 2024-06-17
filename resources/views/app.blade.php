<!DOCTYPE html>
<!--
Template Name: Pinkman - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <style>
        /* @font-face {
            font-family: 'iskpota';
            src: url('{{ public_path() }}/fonts/your-font.ttf') format('truetype')
        }

        body {
            font-family: 'your-font', sans-serif;
        } */
    </style>
    {{-- <meta charset="UTF-8" /> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Wollo</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Lightgallery CSS -->
    <link href="{{ asset('assets/dist/css/lightgallery.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css"> --}}
    <link href="{{ asset('assets/dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/src/scss/style.scss') }}" rel="stylesheet" type="text/scss">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- Preloader -->
    {{-- <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div> --}}
    <!-- /Preloader -->

    <!-- HK Wrapper -->


    <div class="hk-wrapper hk-alt-nav hk-landing">
        {{-- bg-white --}}
        {{-- #00599c --}}
        <div class="fixed-top  shadow-sm " style=" background-color:#00599c">
            <div class="container px-0">
                {{-- navbar-light --}}
                <nav class="navbar navbar-expand-xl navbar-light  hk-navbar hk-navbar-alt shadow-none"
                    style=" background-color:#00599c">
                    <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);"
                        data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i
                                data-feather="menu"></i></span></a>
                    <a class="navbar-brand" href="">
                        <img class="brand-img d-inline-block align-top " src="{{ asset('assets/dist/img/Wollo.png') }}"
                            style="width:auto; height:100px" alt="Wollo University logo" />
                    </a>
                    {{-- <h1 class="text-white font-24 font-weight-600 ml-50 " style="">ወሎ ዩኒቨርሲቲ</h1> --}}

                    <div class="collapse navbar-collapse ml-auto" id="navbarCollapseAlt">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link text-white" data-scroll href="{{ route('login') }}">Login </a>

                                {{-- <div class="btn-group">
                                    <button type="button" class="btn btn-light">Login as</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('login') }}">የሰው ኃይል</a>
                                        <a class="dropdown-item" href="#">ፕሬዚዳንት</a>

                                    </div>
                                </div> --}}
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')

        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Developed by<a href="" class="text-dark" target="_blank">Yonas T.(Tel:+251953464171)
                                ,Eyob B. & Emebet
                                T.</a> ©
                            2023</p>
                    </div>
                    {{-- <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="https://www.facebook.com/AASTU.et/"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#"
                            class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                    </div> --}}
                </div>
            </footer>
        </div>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->


    <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('assets/dist/js/feather.min.js') }}"></script>

    <!-- Gallery JavaScript -->
    <script src="{{ asset('assets/vendors/lightgallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/froogaloop2.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('assets/dist/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('assets/dist/js/landing-data.js') }}"></script>
    <script src="{{ asset('assets/dist/js/init.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script> --}}


    <style>
        .form-section {
            display: none;
        }

        .form-section.current {
            display: inline;
        }

        .parsley-errors-list {
            color: red;
            border-color: red;

        }

        .hide {
            display: none;
        }

        .myDIV:hover+.hide {
            display: block;
            color: red;
        }
    </style>

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
</body>
@yield('javascript')

</html>
