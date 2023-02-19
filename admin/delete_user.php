<?php
    $conn = new mysqli("localhost", "root", "", "music_world");

$sql = "DELETE FROM members WHERE member_id='" . $_GET["member_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>