<?php
$servername="localhost";
$username="root";
$password="";
$dbname="abd";
$conn=new mysqli($servername,$username,$password,$dbname);
$sql="select * from ab";
$result=$conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
      <table border="1">
      	<tr>
      		<th>Id</th>
      		<th>Name</th>
      		<th>Address</th>
      		<th>Option</th>
      	</tr>
      <?php while ($row=$result->fetch_assoc()) {?>
	
      	<tr>
      		<td><?php echo $row["Id"] ; ?></td>
      		<td><?php echo $row["Name"] ; ?></td>
      		<td><?php echo $row["Address"] ; ?></td>
      		<td><a href="<?php echo $row["Id"] ; ?>">	<input type="submit" name=""> </a> </td>

      	</tr>

     <?php } ?>
      </table>
</body>
</html>