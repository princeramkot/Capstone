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
					<a href="payment.php">Purchase Membership</a>&nbsp&nbsp
					<a href="show_request1.php">Refresh</a>
<?php
include('dbcon.php');

$sql = "SELECT vechile_name, mobile, problem, budget,lattitude,longitude FROM request";
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
								<th class="column6">Track</th>
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
									<td class="column7"><a href="currentLocation.php">Click Me </td>
								</tr>
								<?php
			}
			?>
						</tbody>
					</table>
					<?php
		
} else {
    echo "0 results";
}
$con->close();

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