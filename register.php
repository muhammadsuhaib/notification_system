<?php 
include 'header.html';
?>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-logo">
					<span style="font-size: 8px;">Reactor<br></span>
						<i class="zmdi zmdi-landscape">  </i>
							<span style="font-size: 8px;">System<br></span>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="user_name" placeholder="Username" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="email" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-radio">
						<input class="input-checkbox100" id="ckb1" type="radio" name="remember-me" autocomplete="off">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>





					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							<!-- Forgot Password? -->
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

<?php
include 'footer.html';
?>	
