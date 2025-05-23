<?php session_start();?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373022-Christian Octavianus</title>
</head>
<style>
    .tittle{
        font-size:4em;
        color:white;
        background-color: darkblue;
        height:100px;
        text-align:center;
        vertical-align: middle;
        padding-top:10px;
    }
    .keterangan{
        font-size: 20px;
    }
    .label{
        font-size:20px;
        width:220px
    }
    .tombol{
        font-size:16px;
    }
    .isi{
        font-size: 16px;
        height:25px;
        margin: 3px;
    }
</style>
<body>
    <form action="" method="post">
        <div class="tittle">Login</div>
        <table>
            <tr>
                <td class="label">Username</td>
                <td><input type="text" name="username" class="isi" size="30"></td>
            </tr>
            <tr>
                <td class= "label">Password</td>
                <td><input type="text" name="password" class="isi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="login" class="tombol"></td>
            </tr>
        </table>
        <hr>
        <span class="keterangan">@UKM2024</span> <br>
        <span class="keterangan">Christian-2373022 &copy;</span>
    </form>
    <?php
    $username = $_POST['username'];
    $password= $_POST['password'];
    $cek=false;
    if($username=="admin"&& $password=="admin"){
        $cek=true;
    }
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $_SESSION['cek']=$cek;
        $_SESSION['username']=$_POST["username"];
        header("Location: 12_soal_2-2.php");
        exit();
    }
    ?>
</body>
</html>