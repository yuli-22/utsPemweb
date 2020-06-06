<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH GAME</title>

<style>
.tengah{
position: absolute;
margin-top: -100px;
margin-left: -200px;
left: 50%;
top: 50%;
width: 400px;
height: 220px;
background-color: white;
}
</style>

</head>
<body>
    <div align="center" class="tengah">
    <form action="" method="POST">
        <fieldset>
            <legend align="center">MATH GAME</legend>
            <p align="center">Masukkan Nama Anda : </p>
            <input position="center" type="text" name="nama" required>
            <p align="center">Masukkan Email Anda : </p>
            <input type="text" name="email" required>
        </fieldset>
        <input type="submit" name="submit" value="submit">
    </form>
    </div>
</body>
</html>
<?php
    //mulai session
    session_start();
    include "konek.php";

    if(isset($_POST['nama'])){
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['email'] = $_POST['email'];
        header("Location: soal1.php");
    }
?>
