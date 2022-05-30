<?php

$username = $_POST['username'];
$email = $_POST['email'];
$bus_no = $_POST['bus_no'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// echo $username;
// echo $address;
// echo $password;
// echo $confirm_password;

$conn = mysqli_connect("localhost","root","","project");
if(!$conn){
    echo "not connected";
}
else{
    echo "connected";   
}

// if(!empty($username) || !empty($address) || !empty($password) || !empty($confirm_password));
    // $query = "INSERT INTO `usersdetails` (`username`, `email`, `address`, `password`, `confirm_password`) VALUES ('$username', '$email', '$address', '$password', '$confirm_password')";
   $sql = "INSERT INTO `newusers` (`username`, `email`, `bus_no`, `address`, `password`, `confirm_password`) VALUES ('$username', '$email', '$bus_no', '$address', '$password', '$confirm_password')";

// $sql = "INSERT INTO `newusers` (`username`, `email`, `bus_no`, `address`, `password`, `confirm_password`) VALUES ('$username', 'bbb', '1', 'sdd', '12234', '12234',);
    $result = mysqli_query($conn,$sql);     
    header("location: login.php");

?>