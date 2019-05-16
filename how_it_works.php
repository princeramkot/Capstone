<?php

session_start();
if(isset($_SESSION['uid']))
{
$name=$_SESSION['uid'];	

}
else
header('location:login_option.php');


?>
<!DOCTYPE html>
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
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">



</head>
<body style="background-color: white;">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script>
     new WOW().init();
     </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>





<!--Naviagtion -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
	<div class="container-fluid" >
		<a style="color:white" class="navbar-brand" href="#">
			
			<?php
include('dbcon.php');

$sql = "SELECT name FROM creds where $name like id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   
			
			
			$count=1;  
			while($data=mysqli_fetch_assoc($result))
			{
					
				 echo strtoupper($data['name']); 

			
	}		} ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background-color: white;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto"> <!-- ml auto is going to push up the navigation when it get maximize-->
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="how_it_works.php">How It Works</a>
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
					<a class="nav-link" href="logout.php">Logout</a>
				</li>

			</ul>
			
		</div>
	</div>

</nav>
<div style="background-image:url('img/background4.jpg'); width: 100%;
height: 400px; background-repeat:no-repeat; background-size: cover;"></div>

<!--How it works details-->

<div class="container-fluid">
	<div class="row" style="padding-top: 40px; padding-right: 10px; padding-bottom: 20px;">
		<div class="col-lg-4 side-menu">
			<ul style="list-style: none;">
	<a href="how_it_works.html" style="text-decoration: none;cursor: pointer;color: #1E7BE2;display: block;padding: 10px 0px 10px 10px;font-size: 16px;" ><li class="active-item">Request a service online</li></a>

	<a href="we_come_to_you.html" style="text-decoration: none;cursor: pointer;color: #1E7BE2;display: block;padding: 10px 0px 10px 10px;font-size: 16px;"><li>We come to you</li></a>
	<a href="roadside_assitance.html" style="text-decoration: none;cursor: pointer;color: #1E7BE2;display: block;padding: 10px 0px 10px 10px;font-size: 16px;"><li>Roadside Assistance</li></a>
	
		</ul>
	</div>

	<div class="col-lg-8">
		
			<h2 class="g-subheader-text" >Request a service online</h2>
			<p style="font-family:sans-serif;
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 150%;
color: #6d7579;
margin: 0;">Car trouble? We can help

Book a service online and our mechanics will come to your home or where your car brokedown to service your car. We make the entire process easy for you. Using our website and mobile apps, you can access the maintenance schedule of all your cars, get a fair and transparent price, book an appointment, make payments, access service history and get maintenance reminders. And since we don’t have the overhead cost of a shop, we are able to charge less while providing a convenient service.We provide services at night too when your got stuck anywhere with a problem in your car. Our Mechanics will arrive at the spot and solve the problem.</p>

 <h3 class="display-4" style="padding-top: 30px;">How to Book service</h3>

 <ul style="list-style: none;">
  <li> <i class="fa fa-download fa-2x" aria-hidden="true"></i>Download the App Grease Monkey from the playstore</li>
  <li><i class="fa fa-registered fa-2x" aria-hidden="true"></i>
Get Register yourself</li>
  <li><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
Enter your location </li> 
  <li><i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
You will get multiple Mechanic option select anyone of them and you can contact them</li>	
 </ul>
		
	
	</div>
	
</div>
</div>

	<!--CONTACT US-->

<div id="contact" class="contact" style="background-color: #2e2a27">
  <div class="container">
    <div class="row">
      <h2 class="wow fadeInUp">Contact Us</h2>
      <p id="head-para" class="wow fadeInUp" data-wow-delay="0.4s">We would love to hear from you and here is a way to contact us.</p>
      <div class="col-lg-6 col-md-6">
        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.6s">
          <span class="input-group-addon" ></span>
           <form method="POST" action="index.php">
          	<input class="form-control" type="text" name="fname" placeholder="Full Name"></input>
        </div>
        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.0s">
          <span class="input-group-addon" ></span>
          <input class="form-control" type="text"  name="email" placeholder="Email"></input>
        </div>
        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.4s">
          <span class="input-group-addon"></span>
          <input class="form-control" type="text" name="phone" placeholder="Phone Number"></input>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="input-group wow fadeInUp" data-wow-delay="1.6s">
          <textarea class="form-control" name="feedback"  cols="80" rows="6"></textarea>
        </div>
        <button class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s" name="sub_feedback">Submit Your Message</button>
    </form>
      </div>
    </div>
  </div>
</div>






	<!--Footer-->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="img/logo.jpg" width="100" height="100">
					<hr class="light">
					<p><i class="fa fa-phone" aria-hidden="true"></i> 7888965264</p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>greaseMonkey.pg769@gmail.com</p>
					<p><i class="fa fa-home" aria-hidden="true"></i>Jalandhar-Delhi G.T Road(NH-1)</p>
					<p>Phagwara,Punjab(India)-144411</p>	
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Terms and Policy</h5>
					<hr class="light">
					<p> Consumer Warranty</p>
                       <p>  Enterprise Warranty</p>
                       <p> Trademark Usage Policy</p>
                        <p> Terms of Use</p>
				</div>

				<div class="col-md-4">
					<hr class="light">
					<h5>Service Area</h5>
					<hr class="light">
					<p>Jalandhar</p>
                       <p>Pharwara</p>
                       <p> Amritsar</p>
                        <p>Paiala </p>
				</div>

				<div class="col-12">
					<hr class="light100">
					<h5>&copy:greaseMonkey.com</h5>
					
				</div>
				
			</div>
			
		</div>
	</footer>

</body>
</html>



<?php
if(isset($_POST['sub_feedback']))
{
$name=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$feedback=$_POST['feedback'];
$qry="INSERT INTO `feedback`(`name`,`email`, `phone`, `feedback`)
 VALUES('$name','$email','$phone','$feedback')";
 $run=mysqli_query($con,$qry);

 if($run==true)
{
?> <script> alert('Your feedback has been submited, Thanx for your valuble feedback');
</script>
<?php
}
else
{
?> <script> alert('Oops!! there is some problem, pls try again'); </script>
<?php


}
}
?>