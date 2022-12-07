<?php
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$iname = $_POST['iname'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "miniproject";

$conn = new mysqli("localhost","root","","miniproject");
if($conn->connect_error){
  die('Connection failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(fname, mname, lname, iname, number, address, email, password)
  values(?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssisss",$fname, $mname, $lname, $iname, $number, $address, $email, $password);
  $stmt->execute();
  echo "registration successfull";
//   header("Location: Aexist.html");
  $stmt->close();
  $conn->close();

}
?>