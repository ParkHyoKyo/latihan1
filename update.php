<?php 

include 'coba2.php';

$Id = $_POST['id'];
$nama = $_POST['nama_d'];
$kelas = $_POST['kelas_murid'];
$nilai = $_POST['nilai_murid'];

$data = mysqli_query($koneksi,"UPDATE `coba1` SET `nama`='$nama',`kelas`='$kelas',`nilai`='$nilai' WHERE `Id` = '$Id'")





 ?>