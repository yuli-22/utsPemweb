
<?php
    session_start();

    //hub db
    include "konek.php";


    if(isset($_POST["submit"])){
        if($_POST["total"] == $_SESSION['hasil']){
            $_SESSION['skor'] += 10 ;
        	header("Location: benar.php");    
        } else {
            $_SESSION['skor'] -=2 ;
            $_SESSION['lives'] -=1  ;
            if ($_SESSION['lives']>0) {
            	header("Location: salah.php");
            } else{
            	header("Location: end.php");
            }
        }
    }
?>