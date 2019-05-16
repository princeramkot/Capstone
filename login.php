<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:index.php');
}

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Grease Monkey</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/login1.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img ></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color:white;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto"> <!-- ml auto is going to push up the navigation when it get maximize-->
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
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
					<a class="nav-link" href="service.html">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login_option.php">LogIn</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">SignUp</a>
				</li>

			</ul>
			
		</div>
	</div>

</nav>
<!--login form-->
  <div class="box">
          <h1>Login </h1>
          
            <form action="login.php" method="POST">
            <div class="inputbox">
              <input type="text" name="user" required="" class="form-control">
              <label>Username/Email</label>
            </div>
            <div class="inputbox">
              <input type="password" name="password" required="" class="form-control">
              <label>Password</label>
            </div>
          
           
              <div class="checkbox">
            <input type="checkbox" checked="checked"> <label>Remember me</label>
      <p> <a href="#">Forgot Password</a>.</p>
              </div>
            <input type="submit" name="sub" value="Login" onclick="fun()">
            <button type="reset" name="">Cancel</button>
          </form>

        </div> 
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['sub']))
{
 $username=$_POST['user'];
 $password=$_POST['password'];

 $qry="select * from creds where name='$username' and password='$password'";
 $run=mysqli_query($con,$qry);
 $row=mysqli_num_rows($run);
 if($row<1)
 {
 	?> <script>alert(" Oops! password or username is incorrect");
 	window.open('login.php',_self);
 	</script>
 	<?php
 }

 else{
	$data=mysqli_fetch_assoc($run);
 	$id=$data['id'];
 	session_start();
 	$_SESSION['uid']=$id;
 	header('location:index.php');
 }
}
?>