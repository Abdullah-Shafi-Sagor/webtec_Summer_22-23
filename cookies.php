<?php
setcookie('username','XYZ',time()+20);
if(isset($_COOKIE['username']))
{
    echo "Cookie is set";
}
else
{
    echo "not set";
}
?>