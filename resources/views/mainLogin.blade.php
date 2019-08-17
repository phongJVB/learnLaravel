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

		@if(isset(Auth::user()->email))
		<script>window.location="/main/successlogin";</script>
		@endif

		@if(count($errors) > 0){
		<div>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		}
		@endif
		
		@if ($message = Session::get('error'))
		<div class="error-box" style="color:red">
			<span>*</span>
			<strong>{{ $message }}</strong>
		</div>
		@endif

		

		<form method="post" action="{{ url('/main/checklogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label> Email </label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label> Password </label>
				<input type="password" name="password" class="form-control" required>
			</div>		
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-primary" value="Login">
			</div>
		</form>
	</div>
</body>
</html>