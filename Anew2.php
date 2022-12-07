<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$iname = $_POST['iname'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];

$query="insert into registration1(fname, mname, lname, iname, number, address, email, password)
values('$fname', '$mname', '$lname', '$iname', '$number', '$address', '$email', '$password');";
$result = mysqli_query($con,$query);


}