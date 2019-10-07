<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>

	<section class="login-form-container">
		<form class="login-form" action="login.php" method="post">
			<h1 class="login-form-h1">Login to Task It</h1>
			<label for="uname">
				<input id="uname" type="text" placeholder="Username" name="uname">
			</label>
			<label for="pass">
				<input id="pass" type="password" placeholder="Password" name="pass">
			</label>
			<button id="submit" type="submit">Login</button>
		</form>
	</section>