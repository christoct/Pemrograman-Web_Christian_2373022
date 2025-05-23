<?php session_start();
$cek=$_SESSION['cek']?? null;
$username= $_SESSION['username']??'Guest';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373022-Christian</title>
</head>
<style>
    .back{
        font-size: 2em;
        font-weight: bold;
    }
    .benar{
        font-size:50px;
        font-weight: bold;
        color:blue;
    }
    .salah{
        font-size: 2em;
        font-weight: bold;
        color:red;
    }
    .nama_salah{
        font-size: 1em;
        font-weight: bold;
        color:black;
    }
</style>
<body>
    <?php
    if($cek==true){
        echo("<div class= 'back'> Login berhasil! <br> Selamat datang,
        <span class='benar'>$username</span>.</div>");
    }else{
        echo("<div class = 'salah'> Username : <span class='nama_salah'>$username</span> Tidak Terdaftar!</div>");
    }
    echo("<br><a href = '12_soal_2-1.php' class='back'> kembali ke halaman login</a>")
    ?>
</body>
</html>