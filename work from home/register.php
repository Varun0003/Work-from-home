<?php

session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="workfromhome";


$conn= new mysqli($dbhost,$dbuser,$dbpass,$db);

$username=$_POST['username'];
$password=$_POST['password'];
    
$sql = "SELECT * FROM user WHERE username='$username'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"username already taken";
}else{
    $reg = "insert into user(username , password) values('$username' , '$password')";
    mysqli_query($conn,$reg);
    function function_alert($message) { 
        
        echo "<script>alert('$message');</script>"; 
    } 
      
      
    function_alert("Registration successfull"); 
}
    header("Location:login.html");

      
 ?> 