<?php
//mulai sesi
session_start();

//hub db
include "konek.php";

//variabel
$number1=rand(0,20);
$number2=rand(0,20);
$_SESSION['hasil']=$number1+$number2;
?>

<!DOCTYPE html>
<html>
<head>
	<title>MATH GAME</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body >
	<div id="main">
	<div class="container">
	        <div class="row">
	            <div class="col text-center">
	            <form action ="cek.php" method="post">
	            	<br>
	            	<br>
	            	<br>
	                <h3>MATH GAME</h3>
	                <h6> Hello <?php echo $_SESSION['nama'];?>, Tetap Semangat ya, you can the best</h6> </label>
	                <h6> Lives : <?php echo $_SESSION['lives'];?>  Skor : <?php echo $_SESSION['skor']; ?></h6> </label>
	                <br>
	                <br>
	                <br>
	                <p>Pertanyaan : </p>
	                <h3> <?php echo $number1; ?> + <?php echo $number2; ?> </h3> 
	                <label for="">Silahkan masukkan jawaban kamu !</label>
	                <br>
	                <input type="text" name="total">
		              <p>
	                	<input type="submit" name="submit" value="submit" />
	            	</p>
	            </form>
	            </div>
	        </div>
	    </div>
	</div>
</body>

</html>