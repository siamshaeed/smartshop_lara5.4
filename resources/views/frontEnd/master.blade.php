<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | Home </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/frontEnd/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- pignose css -->
<link href="{{asset('public/frontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- //pignose css -->
<link href="{{asset('public/frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('public/frontEnd/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
<script src="{{asset('public/frontEnd/js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('public/frontEnd/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('public/frontEnd/js/simpleCart.min.js')}}"></script>
<script src="{{asset('public/frontEnd/js/jquery.easing.min.js')}}"></script>
</head>
<body>
	<!-- Header page include -->
	@include('frontEnd.includes.header')
	<!-- Menu page include -->
	@include('frontEnd.includes.menu')
	<!-- Menu page end -->
	<!-- mainContent/bodyContent/Dynamic Content -->
	@yield('mainContent')
<!-- //product-nav -->

	@include('frontEnd.includes.cupon')
<!-- Footer file include -->
	@include('frontEnd.includes.footer')

<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<div class="login">
						<div class="login-bottom">
							<h3>Sign up for free</h3>
							<form>
								<div class="sign-up">
									<h4>Email :</h4>
									<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
								</div>
								<div class="sign-up">
									<h4>Password :</h4>
									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

								</div>
								<div class="sign-up">
									<h4>Re-type Password :</h4>
									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

								</div>
								<div class="sign-up">
									<input type="submit" value="REGISTER NOW" >
								</div>

							</form>
						</div>
						<div class="login-right">
							<h3>Sign in with your account</h3>
							<form>
								<div class="sign-in">
									<h4>Email :</h4>
									<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
								</div>
								<div class="sign-in">
									<h4>Password :</h4>
									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
									<a href="#">Forgot password?</a>
								</div>
								<div class="single-bottom">
									<input type="checkbox"  id="brand" value="">
									<label for="brand"><span></span>Remember Me.</label>
								</div>
								<div class="sign-in">
									<input type="submit" value="SIGNIN" >
								</div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
					<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //login -->
</body>
</html>
