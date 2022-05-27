<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>FEDERAL | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
			<div class="header">
				<div class="wrap">
				<div class="logo">
				<img src="images\logo1.png" style="height:80px;width:300px"/>
				</div>
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="login.php">Login</a></li>
						
						<li><a href="hms/admin">Admin</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
			</div>
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
      			<div class="company_address">
					  
					  <h2>Contact us </hr>
				     	<h2>Hospital Address  :</h2>
						    	<p>2nd , street,</p>
						   		<p>Main road, pala</p>
						   		<p>India</p>
				   		<p>Phone:+91 7903225989</p>
				   	
				 	 	<p>Email: <span><a href="mailto:info@FDHospital.com">Frank_Mathews_Thomas@FDHospital.com</a></span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2> Have Complaints ?</h2>
					  <h1>Please Type Here</h1>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label> Complaint Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
	</body>
</html>

