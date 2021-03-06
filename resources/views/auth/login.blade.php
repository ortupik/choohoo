<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logfair Insurance | Sign In</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
</head>

<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128" xml:space="preserve">
            <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" />
            <g>
                <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z" fill="#000000" fill-opacity="1" />
                <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="500ms" repeatCount="indefinite">
                </animateTransform>
            </g>
        </svg>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper">

        <!-- logo -->
        <div id="logo">
            <img class="logo" src="assets/media/image/logo.png" alt="image">
            <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="image">
        </div>
        <!-- ./ logo -->

        <h5>Sign in</h5>

        <!-- form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" required autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <!-- PUBLIC_LINK = https://www.logfairinsurance.co.ke/log_fair/TEST-BE-005/api/dashboard/ -->

            <div class="form-group">
                <input type="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                </div>
                <a href="{{ route('password.request') }}">Reset password</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            <hr>

            <p class="text-muted">Don't have an account?</p>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">Register now!</a>
        </form>
        <!-- ./ form -->

    </div>

    <!-- Plugin scripts -->
    <script src="vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="assets/js/app.min.js"></script>
</body>

</html>