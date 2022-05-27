<?php
session_start();

include("include/config.php");

if(isset($_POST['change']))
{
$cno=$_SESSION['cnumber'];
$email=$_SESSION['email'];
$newpassword=md5($_POST['password']);
$query=mysqli_query($con,"update doctors set password='$newpassword' where contactno='$cno' and docEmail='$email'");
if ($query) {
echo "<script>alert('Password successfully updated.');</script>";
echo "<script>window.location.href ='index.php'</script>";
}

}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Password Reset</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles1.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

				<script type="text/javascript">
function valid()
{
 if(document.passwordreset.password.value!= document.passwordreset.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.passwordreset.password_again.focus();
return false;
}
return true;
}
</script>
	</head>
	<body class="login">
	<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="\hospital\index.html" style="font-size: 30px; font-family: 'Trebuchet MS', sans-serif; color: blue;">KANNUR DISTRICT HOSPITAL</a>
				</div>
				<div class="top-nav">
					<ul>
						<li><a href="\hospital\index.html">Home</a></li>
						<li><a href="\hospital\login.php">Login</a></li>
						<li><a href="\hospital\contact.php">contact</a></li>
						<li><a href="\hospital\hms\admin\index.php">Admin</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
	
	
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<br><br><br>
				<div>
				<center><h2>Doctor Reset Password</h2></center>
				</div>
				<div class="box-login">
					<form class="form-login" name="passwordreset" method="post" onSubmit="return valid();">
						<fieldset>
						
							<legend>
							
							</legend>
							<p>
								Please set your new password.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>

<div class="form-group">
<span class="input-icon">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
<i class="fa fa-lock"></i> </span>
</div>
	

<div class="form-group">
<span class="input-icon">
<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
<i class="fa fa-lock"></i> </span>
</div>
							

							<div class="form-actions">
								<center>
								<button type="submit" class="btn btn-primary pull-center" name="change">
									Change <i class="fa fa-arrow-circle-right"></i>
								</button>
								<center>
							</div>
							<div class="new-account">
								Already have an account? 
								<a href="index.php">
									Log-in
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
					</div>
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	
</html>