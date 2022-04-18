<?php
include('common/db.php');
$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM register WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: admin.php?del=3');
} else {
    header('Location: admin.php?del=4');
}



?>