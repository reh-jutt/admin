<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{URL::assets('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::assets('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL::assets('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{URL::assets('css/style.css')}}" rel="stylesheet">

</head>
<body>

@include('admin.composer.header')

@include('admin.composer.sidebar')

@yield('content')

@include('admin.composer.footer')

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::asset('lib/chart/chart.min.js')}}"></script>
<script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
<script src="{{URL::asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{URL::asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{URL::asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>
