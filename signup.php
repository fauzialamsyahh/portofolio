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
    <th colspan="2" height="40" text-center> SIGN UP FORM</th>
</tr>
<tr>
    <td width="100">Nama</td>
    <td> <input type="text" name="nama" placeholder="Isi Nama Anda" required> </td>
</tr>
<tr>
    <td width="100">Username</td>
    <td> <input type="text" name="username" placeholder="Isi Username Anda" required></td>
</tr>
<tr>
    <td width="100">Password</td>
    <td> <input type="password" name="password" placeholder="Isi Password Anda" required minlength="8"></td>
</tr>
<tr>
    <td></td>
    <td> <input type="submit" value="Daftar" name="kirim"></td>
</tr>

</form>
<!-- Akhir Login -->

</body>

<!-- Fungsi Login -->
<?php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $simpan = "INSERT INTO users (nama, username, password) 
    VALUES ('$nama','$username','$password')";

    $result = mysqli_query($koneksi,$simpan);

    if ($result) {
        echo "<script>
        alert('Data Telah Berhasil Disimpan');window.location='home.php'
        </script>";
    }
}


?>
<!-- Akhir FUngsi Login -->