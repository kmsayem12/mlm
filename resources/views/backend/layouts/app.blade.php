<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <!-- <link rel="stylesheet" href="{{ asset('backend/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all"> -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/jquery.mCustomScrollbar.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custome.css') }}">
</head>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('backend.layouts.nav')
            

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('backend.layouts.sidebar')
                    <div class="pcoded-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('backend/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- slimscroll js -->
    <script src="{{ asset('backend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- menu js -->
    <script src="{{ asset('backend/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vertical/vertical-layout.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('backend/assets/js/script.js') }}"></script>
</body>
</html>
