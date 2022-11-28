<?php 

include 'coba2.php';

$nama = $_POST['nama_depan'];
$kelas = $_POST['nama_belakang'];
$nilai = $_POST['nama_panggilan'];

$data = mysqli_query($koneksi,"INSERT INTO `coba1`(`nama`, `kelas`, `nilai`) VALUES ('$nama','$kelas','$nilai')");







 ?>