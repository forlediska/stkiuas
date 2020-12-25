<?php
//include 'index.php';

$host  = "localhost";
$username  = "root";
$password  = "";
$database  = "stkiuas";
$koneksi  = mysqli_connect($host,  $username,  $password, $database);
$pilihdatabase  = mysqli_select_db($koneksi, "stkiuas");
if  ($pilihdatabase) echo "<h3>Koneksi Berhasil </h3><hr><br/>";
else echo "Koneksi Gagal <br/>";
?>