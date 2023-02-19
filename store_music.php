<?php 
session_start();

if(isset($_POST['submit'])) {  
    $conn = new mysqli("localhost", "root", "", "music_world");
    
    $music_title = $_POST['music_title'];
    $music_description = $_POST['music_description'];
    $singer_name = $_POST['singer_name'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "user_music/" . $filename;
    move_uploaded_file($tempname, $folder);
   
    // Get the current session ID
   $id=$_SESSION['member_id'];

    $sql = "INSERT INTO user_playlist (music_title, music_description, singer_name, filename, user_id)
            VALUES ('$music_title', '$music_description', '$singer_name', '$filename', '$id')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("location:playlist.php");
    }
}
?>
