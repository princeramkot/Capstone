<?php

session_start();
if(isset($_SESSION['uid']))
{

}
else
header('location:login_option.php');


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Fullscreen Form Interface</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
			<link rel="shortcut icon" href="../favicon.ico">
			<link rel="stylesheet" type="text/css" href="css/normalize.css" />
			<link rel="stylesheet" type="text/css" href="css/demo.css" />
			<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
	

<p id="demo"></p>
<script>

		var lat,long;
var x = document.getElementById("demo");


  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }


function showPosition(position) {

  x.innerHTML = "Latitude: " + position.coords.latitude + 
 "<br>Longitude: " + position.coords.longitude;






 
}
</script>

		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
					<h1>We Need Some Info To Assist You Better</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"></a>
					</div>
				</div>
				<form id="myform" action="appointment.php" class="fs-form fs-form-full" autocomplete="off" method="POST">
					<ol class="fs-fields">
						<li>
							<label requir=required class="fs-field-label fs-anim-upper" for="q1">What's Your Vechile Name</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Dean Moriarty" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">What's your Current Mobile Number</label>
							<input size=10 class="fs-anim-lower" id="q2" name="q2" type="number" placeholder="9876543210" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Your  Name</label>
							<input class="fs-anim-lower" id="q1" name="nameofuser" type="text" placeholder="Rohan" required/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">Select Service Type</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="conversion"/><label for="q3b" class="radio-conversion">Emergency Service</label></span>
								<span><input id="q3c" name="q3" type="radio" value="social"/><label for="q3c" class="radio-social">Home Service</label></span>
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Normal Service</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your vechile.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describe Your Problem</label>
							<textarea requir=required class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
							<input requir=required class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1-1000"  min="2"/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" >Enter Your Lattitude As Showen Above</label>
							<input requir=required class="fs-anim-lower"  name="lat" type="text"  placeholder="xx.xx" value=""/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" >Enter Your Longitude As Showen Above</label>
							<input requir=required class="fs-anim-lower"  name="long" type="text" placeholder="xx.xx"  />
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit" name="send_to_mec">Send answers</button>
				</form>
				</div><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); 
					}
				} );
			})();
		</script>
	
	</body>
</html>


<?php
if(isset($_POST['send_to_mec']))
{


	

include('dbcon.php');
$vechile_name=$_POST['q1'];
$mobile=$_POST['q2'];
$problem=$_POST['q4'];
$budget=$_POST['q5'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$name=$_POST['nameofuser'];
//<script>document.write(position.coords.latitude);</script> <?php
//<script type="text/javascript">document.write(position.coords.longitude);</script> <?php

 $qry="INSERT INTO `request`(`vechile_name`,`name`, `mobile`, `problem`, `budget`,`lattitude`,`longitude`)
 VALUES('$vechile_name','$name','$mobile','$problem','$budget','$lat','$long')";
 $run=mysqli_query($con,$qry);
?><script type="text/javascript">
	
</script>
<?php

if($run==true)
{
?> <script> alert('Your appointment has been done, you will soon get help');
window.open('index.php','_self');
header('location:index.php');
</script>
<?php
}

else
{
?> <script> alert('Oops!! there is some problem, pls try again'); </script>
<?php
header('location:index.php');

}}
?>
