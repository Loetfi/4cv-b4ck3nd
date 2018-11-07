<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard HTML Template</title>
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
    <body class="auth-wrappers">
        <div class="all-wrappers">
            <div class="auth-box-w">
                <div class="logo-w">
                    <a href="index.html"><img alt="" src="http://52.163.186.214/frontend/img/logo.png" width="100%"></a>
                </div>
                <h4 class="auth-header">
                    Login Form
                </h4>
                <form action="acv-dashboard.html">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" placeholder="Enter your email" type="text" id="email">
                        <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password" id="password">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>
                    <div class="buttons-w">
                        <button type="button" class="btn btn-success" id="btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>