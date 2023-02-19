<?php
session_start();
    $conn = new mysqli("localhost", "root", "", "music_world");

  $email = $_POST['email'];  
    $password = $_POST['password']; 

        $sql = "select * from members where email = '$email' and password = '$password'";  
        //  var_dump($sql);
        $result = mysqli_query($conn, $sql);  
   
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
           
        if($count == 1){  

          $_SESSION['email'] = $row['email'];
          $_SESSION['name'] = $row['name'];
$_SESSION['member_id'] = $row['member_id'];
                
        header("location:index.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

?>