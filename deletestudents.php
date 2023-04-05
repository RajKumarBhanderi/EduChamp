<?php
include_once 'database.php';
$sql = "DELETE FROM student WHERE student_id='" . $_GET["student_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
     header("Location: allstudents.php", true, 301);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>