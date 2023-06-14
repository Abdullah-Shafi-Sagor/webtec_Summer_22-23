<?php 
        if(isset($_POST['submit']))
        {
            if(empty($_POST['name']))
         {
            echo "the name field is empty";
         }
         else
            echo $_POST['name']; 
        }
        
        
     ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>PHP</title>
</head>
<body>

<form method="post">
 Name:<input type="text" name="name"><br>
 Password:<input type="password" name="pass"><br>
 <input type="submit" name="submit">
</form>

</body>
</html>