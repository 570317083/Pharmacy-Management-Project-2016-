
<html>
<head>
<title>
Login Page
</title>
<body> 

<?php
include('home1.html');
?>

<form action="doregister.php" method="GET">
<h1 align="center"><br><br>Register as Staff</h1> 
<table align="center"  >
<tr> <br></tr>

<tr>
	<td> Enter ID </td>
	<td> <input type="text" name="sid" placeholder="ID"> </td>
	</tr>
<tr>
	<td> Enter Name </td>
	<td> <input type="text" name="name" placeholder="Name"> </td>
	</tr>
	
<tr>
	<td> Enter Mobile Number:</td>
	<td> <input type="number" name="mob" placeholder="+91"> </td>
	</tr>
	
<tr>
	<td> Enter Password </td>
	<td> <input type="Password" name="pass1" placeholder="Password"></td>
	</tr>
<tr>
	<td> Confirm Password </td>
	<td> <input type="Password" name="pass2" placeholder="Confirm Password"></td>
	</tr>
<tr>
	<td> E-mail </td>
	<td> <input type="text" name="email" placeholder="xyz@gmail.com"></td>
	</tr>		

<tr>
	<td> </td>
	<td> <input type="Submit" value="Register">
	     <input type="Reset" value="Clear"></td>
	</tr>
</table>

</form>

<?php
include('home2.html');

?>

</body>
</html>