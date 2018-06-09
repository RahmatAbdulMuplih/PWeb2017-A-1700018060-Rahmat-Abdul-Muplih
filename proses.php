<?php 
$email = $_POST['inputnama'];
$password = $_POST['inputPassword'];
if ($email=="admin" and $password=="admin") {
	header('Location: profil.php/');
}
else{
	echo "<script>alert('Email dan Password Salah')</script>";
	include 'index.php';
}
 ?>
