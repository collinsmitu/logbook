<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style> 
	.header {
		background: #008000;
	}
	button[name=login_btn] {
		background: #008000;
	}</style>
</head>
<body style="  background-color:#ddd;color;blue;">

	<div class="header">
	<div class="logo">
			<img src="Images/jkuatlogo.png"  >
		<h2>LOGIN</h2>
		</div>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Doesn't have an Account? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>