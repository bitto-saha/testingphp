<?php


$conn = mysqli_connect('localhost:3306','root','root','first database');

if(!$conn){
  
  echo"<center><h1>connection error</h1></center>";
  
}


if(isset($_REQUEST["btn"])){
  
  $name = $_REQUEST["fname"];
  $email = $_REQUEST["email"];
  $pass = $_REQUEST["pass1"];
  
  
  $sql = "INSERT INTO info(Name, email address, password) VALUES ('$name', '$email', '$pass')";
  
  mysqli_query($conn, $sql);
}

?>