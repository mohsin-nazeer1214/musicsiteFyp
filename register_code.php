<?php 
if(isset($_POST['submit']))
{  

      $conn = new mysqli("localhost", "root", "", "music_world");

   $name = $_POST['name'];
  $email = $_POST['email'];
   $password = $_POST['password'];

   
     $sql = "INSERT INTO members (name,email,password)
   VALUES ('$name','$email','$password')";
   if (mysqli_query($conn, $sql)) {
    header("location:index.php");
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>