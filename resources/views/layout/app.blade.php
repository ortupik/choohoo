<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choohoo | Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/daterangepicker.css') }}">

    <!-- Vmap -->
    <link rel="stylesheet" href="{{ asset('vendors/vmap/jqvmap.min.css') }}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/ratingbar.css') }}" type="text/css">


    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Javascript -->
    <script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- @livewireStyles -->

</head>

<body>

    <!-- begin::preloader-->
    <div class="preloader">
        <svg xmlns="https://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128" xml:space="preserve">
            <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" />
            <g>
                <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z" fill="#000000" fill-opacity="1" />
                <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="500ms" repeatCount="indefinite">
                </animateTransform>
            </g>
        </svg>
    </div>
    <!-- end::preloader -->

    <!-- begin::header -->
    <div class="header">

        <!-- begin::header-logo -->
        <div id="header-logo">
            <a href="{{ url('/admin/dashboard') }}">
                <!-- <img class="logo" src="{{ asset('assets/logos/logfair-insurance-circular.png') }}" alt="logo">
                <img class="logo-sm" src="{{ asset('assets/logos/logfair-insurance-circular.png') }}" alt="small logo">
                <img class="logo-light" src="{{ asset('assets/logos/logfair-insurance-circular.png') }}" alt="light logo"> -->
                <p style="color: #ffff;">Choohoo</p>
            </a>
        </div>
        <!-- end::header-logo -->

        <div class="header-body">

            @include('layout.component.header-body')

        </div>
    </div>
    <!-- end::header -->

    <!-- begin::main -->
    <div id="main">

        <!-- begin::navigation -->
        <div class="navigation">

            <!-- begin::navigation menu -->
            @include('layout.component.navigation-menu')
            <!-- end::navigation menu -->

        </div>
        <!-- end::navigation -->

        <!-- begin::main-content -->
        <div class="main-content">

            @yield('content')

        </div>
        <!-- end::main-content -->

    </div>
    <!-- end::main -->

    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('vendors/charts/chartjs/chart.min.js') }}"></script>

    <!-- Apex chart -->
    <script src="{{ asset('vendors/charts/apex/apexcharts.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ asset('vendors/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/examples/charts/peity.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>

    <!-- Slick -->
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>

    <!-- Vamp -->
    <script src="{{ asset('vendors/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendors/vmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/js/examples/vmap.js') }}"></script>

    <!-- Dashboard scripts -->
    <script src="{{ asset('assets/js/examples/dashboard.js') }}"></script>
    <div class="colors">
        <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('input[name="single-date-picker"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true
            });
        });
    </script>

    <!-- @livewireScripts -->

    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="js/pages/datatable/datatable-advanced.init.js"></script>

</body>



</html>