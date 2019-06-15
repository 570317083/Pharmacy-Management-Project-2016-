<html>
<head>
<title>
Login Page
</title>
<body>
<?php
include('home1.html');
?>
<form action="dologin.php" method="GET">
				<table border="0" align="center" cellpadding="2" cellspacing="4">
	<tr>
		<td width="123"> Enter User ID&nbsp;</td>
		<td width='152'><Input type="text" name="uid" Size=20> </td>
	</tr>
	<tr>
		<td width="123"> Enter Password</td>
		<td width='152'><Input type="password" name="pass" Size=20> </td>
	</tr>
	</form>
	<tr>
		<td width="123">&nbsp;</td>
		<td width='152'><Input type="submit" Value="Login"> </td>
	</tr>
	<tr>
		<td colspan="2"><a href="register.php">New User</a></td>
	</tr>
</table>
</form>
<?php
include('home2.html');
?>
</body>
</html>
