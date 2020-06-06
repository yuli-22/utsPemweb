<?php
//mulai sesi
session_start();

//hub db
include "konek.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MATH GAME</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="container">
	        <div class="row">
	            <div class="col text-center">
	            <form action ="cek.php" method="post">
	            	<br>
	            	<br>
	            	<br>
	                <h3>MATH GAME</h3>
	                <h6> Hello <?php echo $_SESSION['nama'];?>, Selamat Jawaban Anda Benar</h6> </label>
	                <h6> Lives : <?php echo $_SESSION['lives'];?>  Skor : <?php echo $_SESSION['skor']; ?></h6> </label>
	                <br>
					<a href="soal1.php"> Pertanyaan Berikutnya </a>
	            </form>
	            </div>
	        </div>
	    </div>
</body>

</html>