<?php
session_start();
$title=$_POST['title'];
session_start();
$email=$_SESSION['veri'];
include 'database.php';
$sql = "INSERT INTO todos(title, email) VALUES ('$title', '$email')";
$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
?>