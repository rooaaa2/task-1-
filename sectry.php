<?php
session_start();
$con=mysqli_connect('127.0.0.1', 'root','', 'secdata');
$check=mysqli_select_db($con, "secdata");
if ($check){
    echo "connect";
}
?>


