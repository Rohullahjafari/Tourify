<?php
$conn=mysqli_connect("localhost","root","","projeuni");
if($conn->connect_error){
die("Connection field:".$conn->connect_error);
}
?>