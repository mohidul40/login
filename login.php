<?php
include('common/db.php');

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);

}

$sql = "SELECT * FROM  register WHERE email =  '$email' AND pass = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {	
	session_start();
	$_SESSION['checked']= "loging";
	 header('Location: admin.php');

}else{
	 header('Location: index.php?ms=2');
}
?>