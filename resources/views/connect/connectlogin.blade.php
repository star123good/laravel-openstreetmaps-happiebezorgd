<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('connect/images/icons/favicon.ico') }}"/>
    <!-- Styles -->
    <link href="{{ asset('connect/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/fonts/iconic/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/vendor/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('connect/css/main.css') }}" rel="stylesheet">
</head>
<body style="background-color: #999999;">
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('{{ asset('connect/images/pizza_fresca.jpg') }}');"></div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-59" style="margin-top: 200px;">
                        
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="text" name="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('connect/vendor/jquery/jquery-3.2.1.min.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/animsition/js/animsition.min.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/bootstrap/js/popper.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/select2/select2.min.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/daterangepicker/moment.min.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/daterangepicker/daterangepicker.js') }}" defer></script>
    <script src="{{ asset('connect/vendor/countdowntime/countdowntime.js') }}" defer></script>
    <script src="{{ asset('connect/js/main.js') }}" defer></script>

</body>
</html>