<?php
        include 'DB_connection.php';
        
  if(isset($_POST['login']))
    {
     
          $username = $_POST['username'];
          $password = $_POST['password'];

           $sql = "SELECT id,username FROM users WHERE username= '{$username}' AND password= '{$password}' ";
           $result = mysqli_query ($con, $sql);
              

              if(mysqli_num_rows($result)>0)
                 while ($row = mysqli_fetch_assoc($result)){
                
                session_start();
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["id"] = $row['id'];

                    header("Location: {$localhost} /Task_management_system/index.php");                
            }
            else{
                $_SESSION['message'] = "User Not Available";
                $_SESSION['message_code'] = "error";

             header("Location: login.php");
            exit(0);
            }
          }
        
        ?> 