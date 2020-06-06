<?php
//mulai sesi
session_start();

//hub db
include "konek.php";

//menjelaskan session
$_SESSION['nama']="";
$row['nama']="0";

//memanggil nama player
$query="SELECT * FROM hasil ORDER BY id DESC LIMIT 1";
$result=mysqli_query($conn, $query);
$no=1;
foreach ($result as $row) {
	$_SESSION['nama']=$row['nama'];
	$_SESSION['email']=$row['email'];
	$no++;
}
if ($_SESSION['nama'] !=$row['nama']) {
	header("Location: 1.php");
} 


//lives awal dan skor awal
$_SESSION['lives']=5;
$_SESSION['skor']=0;
$_SESSION['nama']=$row['nama'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>MATH GAME</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



</head>
<body>
	<div id="grad1">
	<div class="container">
	        <div class="row">
	            <div class="col text-center">
					<form action="soal1.php" method="post">
						<br>
						<br>
						<br>
						<label> <h2 class="monospace">HALO <?php echo $_SESSION['nama'];?>, SELAMAT DATANG KEMBALI DIPERMAINAN INI !</h2> </label>
						<br>
						<button type="submit"> PLAY </button>
						<br>
						<br>
						<br>
						<br>
						<label> <h4 class="monospace" >BUKAN ANDA ?</h4></label>
						<br>
						<a href="1.php"> Klik Disini </a>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>