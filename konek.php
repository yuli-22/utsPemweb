<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='db_game';
$conn=mysqli_connect("localhost", "root", "", "db_game");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal" . mysqli_connect_errno();
}

?>