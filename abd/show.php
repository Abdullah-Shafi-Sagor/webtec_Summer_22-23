<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show</title>
</head>
<body>
     <?php 
         if(empty($_POST['name']))
         {
         	echo "the name field is empty";
         }
         else
         	echo $_POST['name'];
        
     ?>
</body>
</html>