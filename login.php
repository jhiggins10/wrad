<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<!-- Code refrence:-->
<!--Title: Complete user registration system using PHP and MySQL database-->
<!--Author: Awa Melvine-->
<!--Date: 13/04/18-->
<!--Code version: 1.0 -->
<!--Availability: http://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database-->
<head>
  <title>Wrad login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>