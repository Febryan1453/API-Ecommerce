
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{$title ?? 'Dashboard'}} </title>

  <style>
      .red{
        color: #dc3545;
      }
      .red:hover{
        color: #f1717e;
      }

      .ijo{
        color: #218838;
      }
      .ijo:hover{
        color: #5abb6f;
      }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t1.6435-1/p148x148/88273873_10158413441999734_6065777235489456128_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=1eb0c7&_nc_eui2=AeHOezpYJ6Oe4LNYk82YP70SNAywz7zjnkw0DLDPvOOeTJKkXZZUFSJ2B_tSsK7TLFzDmi9sf_zSLOMHKufDNCPr&_nc_ohc=ZwhfzAyNe9gAX-e6wJx&tn=o5ohADsdeuQVnp3B&_nc_ht=scontent.fcgk6-2.fna&oh=71555ad73553f30cedc7f8c5eae35788&oe=60F3C056" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('includes.navbar')

  @include('includes.sidebar')

  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>

@include('includes.js')

</body>
</html>
