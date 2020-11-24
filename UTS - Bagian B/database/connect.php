<?php 
	$host = "localhost";
	$user = "elmaleek_bola";
	$pass = "Sangutiis123!";
	$dbname = "elmaleek_bola";

	$conn = new mysqli($host,$user,$pass,$dbname);

	if ($conn->connect_error) {
		die("Koneksi gagal : ".$conn->connect_error);
	}
?>