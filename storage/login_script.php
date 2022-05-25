<?php
    require 'dbconnect.php';
    session_start();

    if(empty($_POST["name"]) || empty($_POST["password"]))
    {
         echo '<script>alert("Both Fields are required")</script>';
    }
    else
    {
         $name = mysqli_real_escape_string($connect, $_POST["name"]);
         $password = mysqli_real_escape_string($connect, $_POST["password"]);
         $query = "SELECT * FROM users WHERE name = '$name'";
         $result = mysqli_query($connect, $query);
         if(mysqli_num_rows($result) > 0)
         {
              while($row = mysqli_fetch_array($result))
              {
                   if(password_verify($plaintext, $hashed)
                   {
                        //return true
                        $_SESSION['email']=$email;
                        $_SESSION['id']=$row['id'];
                        header("Location:items.php");

                   }
                   else
                   {
                        //return false
                        echo '<script>alert("Wrong User Details")</script>';
                   }
              }
         }
         else
         {
              echo '<script>alert("Wrong User Details")</script>';
         }
    }
 ?>
<!-- if(password_verify($plaintext, $hashed) -->
