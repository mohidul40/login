<?php
session_start();
// remove all session variables
// session_unset();

// destroy the session
session_destroy();

$_SESSION['checked'] = "Thanks";
header("Location:index.php?id=2");

?>
