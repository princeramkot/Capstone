<?php
include('dbcon.php');
fun()
{
 $username=$_POST['user'];
 $password=$_POST['password'];
 $qry="select * from creds where name='$username' and password='$password'";
 $run=mysqli_query($con,$qry);
 $row=mysqli_num_rows($run);
 if($row<1)
 {
 	?> <script>alert("password or username is incorrect");
 	window.open('login.php',_self);
 	</script>
 	<?php
 }

 else{
 	
 	$data=mysqli_fetch_assoc($run);
 	$id=$data['id'];
 	session_start();
 	$_SESSION['uid']=$id;
 	header('location:index.html');
 }
}
?>