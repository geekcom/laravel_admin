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
	<!-- Flash Notifications -->
	@if (Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {{ Session::get('flash_notification.message') }}
    </div>
	@endif
		<!-- /.login-logo -->
		<div class="login-box-body">
		
			<p class="login-box-msg">Reset Password</p>
			<form method="POST" action="{{ url('/password/email') }}">
				{!! csrf_field() !!}

				<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                	<input type="email" class="form-control" name="email" placeholder="E-Mail Address">
                    	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif   
               </div>	
               
               <div class="row">
                   <div class="col-xs-4">
                       <button type="submit" class="btn btn-primary btn-flat">
							Send Password Reset Link
					   </button>
                   </div><!-- /.col -->
               </div><br>
               <a href="http://localhost:8000" class="text-center">I already have a membership</a><br>
               <a href="{{ url('register') }}" class="text-center">Register a new membership</a>
               
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
