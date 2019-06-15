<?php

$sid = $_GET['uid'];
$pass = $_GET['pass'];

$conn = new mysqli("localhost", "root", "","medical");
 
if ($conn->connect_error) {
	echo "<h1>Not Connected</h1>";
	}
else{ 
	echo "Connected successfully";
	}

$sql = "select * from user where u_id='".$sid."' and pass=".$pass." ";

$result = $conn->query($sql);

if ($result == TRUE) 
	{
		echo "You are Loged In";
			if ($result->num_rows > 0)// output data of each row 
			{
				while($row = $result->fetch_assoc()) {
					$uname=$row["u_name"];
					echo ".$u_name.";
				}		
			header("Location:home.php");
			} 
			else {
				header("Location:login.php");
			}
	}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
$conn->close();
exit();
?>