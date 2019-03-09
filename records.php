<?php include_once "insert.php"; ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>




<?php 
		$mysqli = new mysqli('localhost', 'root', '', 'testing') or die(mysql_error($mysqli));
		$result = $mysqli->query("SELECT * FROM tbl_form") or die($mysqli->error);
	 ?>
	<div class= "row justify-content-center">
		<table class="table" align="center">
			<tr>
			    <th>Username</th>
			    <th>Email</th>
			    <th>Mobile</th>
			    <th>Message</th>
			   
			 </tr>
			<?php while($row=$result->fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['message']; ?></td>
				
			</tr>
		    <?php endwhile; ?>
		</table>
	</div>
	
</body>
</html>