<?php
include '../koneksi.php'

?>

<!DOCTYPE html>
<html>
<head></head>
<body>
	<h1> Data Mata Kuliah</h1>
	<a href="tambah.php"><button>Tambah</button></a>
	<hr>
<table border="1">
	<tr>
		<th>NO</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
		<th>Aksi</th>
	</tr>
	<?php
	$i=1; 
	$data_matkul=$data->get_matkul();
	while($record=$data_matkul->fetch_array()){?>
		<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $record['kd_matkul'] ?></td>
			<td><?php echo $record['nama'] ?></td>
			<td><?php echo $record['sks'] ?></td>
			<td>
				<a href="edit.php?kd_matkul=<?php echo $record['kd_matkul']?>">Edit</a>
				<a href="hapus.php?kd_matkul=<?php echo $record
				['kd_matkul'] ?>">Hapus</a></td>
		</tr>
	</tr>
</tr>

	<?php }
	?>
</table>
</body>
</html>