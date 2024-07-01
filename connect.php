<?php
  //Registration

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Database Connection 
  $conn = new mysqli('localhost','root','','ecoharvest');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    
  }else{
    $stmt = $conn->prepare("insert into register(name,email,password)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$password);
    $stmt->execute();
    echo " Registration Successfully ... ";
    $stmt->close();
    $conn->close();
  }


?>
