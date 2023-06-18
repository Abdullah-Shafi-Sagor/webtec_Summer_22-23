<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="GET")
{
	if(isset($_GET['submit']))
	{
      $_SESSION['name']='abd';
      echo $_SESSION['name'] ;
	}
	elseif(isset($_GET['submit2']))
	{
		session_destroy();
		echo "Destroy";
	}

}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="get">
		Start<input type="submit" name="submit">
        Destroy<input type="submit" name="submit2">
	</form>
 
</body>
</html>