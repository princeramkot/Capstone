<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Grease Monkey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/signup1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">



</head>
<body >




<!--Naviagtion -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img ></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color: white;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto"> <!-- ml auto is going to push up the navigation when it get maximize-->
				<li class="nav-item">
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="appointment.php">Call Mechanic</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="status.php">Status</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="service.php">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">LogIn</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.html">SignUp</a>
				</li>

			</ul>
			
		</div>
	</div>

</nav>









<!--signup form-->
  <div class="box">
          <h1>Sign Up</h1>
          <form method="POST" action=signup.php>
            
            <div class="inputbox">
              <input type="text" name="fname" required="">
              <label>Firstname</label>
            </div>
             <div class="inputbox">
              <input type="text" name="lname" required="">
              <label>Lastname</label>
            </div>
            <div class="inputbox">
              <input type="password" name="password" required="">
              <label>Password</label>
            </div>
            
            <div class="inputbox">  
              <input type="text" name="username" required="">
              <label>Username</label>
            </div>
              <div class="checkbox">
            <input type="checkbox" checked="checked"> <label>Remember me</label>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              </div>
            <input type="submit" name="signup" value="SignUp"  >
            <button type="reset" name="">Cancel</button>
          </form>

        </div> 






</body>
</html>


<?php
include('dbcon.php');

if(isset($_POST['signup']))
{
$name=$_POST['username'];
$pass=$_POST['password'];
$qry="INSERT INTO `creds`(`name`,`password`) VALUES('$name','$pass')";

 $run=mysqli_query($con,$qry);
?><script type="text/javascript">
	
</script>
<?php

if($run==true)
{
?> <script> alert('Your Account Has Been Created Please Login');
window.open('login.php','_self');
header('location:login.php');
</script>
<?php
}

else
{
?> <script> alert('Oops!! there is some problem, pls try again'); </script>
<?php
header('location:login.php');
}
}
?>