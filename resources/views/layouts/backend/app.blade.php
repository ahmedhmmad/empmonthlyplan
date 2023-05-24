<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.backend.header')

    @include('layouts.backend.sidebar')

    @include('layouts.backend.content')

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url("/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{url("/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE -->
<script src="{{url("/dist/js/adminlte.js")}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url("/plugins/chart.js/Chart.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{url("/dist/js/demo.js")}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url("/dist/js/pages/dashboard3.js")}}"></script>
</body>
</html>
