<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$iname = $_POST['iname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];



$conn = new mysqli('localhost','root','','users135');
if($conn->connect_error){
  die('Connection failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(fname, lname, iname, email, password, number)
  values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssi",$fname, $lname, $iname, $email, $password, $number);
  $stmt->execute();
  echo "registration successfull";
  header("Location: login.html");
  $stmt->close();
  $conn->close();

}
?>
