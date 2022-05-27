<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$bloodgrp=$_POST['blg'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,dob,gender,bloodgrp,email,password) values('$fname','$address','$city','$dob','$gender','$bloodgrp','$email','$password')");
if($query)
{
	
	header('location:./user-login.php');
	
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>
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
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
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
				<img src="images\logo1.png" style="height:100px;width:300px"/>

					<a href="\hospital\index.html" style="font-size: 30px; font-family: 'Trebuchet MS', sans-serif; color: blue;"></a>
				</div>
				<div class="top-nav">
					<ul>
						
						<li><a href="\hospital\login.php">Login</a></li>
						
						<li><a href="\hospital\hms\admin\index.php">Admin</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
	
	
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<br><br>
				<div>
				<center>
				
				</center>
				</div>
				<div class="box-register">
					<center>
				<h2>Patient Registration</h2>
</center>
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
							<legend>
								
							</legend>
							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" id="full_name" onblur="validate_name()" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" id="address" onblur="validate_address()" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" onblur="validate_city()" name="city" id="city" placeholder="City" required>
							</div>
							<div class="form-group">
							Date of Birth: &nbsp;&nbsp;&nbsp;
								<input type="date" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="dob" placeholder="Date of Birth" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" checked required>
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male" required>
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<div class="form-group">
								
								<label for = "bloodgroup"> Choose a bloodgroup: </label>
								<select name = "blg" id = "blood"class="form-control">
									<option value ="A+ve">A+ve</option>
									<option value ="B+ve">A-ve</option>
									<option value ="AB+ve">B+ve</option>
									<option value ="O+ve">B-ve</option>
									<option value ="A-ve">AB+ve</option>
									<option value ="B-ve">AB-ve</option>
									<option value ="AB-ve">O+ve</option>
									<option value ="AB-ve">O-ve</option>
								</select>
							</div>
							
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onblur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" minlength="6" id="password" name="password" placeholder="Password" onblur="validate_password()" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" minlength="6" id="password_again" name="password_again" placeholder="Re-type Password" onblur="validate_confirm()" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login.php">
										Log-in
									</a>
								</p>
								<center>
								<button type="submit" class="btn btn-primary pull-center" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
								</center>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; </span><span class="text-bold text-uppercase"> FEDERAL CARE HOSPITAL</span>. <span>All rights reserved</span>
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
			function validate_name() {
        var name = document.forms["registration"]["full_name"];
        var pattern = /^[A-Za-z]+$/;
        if (name.value == "") {
          var error = "Please enter full_name";
          document.getElementById("full_name").placeholder = error;
          document.getElementById("full_name").classList.add("custom-warning");
          name.focus();
          return false;
        } else if (name.value.match(pattern)) {
          document.getElementById("full_name").innerHTML = "";
          document.registration.address.focus();
          return true;
        } else {
          var error = "Invalid Name";
          document.getElementById("full_name").value = "";
          document.getElementById("full_name").placeholder = error;
          name.focus();
          return false;
        }
      }
      function validate_address() {
  var name = document.forms["registration"]["address"];
  var pattern = /^[A-Za-z]+$/;
  if (name.value == "") {
    var error = "Please enter your address";
    document.getElementById("address").placeholder = error;
    document.getElementById("address").classList.add("custom-warning");
    document.registration.address.focus();
    return false;
  }
  else if (name.value.match(pattern)) {
    document.getElementById("address").innerHTML = "";
    document.form.place.focus();
    return true;
  }
  else {
    document.getElementById("address").value = "";
    document.getElementById("address").placeholder = "Invalid address";
    document.registration.address.focus();
    return false;
  }
}
function validate_city() {
  var name = document.forms["registration"]["city"];
  var pattern = /^[A-Za-z]+$/;
  if (name.value == "") {
    var error = "Please enter your city";
    document.getElementById("city").placeholder = error;
    document.getElementById("city").classList.add("custom-warning");
    document.registration.city.focus();
    return false;
  }
  else if (name.value.match(pattern)) {
    document.getElementById("city").innerHTML = "";
    document.form.phone.focus();
    return true;
  }
  else {
    document.getElementById("city").value = "";
    document.getElementById("city").placeholder = "Invalid place";
    document.registration.city.focus();
    return false;
  }
}
  
   
      function validate_password() {
        var name = document.forms["registration"]["password"];
        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (name.value == "") {
          var error = "Please enter your password";
          document.getElementById("password").placeholder = error;
          document.getElementById("password").classList.add("custom-warning");
          document.form.password.focus();
          return false;
        } else if (name.value.match(pattern)) {
          document.getElementById("password").innerHTML = "";
          document.form.cpassword.focus();
          return true;
        } else {
          document.getElementById("password").value = "";
          document.getElementById("password").placeholder = "Invalid password";
          document.form.password.focus();
          return false;
        }
      }

      function validate_confirm() {
        var name1 = document.forms["registration"]["password_again"];
        var name2 = document.forms["registration"]["password_again"];

        if (name2.value == "") {
          var error = "Please enter password";
          document.getElementById("password_again").placeholder = error;
          document.getElementById("password_again").classList.add("custom-warning");
          document.form.cpassword.focus();
          return false;
        } else if (name1.value == name2.value) {
          document.getElementById("password_again").innerHTML = "";
          document.form.checkBox.focus();
          return true;
        } else {
          document.getElementById("password_again").value = "";
          document.getElementById("password_again").placeholder = "Password doesnot match";
          document.form.cpassword.focus();
          return false;
        }
      }
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
</html>