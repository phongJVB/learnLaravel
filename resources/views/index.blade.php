<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link CSS Commons -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/plugins/OwlCarousel2-2.2.1/animate.css') }}">

<!-- Lay CSS rieng cho tung page -->
@yield('css')

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	@include('layouts/header')
	
	<!-- Đổ content từ file home.blade.php vào đây -->
	@yield('content') 

	<!-- Recently Viewed -->
	@yield('recentlyViewed') 	
	
	<!-- Brands -->
	@yield('brands') 

	<!-- Newsletter -->
	@include('layouts/newsletter')

	<!-- Footer -->
	@include('layouts/footer')

</div>
<!-- Link JS Commons -->
<script src="{{ asset('frontEnd/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontEnd/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('frontEnd/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/easing/easing.js') }}"></script>


<!-- Lay JS rieng cho tung page -->
@yield('js')

</body>

</html>