<?php


$conn = mysqli_connect("localhost","root","","learn2pentest");

$reg_username = $_POST['reg_username'];
$reg_password = $_POST['reg_password'];

$sql = "SELECT * FROM learn2pentest WHERE username = '$reg_username'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['password'] == $password)
{
	header('Location: /pro/loggedin/Main.html');
}
else
{
	header('Location: login.html');
}

?>
