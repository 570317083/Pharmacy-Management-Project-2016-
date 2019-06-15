<?php

$sid = $_GET['sid'];
$name = $_GET['name'];
$mob = $_GET['mob'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$email = $_GET['email'];

$conn = new mysqli("localhost", "root", "","medical");
 
if ($conn->connect_error) 
	echo "Not Connected";
else
	echo "Connected successfully";

if($pass1==$pass2)
{
	echo "connecting";
	$sql="insert into user (u_id,U_name,pass,mob,email) values(".$sid." ,'".$name."', '".$pass1."' , ".$mob.",'".$email."')";
	echo "Successful";
}
else 
	echo "Password not match";

if($conn->query($sql) === TRUE) 
	{
		header('Location:home.php');		
	}

$conn->close();
?>
