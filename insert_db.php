<?php 
include 'DB_connection.php';
if(isset($_POST['submit'])){

   
    $full_name   = $_POST['full_name'];
    $username = $_POST['username'];
    $email  = $_POST['email'];
    $password   = $_POST['password'];
    
    
    
   

  //insert

 $sql = mysqli_query($con,"INSERT INTO users(full_name,username,email,password) values('$full_name','$username','$email','$password')");

if($sql){
    echo "Connection Succesfull";
}else
{
    echo "Not Connection";
}
}