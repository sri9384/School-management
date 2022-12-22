<?php
$con = mysqli_connect('localhost', 'root', '','school');
$username = $_POST['username'];
$email = $_POST['email'];
$password= $_POST['password'];
$sql = "INSERT INTO `register` (`username`, `email`, `password`) VALUES ( '$username', '$email', '$password')";
$rs = mysqli_query($con, $sql);
if($rs)
{
	header("Location:index.html");
}

?>
