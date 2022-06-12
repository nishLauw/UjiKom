<?php
include '../koneksi.php'
?>
<html>
    <head></head>
    <body>
        <h1>Tambah Mata Kuliah</h1>
 
        <form action="#" method="post">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="number" name="kd_matkul"></td>
            </tr>
            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_matkul"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="sks"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
 
        </table>
        </form>
        <?php
 
        if(isset($_POST['kd_matkul'])){
            $kd_matkul=$_POST['kd_matkul'];
            $nama_matkul=$_POST['nama_matkul'];
            $sks=$_POST['sks'];
 
            if($data->add_matkul($kd_matkul,$nama_matkul,$sks)){
                header('location:index.php');
            }
 
        }
 
        ?>
    </body>
</html>
