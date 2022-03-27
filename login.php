<?php
session_start();
include "koneksi.php";


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <title>My Portofolio | Fauzi Alamsyah</title>
</head>
<body id="home">

<!-- Login -->
<form action="" method="POST">
<table align="center">
<tr>
    <th colspan="2" height="40" text-center> LOGIN FORM</th>
</tr>
<tr>
    <td width="100">Username</td>
    <td> <input type="text" name="username"></td>
</tr>
<tr>
    <td width="100">Password</td>
    <td> <input type="password" name="password"></td>
</tr>

<tr>
    <td></td>
    <td> <input type="submit" value="Login" name="presslog"></td>
</tr>

<tr>
    <th colspan="2" height="40" text-center>Belum punya akun? <a href="signup.php">Klik Disini</a> Untuk Daftar</th>
</tr>

</form>
<!-- Akhir Login -->

</body>

<!-- Fungsi Login -->
<?php
if(isset($_POST['presslog'])){
    $sql = mysqli_query($koneksi, "select * from users where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION[ 'username' ] = $_POST ['username'];

        echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    } else{
        echo "<p align=center> <b> Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL:'login.php'>";

    }
}


?>
<!-- Akhir FUngsi Login -->
