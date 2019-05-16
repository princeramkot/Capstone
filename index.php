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
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script>
     new WOW().init();
     </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



<!--Naviagtion -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
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
					<a class="nav-link" href="logout.php">Log out</a>
				</li>

			</ul>
			
		</div>
	</div>

</nav>



<!-- Image slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1" ></li>
	<li data-target="#slides" data-slide-to="2" ></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background1.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">GET HOME SERVICE WITH US</h1>
			<h6>24/7 SERVICE | FAIR AND TRANSPARENT PRICING</h6>
			<button type="button" class="btn btn- btn-outline-warning btn-lg">Click to Download the APP
			</button>
			
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/background2.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">GET IMMEDIATE SERVICE WHEN YOUR CAR BROKE ON ROAD</h1>
			<h6>24/7 SERVICE | FAIR AND TRANSPARENT PRICING</h6>
			<button type="button" class="btn btn- btn-outline-warning btn-lg">Click to Download the APP
			</button>
			
		</div>

	</div>

    <div class="carousel-item">
		<img src="img/background3.jpg">
		<div class="carousel-caption">
			<h1 class="display-2">BEST MECHANIC WE HIRED FOR YOUR SATISFACTION</h1>
			<h6>24/7 SERVICE | FAIR AND TRANSPARENT PRICING</h6>
			<button type="button" class="btn btn- btn-outline-warning btn-lg">Click to Download the APP
			</button>
			
		</div>
	</div>

</div>
</div>



<!--JUMBOTRON-->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class=" col-lg-12 ">
			<p class="lead" style="text-align: center;">
				Life’s too short to spend it at the repair shop!
				
			</p>
			</div>
		<div class=" col-lg-12 ">
			
			</div>
		</div>
</div>





<!--WELCOME SECTION-->
<div class="container-fluid padding" style="background-color:white">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">OUR SERVICE NEVER DISAPPOINT CUSTOMERS</h1>
		</div>
		<hr>

		</div>	
	</div>




<!--THREE COLUMN SECTION-->
<div class="container-fluid padding"  style="background-color:white">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-home fa-5x"></i>
      	<h5>WE MAKE IT EASY</h5>
      	<p>Book a service through our APP. Our mechanics will come to your home or office or the place where your vehicle broke down,even during night| Available 24/7.</p>	
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-hand-holding-usd fa-5x"></i>
      	<h5>FAIR AND TRANSPARENT PRICING</h5>
      	<p>We offer fair and transparent pricing and provide estimates upfront for hundreds of services on thousands of cars. Book with confidence.</p>	
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-shield-alt fa-5x"></i>
      	<h5>HAPPINESS GUARANTEED</h5>
      	<p>We only work with highly rated mechanics.</p>	
	</div>
	
</div>
</div>



<!--WE MAKE DIFFERRNT MODELS VEHICLE-->
<div class="container-fluid padding"style="background-color: black;">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">WE SERVICE MOST OF THE MODELS</h1>
		</div>
		<hr>
	</div>
</div>



<!--CAR MODELS-->
<div class="container-fluid padding" style="background-color: black;">
	<div class="row padding">
		
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="BMW" src="img/bmw.png">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">BMW</a>
	</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="toyota" src="img/toyota.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">TOYOTA</a>
		</div>


		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="acura" src="img/acura.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">ACURA</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="chevrolet" src="img/chevrolet.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">CHEVROLET</a>
		</div>


		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="dodge" src="img/dodge.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">DODGE</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="ford" src="img/ford.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">FORD</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="honda" src="img/honda.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">HONDA</a>
		</div>

			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="hyndai" src="img/hyndai.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">HYUNDAI</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="jeep" src="img/jeep.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">JEEP</a>
		</div>


		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="mercedes" src="img/mercedes.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">MERCEDES</a>
		</div>
    

      <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="nissan" src="img/nissan.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">NISSAN</a>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
		<div class="image-space">
			<img class="center-vertical" alt="volkswagen" src="img/volkswagen.png" width="83" height="81">
		</div>
		<a class="btn btn-outline-primary btn-block btn-xs" href="#">VOLKSWAGEN</a>
		</div>
	</div>
	<hr class="my-4">
	</div>

	<!--CONTACT US-->
	<div id="contact" class="contact" style="background-color: #2e2a27">
  <div class="container">
    <div class="row">
      <h2 class="wow fadeInUp">Contact Us / Feedback</h2>
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

	<!--Social sites-->

	<div class="container-fluid padding" style="background-color: white">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect With Us</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				
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