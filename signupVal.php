<?php
$a = $_POST["signupUsername"];
$b = $_POST["signupPassword"];

$host='localhost';
$user='root';
$password='';
$dbname='varun';
session_start();
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con)
die("connection issue".mysqli_connect_error());
else
echo'connected successfully';
$sql="INSERT INTO `user`(username,password)
VALUES ('$a', '$b')";
if(mysqli_query($con,$sql))
echo"<br> user added successfully";
else
echo'entry not created';

mysqli_close($con);
header("Location: http://localhost/varun/index.php");
// exit;
?>