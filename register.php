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
  <title>Wrad Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register for a wrad account</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>