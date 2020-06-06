<?php
//mulai sesi
session_start();

//hub db
include "konek.php";

 	$qr="SELECT * FROM hasil";
    $res=mysqli_query($conn, $qr);
    $id = mysqli_num_rows($res);
    $row=$id+1;

$query="INSERT INTO hasil set nama='".$_SESSION['nama']."', email='".$_SESSION['email']."', skor='".$_SESSION['skor']."', id='".$row."'";
$result=mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<br>
	<br>
	<br>
	<title>MATH GAME</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <style type="text/css">
		body {
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
		}
		
		/* Table */
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;

		}
		.demo-table {
			border-collapse: collapse;
			font-size: 13px;
		}
		.demo-table th, 
		.demo-table td {
			border-bottom: 1px solid #e1edff;
			border-left: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.demo-table th, 
		.demo-table td:last-child {
			border-right: 1px solid #e1edff;
		}
		.demo-table td:first-child {
			border-top: 1px solid #e1edff;
		}
		.demo-table td:last-child{
			border-bottom: 0;
		}
		caption {
			caption-side: top;
			margin-bottom: 10px;
		}
		
		/* Table Header */
		.demo-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
		
		/* Table Body */
		.demo-table tbody td {
			color: #353535;
		}
		
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.demo-table tbody tr:hover th,
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			transition: all .2s;
		}
	</style>



</head>
<body>
	<div class="container">
	        <div class="row">
	            <div class="col text-center">
	            	<br>
	            	<br>
	                <h2>MATH GAME</h2>
	                <br>
	                <h6> Hello <?php echo $_SESSION['nama'];?>, Sayang Permainan Sudah Selesai. Semoga Kali Lain Bisa Lebih Baik !</h6> </label>
	                <h6> Lives : <?php echo $_SESSION['lives'];?>  Skor : <?php echo $_SESSION['skor']; ?></h6> </label>
	                <br>
	                <a href="index.php"> Main Lagi </a>
	                <br>
	                <br>
	            </div>
	        </div>
	    </div>


	<table class="demo-table responsive" >
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Skor</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
			$sql = 'SELECT * FROM hasil ORDER BY skor DESC';
			$hsl = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($hsl) AND $no < 11){
				echo '<tr>
						<td>'.$no.'</td>
						<td>'.$row['nama'].'</td>
						<td>'.$row['skor'].'</td>
					</tr>';
				$no++;
			}
		?>
	</table>
</body>
</html>