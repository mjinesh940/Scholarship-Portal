<?php
session_start();
// Perform the login check here
$host = "localhost";
$password = "";
$user = "root";
$database = "login";



$conn = mysqli_connect($host,$user,$password,$database);

if (!$conn){
    die("connection failed". mysqli_connect_error());
    }
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo $name;
    // Use the retrieved data as needed
    $sql_insert = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    if(mysqli_query($conn,$sql_insert)) {
        echo "Record Inserted Succesfully!";
        }
        else {
        echo"could not insert record";
    }
}
if (isset($_GET['email']) && isset($_GET['password'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $sql_sel = "SELECT * FROM user WHERE email = '$email' and password= '$password'";
    $result = mysqli_query($conn,$sql_sel);
    if(mysqli_num_rows($result) == 1) {
    //echo "Data";
    header("Location: home.html");
    }
}
mysqli_close($conn);
?>
