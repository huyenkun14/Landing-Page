<?php

$connection = mysqli_connect('localhost:3306','root');

mysqli_select_db($connection,"landing_page");

$nameuser = $_POST['nameuser'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userdata`(`nameuser`,`phone`,`email`,`message`) VALUES ('$nameuser','$phone','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>