<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<!DOCTYPE html>
<html>
	<head>
		<title>Easy Web Board</title>
		<link rel="stylesheet" type="text/css" href="CSS/index-css.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="bootstrap/3.3.5/js/jquery-1.11.3.min.js"></script>
		<script src="bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="JS/index-js.js"></script>
		<style type="text/css">
			body {
				background-image: url("image/bg.png");
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			h1{
				font-family: "Times New Roman", Times, serif;
				font-size: 90px;
			}
		</style>
	</head>

	<body>
		<h1 align="center" style="margin-top: 10%">Easy Web Board</h1>
		<div class="container">
			<div class="row">
				<p class="text-center" style="margin-top: 30px"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">View Site</a></p>
			</div>
		</div>
	<!-- END # BOOTSNIP INFO -->

	<!-- BEGIN # MODAL LOGIN -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<img class="img-circle" id="img_logo" src="image/logo4.png">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>
					
					<!-- Begin # DIV Form -->
					<div id="div-forms">
					
						<!-- Begin # Login Form -->
						<form id="login-form">
							<div class="modal-body">
								<div id="div-login-msg">
									<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
									<span id="text-login-msg">Type your username and password.</span>
								</div>
								<input id="login_username" class="form-control" type="text" placeholder="Email" required>
								<input id="login_password" class="form-control" type="password" placeholder="Password" required>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
							<div class="modal-footer">
								<div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
								</div>
								<div>
									<!-- <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button> -->
									<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
								</div>
							</div>
						</form>
						<!-- End # Login Form -->
						
						<!-- Begin | Lost Password Form -->
						<form id="lost-form" style="display:none;">
							<div class="modal-body">
								<div id="div-lost-msg">
									<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
									<span id="text-lost-msg">Type your e-mail.</span>
								</div>
								<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
							</div>
							<div class="modal-footer">
								<div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
								</div>
								<div>
									<button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
									<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
								</div>
							</div>
						</form>
						<!-- End | Lost Password Form -->
						
						<!-- Begin | Register Form -->
						<form id="register-form" style="display:none;">
							<div class="modal-body">
								<div id="div-register-msg">
									<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
									<span id="text-register-msg">Register an account.</span>
								</div>
								<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
								<input id="register_username" class="form-control" type="text" placeholder="Name" required>
								<input id="register_password" class="form-control" type="password" placeholder="Password" required>
								<input id="register_password2" class="form-control" type="password" placeholder="Re-Password" required>
							</div>
							<div class="modal-footer">
								<div>
									<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
								</div>
								<div>
									<button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
									<!-- <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button> -->
								</div>
							</div>
						</form>
						<!-- End | Register Form -->
						
					</div>
					<!-- End # DIV Form -->
					
				</div>
			</div>
		</div>
	</body>
</html>