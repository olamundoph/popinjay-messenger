<?php
if (!isset($_SESSION)) { 
	session_start(); 
}

if(!isset($_SESSION['id-user']) === TRUE ) {
	unset ($_SESSION['id-user']);
	unset ($_SESSION['name']);
	unset($_SESSION['user-checked']);
	unset($_SESSION['password-checked']);
	header('Location: login.php');
}

?>