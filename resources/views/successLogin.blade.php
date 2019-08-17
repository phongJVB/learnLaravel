<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<!-- Styles -->
	<link href="{{ asset('css/dangnhap.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container box">
		<h3>Simple Login</h3>

		@if(Auth::check())
		<div class="success-block">
			<strong>Welcome {{ Auth::user()->email }}</strong>
			<br/>
			<a href="{{ url('/main/logout') }}">Logout</a>
		</div>
		@else
		<script>window.location = "/main";</script>
		@endif

		<!--<div class="success-block">
			<strong>Login Thành Công</strong>
			<br/>
			<a href="{{ url('/main/logout') }}">Logout</a>
		</div> -->

	</div>
</body>
</html>