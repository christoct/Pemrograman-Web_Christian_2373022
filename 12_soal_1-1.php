<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373022-Christian Octavianus</title>
</head>
<style>
    table{
        border: solid black 1px;
        border-collapse:collapse;
    }
    td{
        border: solid black 1px;
    }
    .header {
        border: solid black 1px;
        background-color:gainsboro;
        font-size:2em;
        text-align:center;
    }
    .keterangan{
        width: 150px;
        font-size:12px;
    }
    select{
        font-size:12px;
    }
    .end{
        text-align:right;
        font-size:12px;
    }
    .teks{
        font-size:12px;
    }
    .peringatan{
        color:red;
        font-weight:bold;
    }
</style>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="form" >
    <table>
        <tr>
            <td colspan="2" class="header">Add Profile</td>
        </tr>
        <tr>
            <td class ="keterangan">Name</td>
            <td>
                <input type="text" name="nama" size="22"  class="teks">
            </td>
        </tr>
        <tr>
            <td class ="keterangan">Position</td>
            <td>
                <select name="posisi" id="">
                    <optgroup label="Programmer">
                        <option value="Senior Programmer">Senior Programmer</option>
                        <option value="Junior Programmer">Junior Programmer</option>
                    </optgroup>
                    <optgroup label="Analyst">
                        <option value="Senior Analyst">Senior Analyst</option>
                        <option value="Junior Analyst">Junior Analyst</option>
                    </optgroup>
                </select>
            </td>
        </tr>
        <tr>
            <td class ="keterangan">Password</td>
            <td>
                <input type="text" name="pass" id="" size="18" class="teks">
            </td>
        </tr>
        <tr>
            <td class ="keterangan">Confirm Password</td>
            <td>
                <input type="text" name="confirm" id="" size="18" class="teks">
            </td>
        </tr>
        <tr>
            <td colspan="2" class="end">
                <input type="submit" value="Reset" class="teks" name="reset">
                <input type="submit" value="Save" class="teks" name="save">
            </td>
        </tr>
    </table>
    </form>

    <?php
    $nama= $_POST["nama"] ;
    $password= $_POST["pass"];
    $confirm = $_POST["confirm"];
    $posisi = $_POST["posisi"];

    $peringatan_nama="";
    $peringatan_password="";
    $peringatan_confirm="";
    $peringatan_unmatch="";
    $next_page=true;
        if(empty($nama)){
        $peringatan_nama= "<div class='peringatan'>Input Nama belum diisi!</div>";
        $next_page=false;
        }else{
        $peringatan_nama="";
        }
    
        if(empty($password)){
        $peringatan_password= "<div class='peringatan'>Input Password belum diisi!</div>";
        $next_page=false;
        }else{
        $peringatan_password="";
        }
    
        if(empty($confirm)){
        $peringatan_confirm= "<div class='peringatan'>Input Confirm Password belum diisi!</div>";
        $next_page=false;
        }else{
        $peringatan_confirm="";
        }
    
        if($confirm!=$password && !empty($confirm)&& !empty($password)){
        $peringatan_unmatch ="<div class='peringatan'>Password dan Confirm Password belum sama!</div>";
        $next_page=false;
        }else{
        $peringatan_unmatch="";
        }
    if(isset($_POST['reset'])){
        $peringatan_nama="";
        $peringatan_password="";
        $peringatan_confirm="";
        $peringatan_unmatch="";
        $next_page=false;
    }
    if($next_page==false){
        echo ("$peringatan_nama  $peringatan_password
        $peringatan_confirm  $peringatan_unmatch");
    }else if($next_page==true && $_SERVER['REQUEST_METHOD']==='POST'){
        $_SESSION['nama']= $_POST['nama'];
        $_SESSION['posisi']= $_POST['posisi'];
        header("Location: 12_soal_1-2.php");
        exit();
    }
    ?>
</body>
</html>