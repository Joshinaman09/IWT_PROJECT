<!-- $name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password']; -->

<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    // die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection was successful<br>";
// }

// $name = 'name';
$username = 'username';
// $email = 'email';
// $address = 'address';
$password = 'password';
// $confirm_password = 'confirm_password';

$sql="INSERT INTO `newusers` (`username`,`password`) VALUES ('$username','$password ')";

$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}

// else{
//     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }