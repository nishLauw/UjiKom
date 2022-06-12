<?php
include '../koneksi.php'

?>

<html>
<head></head>
<body>
	<h1> Data Dosen</h1>
	<a href="tambah.php"><button>Tambah</button></a>
	<hr>
	<a href="../index.php">Back</a>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Kode Dosen</th>
			<th>Nama Dosen</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		$i=1;
		$data_dosen=$data->get_dosen();
		while($record=$data_dosen->fetch_array()){?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $record['kd_dosen'] ?></td>
				<td><?php echo $record['nama'] ?></td>
				<td><?php echo $record['alamat'] ?></td>
				<td>
					<a href="edit.php?kd_dosen=<?php echo $record['kd_dosen']?>">Edit</a>
					<a href="hapus.php?kd_dosen=<?php echo $record['kd_dosen'] ?>">Hapus</a>
				</td>
					</tr>
					</tr>
					</tr>
		<?php }
		?>
	</table>
</body>
</html>