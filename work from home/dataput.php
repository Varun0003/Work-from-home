<?php
session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="varun@03";
$db="workfromhome";



$conn= new mysqli($dbhost,$dbuser,$dbpass,$db);


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
    
$register_query="insert into registration (fname , lname , email , phone) values('$fname','$lname','$email','$phone')";
if($conn->query($register_query)){
    echo"thanks for contacting us we will get back to you soon";
}else{
    echo"oops something went wrong";
}


?>