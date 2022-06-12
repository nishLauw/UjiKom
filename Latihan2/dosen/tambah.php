<?php
include '../koneksi.php'

?>
<html>
<head></head>
<body>
	<h1>Tambah Dosen</h1>
	
	<form action="#" method="post">
	<table>
		<tr>
			<td>Kode Dosen</td>
			<td>:</td>
			<td><input type="number" name="kd_dosen"></td>
		</td>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td><input type="text" name="nama_dosen"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpen</button></td>
		</tr>
	</table>
	</form>
	<?php
	
	if(isset($_POST['kd_dosen'])){
		$kd_dosen=$_POST['kd_dosen'];
		$nama_dosen=$_POST['nama_dosen'];
		$alamat=$_POST['alamat'];
		
		if($data->add_dosen($kd_dosen,$nama_dosen,$alamat)){
			header('location:index.php');
		}
	}
	?>
</body>
</html>