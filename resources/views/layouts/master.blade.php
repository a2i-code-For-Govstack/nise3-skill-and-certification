<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>{{config('app.name')}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/frontendStyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
        }


        /* Top Navbar start*/
        .menu-bg-color {
            background: #671688;
            padding: 0;
        }

        .menu-bg-color a {
            color: #fff;
            padding: 10px 6px;
            border-radius: unset;
            transition: .5s;
            font-size: 1rem;
            font-weight: bold;
        }

        .menu-bg-color li a {
            color: #fff;
            padding: 0px 6px;
            padding-top: 4px;
            border-radius: unset;
            transition: .5s;
            font-size: 1rem;
        }

        .menu-bg-color li a:hover {
            /* background: #9c36c6; */
            border-radius: unset;
            color: #FFFFFF;
            transition: .5s;
        }

        .active-menu a {
            border-bottom: 1px solid white;
            border-radius: unset;
            color: #FFFFFF;
            transition: .5s;
        }

        .navbar-right li a:hover {
            background: #E67E22;
            border-radius: unset;
            color: #FFFFFF;
            transition: .5s;
        }

        .navbar .navbar-brand {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: normal;
            /* letter-spacing: 2px; */
        }

        .navbar .navbar-nav {
            margin-left: auto;
        }

        .nav-effect {
            display: inline-block;
            font-family: "Be Vietnam Pro", sans-serif;
            position: relative;
            color: rgb(163, 226, 255);
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .nav-effect:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: rgb(163, 226, 255);
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .nav-effect:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Top navbar style end */

        .theme-inner-box{
            border-radius: 6px;
            box-shadow: 0px 0px 12px 6px #f4f4f4;
            padding: 15px 10px;
            background: #fff;
            margin-bottom: 25px !important;
            height: 100%;
        }
        .theme-box {
            -webkit-transition: transform 0.8s;
            -moz-transition: transform 0.8s;
            -o-transition: transform 0.8s;
            transition: transform 0.8s;
            width: 300px;
            min-height: 320px;
            position: relative;
        }
        .theme-box.active{
            border: 8px solid #0d2bc6 !important;
        }

        .theme-box:hover .theme-inner-box{
            box-shadow: 0 0 45px -10px #a6d1ff !important;
        }
        .theme-image{
            width: 80px;
            margin-left: 15px;
        }
        .theme-button-wrapper{
            text-align: center;
            position: absolute;
            bottom: 20px;
            width: 90%;
            display: none;
        }
        .theme-box:hover .theme-button-wrapper{
            display: block;
        }
    </style>

    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #671688;
            color: white;
            position: fixed;
            left: 0;
            transition: left 0.3s ease;
            z-index: 10000;
        }

        .sidebar.collapsed {
            left: -250px;
        }

        .sidebar a {
            color: white;
        }

        .sidebar a:hover {
            background-color: #5D0B7E;
        }

        .sidebar .logout {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: calc(100% - 40px);
        }

        .toggle-btn {
            background-color: transparent;
            color: white;
            padding: 10px;
            cursor: pointer;
            z-index: 1;
        }

        .toggle-btn i {
            transition: transform 0.3s ease;
        }

        .sidebar.collapsed+.toggle-btn i {
            transform: rotate(180deg);
        }

        .sidebar-nav-link {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .sidebar-nav-link i {
            font-size: 20px;
            padding-right: 5px;
        }

        .dropdown-menu-sidebar {
            display: none;
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: none;
            border-radius: 0;
            padding-left: 30px;
        }

        .dropdown-menu-sidebar .dropdown-item {
            color: white;
        }

        .dropdown-menu-sidebar .dropdown-item:hover {
            background-color: #5D0B7E;
        }

        .dropdown.show>.dropdown-menu-sidebar {
            display: block;
        }

        .active-sidebar {
            background-color: #5D0B7E;
        }

        @media (max-width: 991px) {
            .sidebar {
                left: -250px;
                height: -webkit-fill-available !important;
            }

            .sidebar.collapsed {
                left: 0;
            }

            .content {
                margin-left: 0 !important;
            }
        }

        .sidebar-hidden {
            margin-left: 0px !important;
        }

        @media (min-width: 992px) {
            .sidebar {
                top: 60px;
            }
        }
    </style>

    
    @stack('css')
    <script>
        window.select_option_placeholder = '{{__('generic.add_button_label')}}';
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   <div style="z-index: 100000 !important; width: 100%; position: sticky; top: 0;">
    @yield('header', \Illuminate\Support\Facades\View::make('master::layouts.partials.front-end.header'))
   </div>
    @yield('header', \Illuminate\Support\Facades\View::make('master::layouts.partials.master.header'))

    @yield('sidebar', Illuminate\Support\Facades\View::make('master::layouts.partials.master.sidebar'))

    <div class="content-wrapper specific-div px-1 pt-2 pb-5" style="position: relative;">
        @yield('content')
    </div>

    <div class="specific-div">
        @yield('footer', Illuminate\Support\Facades\View::make('master::layouts.partials.master.footer'))
    </div>
</div>
<script src="{{asset('/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/OverlayScrollbars.min.js"></script>
<script src="{{asset('/js/admin-lte.js')}}"></script>
<script src="{{asset('/js/on-demand.js')}}"></script>
<script>
    @if(\Illuminate\Support\Facades\Session::has('alerts'))
    let alerts = {!! json_encode(\Illuminate\Support\Facades\Session::get('alerts')) !!};
    helpers.displayAlerts(alerts, toastr);
    @endif
    @if(\Illuminate\Support\Facades\Session::has('message'))
    let alertType = {!! json_encode(\Illuminate\Support\Facades\Session::get('alert-type', 'info')) !!};
    let alertMessage = {!! json_encode(\Illuminate\Support\Facades\Session::get('message')) !!};
    let alerter = toastr[alertType];
    alerter ? alerter(alertMessage) : toastr.error("toastr alert-type " + alertType + " is unknown");
    @endif
</script>
<script>
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('collapsed');
        const specificDiv = document.querySelector('.specific-div');
        const header = document.querySelector('.header-expand');
        const footer = document.querySelector('.footer-expand');
        if (sidebar.classList.contains('collapsed')) {
            specificDiv.classList.add('sidebar-hidden');
            header.classList.add('sidebar-hidden');
            footer.classList.add('sidebar-hidden');
        } else {
            specificDiv.classList.remove('sidebar-hidden');
            header.classList.remove('sidebar-hidden');
            footer.classList.remove('sidebar-hidden');
        }
    }
</script>
@stack('js')
</body>
</html>

