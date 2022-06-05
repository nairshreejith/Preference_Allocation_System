<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$username = "root";
$password = "";
$db = "student";
$student = $_GET['a'];
$p1 = $_GET['pr1'];
$p2 = $_GET['pr2'];
$p3 = $_GET['pr3'];
$p4 = $_GET['pr4'];
$p5 = $_GET['pr5'];
$per = $_GET['b'];
$conn = mysqli_connect($localhost,$username,$password,$db);
if(!$conn)
{
echo "Connection error : " .mysqli_connect_error();
}
else{
echo "Connection Established";
}
}
?>