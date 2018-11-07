<!DOCTYPE html>
<htm-l>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="template language" name="keywords">
        <meta content="Tamerlan Soziev" name="author">
        <meta content="Admin dashboard html template" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="http://52.163.186.214/frontend/img/logo.png" rel="shortcut icon">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/main.css?version=4.4.0') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body class="menu-position-side menu-side-left full-screen">
        <div class="all-wrapper solid-bg-all">
            <div class="layout-w">
                <!--START - Mobile Menu-->
                <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                    <div class="mm-logo-buttons-w">
                        <a class="mm-logo" href="index.html"><img src="http://52.163.186.214/frontend/img/logo.png"><span>ACV</span></a>
                        <div class="mm-buttons">
                            <div class="content-panel-open">
                                <div class="os-icon os-icon-grid-circles"></div>
                            </div>
                            <div class="mobile-menu-trigger">
                                <div class="os-icon os-icon-hamburger-menu-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-and-user"> 
                    </div>
                </div>
                <!--END - Mobile Menu-->

                <!--START - Main Menu-->
                @include('layouts.backend.sidebar')
                <!--END - Main Menu-->

                <div class="content-w">
                    
                    <!--START - Top Bar-->
                    <div class="top-bar color-scheme-transparent">
                        <!--START - Top Menu Controls-->
                        <div class="top-menu-controls">

                            <!--START - Messages Link in secondary top menu-->
                            <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                                <i class="os-icon os-icon-mail-14"></i>
                                <div class="new-messages-count">
                                    12
                                </div>
                                <div class="os-dropdown light message-list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="user-avatar-w">
                                                    <img alt="" src="{{ asset('backend/img/avatar1.jpg') }}">
                                                </div>
                                                <div class="message-content">
                                                    <h6 class="message-from">
                                                        John Mayers
                                                    </h6>
                                                    <h6 class="message-title">
                                                        Account Update
                                                    </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-avatar-w">
                                                    <img alt="" src="{{ asset('backend/img/avatar2.jpg') }}">
                                                </div>
                                                <div class="message-content">
                                                    <h6 class="message-from">
                                                        Phil Jones
                                                    </h6>
                                                    <h6 class="message-title">
                                                        Secutiry Updates
                                                    </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-avatar-w">
                                                    <img alt="" src="{{ asset('backend/img/avatar3.jpg') }}">
                                                </div>
                                                <div class="message-content">
                                                    <h6 class="message-from">
                                                        Bekky Simpson
                                                    </h6>
                                                    <h6 class="message-title">
                                                        Vacation Rentals
                                                    </h6>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="user-avatar-w">
                                                    <img alt="" src="{{ asset('backend/img/avatar4.jpg') }}">
                                                </div>
                                                <div class="message-content">
                                                    <h6 class="message-from">
                                                        Alice Priskon
                                                    </h6>
                                                    <h6 class="message-title">
                                                        Payment Confirmation
                                                    </h6>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--END - Settings Link in secondary top menu-->
                            
                            <!--START - User avatar and menu in secondary top menu-->
                            <div class="logged-user-w">
                                <div class="logged-user-i">
                                    <div class="avatar-w">
                                        <img alt="" src="{{ asset('backend/img/avatar1.jpg') }}">
                                    </div>
                                    <div class="logged-user-menu color-style-bright">
                                        <div class="logged-user-avatar-info">
                                            <div class="avatar-w">
                                                <img alt="" src="{{ asset('backend/img/avatar1.jpg') }}">
                                            </div>
                                            <div class="logged-user-info-w">
                                                <div class="logged-user-name">
                                                    Maria Gomez
                                                </div>
                                                <div class="logged-user-role">
                                                    Administrator
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon">
                                            <i class="os-icon os-icon-wallet-loaded"></i>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="acv-login.html"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END - User avatar and menu in secondary top menu-->
                        </div>
                        <!--END - Top Menu Controls-->
                    </div>
                    <!--END - Top Bar-->
                    <!-- breadcrumb 
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="index.html">Products</a>
                        </li>
                        <li class="breadcrumb-item">
                          <span>Laptop with retina screen</span>
                        </li>
                    </ul>
                     end breadcrumb -->

                    <div class="content-i">
                        <div class="content-box">
                            
                            @yield('content')
                            <!--START - Color Scheme Toggler--> 
                            <!--END - Color Scheme Toggler-->
                            <!--START - Demo Customizer-->  
                            <!--END - Demo Customizer-->
                            <!--START - Chat Popup Box--> 
                            <!--END - Chat Popup Box-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="display-type"></div>
        </div>

        <script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/moment/moment.js') }}"></script>
        <script src="{{ asset('backend/bower_components/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('backend/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/dropzone/dist/dropzone.js') }}"></script>
        <script src="{{ asset('backend/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
        <script src="{{ asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/util.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/alert.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/button.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/modal.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/tab.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
        <script src="{{ asset('backend/bower_components/bootstrap/js/dist/popover.js') }}"></script>
        <script src="{{ asset('backend/js/demo_customizer.js?version=4.4.0') }}"></script>
        <script src="{{ asset('backend/js/main.js?version=4.4.0') }}"></script>
        @yield('script') 
    </body>
</html>