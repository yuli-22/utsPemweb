<?php
//mulai sesi
session_start();

//koneksi db
include 'konek.php';

//menerima nilai
$nama = $_SESSION['nama'];
$skor = $_SESSION['skor'];
$email =$_SESSION['email'];



//query input ke tabel hasil
mysqli_query($connect, "INSERT INTO hasil VALUES ('$nama', '$skor', '$email', '')");
header("location : end.php");

?>