<?php 
include 'header.html';
?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="signin.php">
					<span class="login100-form-logo">
						<span style="font-size: 8px;">Reactor<br></span>
						<i class="zmdi zmdi-landscape">  </i>
							<span style="font-size: 8px;">System<br></span>
						<!-- <img src="/images/fusion.jpg" style="width: 100px;"> -->
						<!-- <h6> <span style="margin-left: 25px;">Reactor</span> <br> Management <br> <span style="margin-left: 25px;"> System </span></h6>  -->
						
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="" class="login100-form-btn">  
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
	

	<div id="dropDownSelect1"></div>
<?php
include 'footer.html';
?>	
