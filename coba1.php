<?php 

include 'coba2.php';
//manpilkan
$data = mysqli_query($koneksi,"SELECT * FROM `coba1`");

// if ($data == true) {
// 	echo "koneksi berhasil";
// }else{
// 	echo "koneksi gagal";
// } 

foreach ($data as $data) {
	// code...
	echo $data['nama']."&nbsp";
	echo $data['kelas']."&nbsp";
	echo $data['nilai']. "<br>";
}

 ?>