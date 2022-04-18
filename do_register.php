<?php 
include('common/db.php');

if(isset($_POST['reg'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];

}


$sql = "INSERT INTO register (name, email, pass, address, mobile)
VALUES ('$name', '$email', '$pass', '$address', '$mobile')";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php?msg=1');
} else {
   header('Location: register.php?msg=2');
}

?>