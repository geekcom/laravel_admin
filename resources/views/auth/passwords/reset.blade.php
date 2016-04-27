<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Password Reset</title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet"
	href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ asset('js/iCheck/square/blue.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b>Admin</b>LTE</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Reset Password</p>
			<form method="POST" action="{{ url('/password/reset') }}">
	{!! csrf_field() !!} <input type="hidden" name="token"
		value="{{ $token }}">

	<div
		class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
		<input type="email" class="form-control" name="email"
			placeholder="E-Mail Address" value="{{ $email or old('email') }}"> <span
			class="glyphicon glyphicon-envelope form-control-feedback"></span>

		@if ($errors->has('email')) <span class="help-block"> <strong>{{
				$errors->first('email') }}</strong>
		</span> @endif
	</div>

	<div
		class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
		<input type="password" class="form-control" name="password"> <span
			class="glyphicon glyphicon-lock form-control-feedback"></span>

		@if ($errors->has('password')) <span class="help-block"> <strong>{{
				$errors->first('password') }}</strong>
		</span> @endif
	</div>

	<div
		class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		<input type="password" class="form-control"
			name="password_confirmation"> <span
			class="glyphicon glyphicon-lock form-control-feedback"></span>

		@if ($errors->has('password_confirmation')) <span class="help-block">
			<strong>{{ $errors->first('password_confirmation') }}</strong>
		</span> @endif
	</div>

	<div class="row">
		<div class="col-xs-4">
			<button type="submit" class="btn btn-primary btn-flat">
				Reset Password
			</button>
		</div>
		<!-- /.col -->
	</div>
	<br>

</form>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.1.4 -->
	<script src="{{ asset('js/jQuery/jQuery-2.1.4.min.js') }}"></script>
	<!-- Bootstrap 3.3.5 -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
