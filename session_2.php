<?php
session_start();
if(isset($_SESSION['name']))
{
echo "ok";
}
else
{
    header('location:session.php');
}
?>
