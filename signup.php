<?php include 'includes/header.php' ?>

	<section class="signup-form-container">
		<form class="signup-form" action="signup.php" method="post">
			<h1 class="signup-form-h1">Register your account.</h1>
			<input type="text" placeholder="Username" name="uname">
			<input type="email" placeholder="E-mail" name="email">
			<input type="password" placeholder="Password" name="pass">
			<input type="password" placeholder="Confirm Password" name="c-pass">
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</section>