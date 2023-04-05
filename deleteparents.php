<?php
include_once 'database.php';
$sql = "DELETE FROM parents WHERE parent_id='" . $_GET["parent_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
     header("Location: allparents.php", true, 301);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>