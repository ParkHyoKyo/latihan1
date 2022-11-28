<?php 



$data = $_GET['id'];
echo $data;

include 'coba2.php';

$data = mysqli_query($koneksi,"DELETE FROM `coba1` WHERE `Id` = '$data'");





 ?>