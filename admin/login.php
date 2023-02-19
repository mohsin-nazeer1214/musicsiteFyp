
<?php
error_reporting(0);
session_start();
    $conn = new mysqli("localhost", "root", "", "music_world");

  $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "select *from admin where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

          $_SESSION['email'] = $row['email'];
          $_SESSION['username'] = $row['username'];
$_SESSION['id'] = $row['id'];
                
        header("location:index.php");
        }  
        else{  
            echo "<p>Email or password Not correct</span></p>
";  
        }     

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <style type="text/css">
      

      body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#6abadeba;  
    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #23463f;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
}  
.crimson-text {
      color: crimson;
   }
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
span{  
    color: black;  
    font-size: 17px;  
}  
a{  
    float: right;  
    background-color: grey;  
} .btn {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: black;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.btn:active {
  transform: scale(0.95);
}
.btn:focus {
  outline: none;
}
.btn.ghost {
  background-color: transparent;
  border-color: #FFFFFF;
}
    </style> 
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="">    
        <label><b>User Email     
        </b>    
        </label>    
        <input type="text" name="email" id="Uname" placeholder="email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
       <button type="submit" class="btn" name="submit">Login</button>      
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
  
    </form>     
</div>    
</body>    
</html>     