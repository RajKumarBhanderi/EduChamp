<?php
include_once 'database.php';
$sql = "DELETE FROM teachers WHERE teachers_id='" . $_GET["teachers_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
     header("Location: allteachers.php", true, 301);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>