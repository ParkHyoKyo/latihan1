
 <?php 

include 'coba2.php';
//manpilkan

// $kelas = $_POST['nama_belakang'];
// $id = $_POST['nama_depan'];
$data = mysqli_query($koneksi,"SELECT * FROM `coba1`  ");
// OR akan langsung memanggil yang jika salah satu data nya memenuhi
// AND akan langsung memanggil yang jika semua datanya sudah memenuhi

// if ($data == true) {
// 	echo "koneksi berhasil";
// }else{
// 	echo "koneksi gagal";
// } 

foreach ($data as $data) {
	// code...
	echo $data['nama']."&nbsp";
	echo $data['kelas']."&nbsp";
	echo $data['nilai'];
	?>
	<a href="proses.php?id=<?php echo $data['Id'];?>">delete</a>
	<a href="inputupdate.php?id=<?php echo $data['Id'];?>">edit</a><br>


	<?php
}

 ?>