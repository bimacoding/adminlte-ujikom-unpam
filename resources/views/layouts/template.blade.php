<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet"
        href="{{ url('/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <a href="index2.html" class="logo">

                <span class="logo-mini"><b>A</b>LT</span>

                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>

            <nav class="navbar navbar-static-top">

                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @include('layouts.navbar')
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            @include('layouts.sidebar')
        </aside>


        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>


            <section class="content">
                @yield('content')
            </section>

        </div>

        <footer class="main-footer">
            @include('layouts.footer')
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>

    <script src="{{ url('/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{ url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/morris.js/morris.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url('/assets/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ url('/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ url('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ url('/assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ url('/assets/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ url('/assets/dist/js/demo.js') }}"></script>
</body>

</html>
