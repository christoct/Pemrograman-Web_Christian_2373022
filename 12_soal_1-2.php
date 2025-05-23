<?php session_start();?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373022-Christian Octavianus</title>
</head>
<style>
    .header{
        background-color:gainsboro;
    }
    td{
        padding:5px
    }
</style>
<script>
    
</script>
<body>
    <table>
        <tr>
            <td colspan="3" class="header">Data yang Anda Masukkan!</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php $nama=$_SESSION['nama']??'Guest';
                echo($nama); ?></td>
        </tr>
        <tr>
            <td>Position</td>
            <td>:</td>
            <td><?php $posisi=$_SESSION['posisi']??'Random';
                echo($posisi); ?></td>
        </tr>
        <tr>
            <td colspan="3" class="back">
            <a href="12_soal_1-1.php">back</a></td>
        </tr>
    </table>
</body>
</html>