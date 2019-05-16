<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate1.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
<?php
include('dbcon.php');

$identiy=$_SESSION['uid'];
$sql1="SELECT name from creds where id=$identiy";
$result1=$con->query($sql1);

$data1=mysqli_fetch_assoc($result1);
$nameofuser=$data1['name'];

$sql = "SELECT vechile_name, mobile, problem, budget,lattitude,longitude FROM request where name like '$nameofuser'"; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
   ?>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Vechile_Name</th>
								<th class="column2">Mobile</th>
								<th class="column3">Problem</th>
								<th class="column4">Budget</th>
								<th class="column5">Lattitude</th>
								<th class="column6">Longitude</th>
							</tr>
							<?php
			$count=1;  
			while($data=mysqli_fetch_assoc($result))
			{
				?>
						</thead>
						<tbody>
								<tr>
									<td class="column1"><?php echo $data['vechile_name']; ?> </td>
									<td class="column2"><?php echo $data['mobile']; ?> </td>
									<td class="column3"><?php echo $data['problem']; ?> </td>
									<td class="column4"><?php echo $data['budget']; ?> </td>
									<td class="column5"><?php echo $data['lattitude']; ?> </td>
									<td class="column6"><?php echo $data['longitude']; ?> </td>
								</tr>
								<?php
			}
			?>
						</tbody>
					</table>
					<?php
		
} else {
    echo "You Have't booked any appointment yet!";
}
?>
</br>
<div class="mybutton"><form action="status.php" method="POST">

<button name="cancle"  value="Cancle Appointment">Cancle Appointment</button></div>
<div class="mybutton">
<button name="got_help"  value="Got Help">Got Help</button></div>
</form>
<?php
if (isset($_POST['cancle'])) 
{
    
$sql3 = "DELETE from request where name like '$nameofuser'";
$result3 = $con->query($sql3);
if($result3==true)
{
	?><script type="text/javascript">alert("Your appointment has been cancled");
window.open("index.php","_self");</script>
<?php

}

  }

  if (isset($_POST['got_help'])) 
{
    
$sql3 = "DELETE from request where name like '$nameofuser'";
$result3 = $con->query($sql3);
if($result3==true)
{
	?><script type="text/javascript">alert("Thanx for Your Patience!! We are happy to help You");
window.open("index.php","_self");</script>
<?php

}

  }





?>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>