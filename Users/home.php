<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: #008000;
	}
	button[name=register_btn] {
		background: #008000;
	}
	</style>
</head>
<body>
	<div class="header">
	
		<h2>Admin</h2>
		
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="Images/profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						
                       &nbsp; 
					   <br> <a href="create_user.php"> + add user</a>
					</small><br>
					<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5DADE2;"> -->
		<b>Manage System Users</b><br>
       <b> <a href="adminstudents.php">Students</a> &nbsp &nbsp <a href="adminsupervisors.php">Supervisors</a> &nbsp &nbsp <a href="adminorgsupervisors.php">OrganizationSupervisors</a></b><br>
  </div>
  <br>
  <div>
  <br>
  <a href="home.php?logout='1'" style="color: red;">Logout</a>
  </div>
</nav>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>