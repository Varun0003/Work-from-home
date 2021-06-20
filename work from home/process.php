<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="varun@03";
$db="workfromhome";

$conn= new mysqli($dbhost,$dbuser,$dbpass,$db);
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
    function function_alert($message) { 
        
        echo "<script>alert('$message');</script>"; 
    } 
      
      
    function_alert("logged in successfull"); 
    header("Location:jobs.html");
}
else{
    function function_alert($message) { 
        
        echo "<script>alert('$message');</script>"; 
    } 
      
      
    function_alert("Check your crendentials"); 
    header("Location:login.html");
}
?>