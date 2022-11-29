<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>



	<?php
		$id = $_GET['id'];

		include 'coba2.php';
		$data = mysqli_query($koneksi,"SELECT * FROM `coba1` WHERE `Id` = $id"); 	
		$tampil = mysqli_fetch_array($data);
	?>

	<form action="update.php" method="POST">
		<h1>Update Data Murid</h1>
		<input type="text" name="id" hidden="" value="<?php echo $tampil['Id'] ?>">
		<p>Nama</p>
		<input type="text" name="nama_d" value="<?php echo $tampil['nama'] ?>">
		<br>
		<p>Kelas</p>
		<input type="text" name="kelas_murid" value="<?php echo $tampil['kelas'] ?>">
		<br>
		<p>Nilai</p>
		<input type="text" name="nilai_murid" value="<?php echo $tampil['nilai'] ?>">
		<br>
		<input type="submit" value="kirim">
	</form>

</body>
</html>