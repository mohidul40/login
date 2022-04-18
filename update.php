<?php
include('common/db.php');

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
}

$sql = "UPDATE register SET name='$name', email='$email', pass='$pass', address='$address', mobile='$mobile'  WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: admin.php?msg=1');

} else {
    header('Location: admin.php?msg=2');
}


?>