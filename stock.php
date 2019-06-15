	<html>
	<head>
	<title>Stock List</title>
	<body> 

	<?php
	include('home1.html');
	$sno=1;
	
$conn = new mysqli("localhost", "root", "","medical"); //Making Connection.
 
$sql = "SELECT * FROM medicine";	//Fetching Dlist of data.
$result = $conn->query($sql);
 
if ($result->num_rows > 0) 
	{						// output data of each row
		
?>
	
	<h1 align="center">Stock List</h1>
	
	<table  border="0" align="center"  width="70%">
		<td >Sno.</td><td>M_ID</td><td>Medicine Name</td><td>Qty</td><td>Cost Price</td><td>Selling Price</td>
		</tr>
<?php	
	while($row = $result->fetch_assoc())
		{
		//$pid=$row["pid"];
		$id=$row["m_id"];
		$name=$row["m_name"];
		$qty=$row["qty"];
		$cp=$row["cp"];
		$sp=$row["sp"];
		
?>	
	<tr>
		<td> <?php echo $sno ?> </td>
		<td> <?php echo $row["m_id"] ?> </td>
		<td> <?php echo $row["m_name"] ?> </td>
		<td> <?php echo $row["qty"] ?> </td>
		<td> <?php echo $row["cp"] ?> </td>
		<td> <?php echo $row["sp"] ?> </td>
		
		</tr>
		
	
<?php
	$sno++;
	} 
?>
<tr>		</tr>
<tr>
		<td > <input type="Submit" value="Update"> </td>
		<td>	 <input type="Reset" value="Delete"></td>
		</tr>
	</table>
<?php
	}	
else if($result->num_rows < 0 || $result->num_rows == 0)
    echo "<h1 >No Result Found</h1>";
	
	include('home2.html');
	$conn->close();
?>
	
	</body>
	</html>