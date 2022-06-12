<?php
include '../koneksi.php';
 
$kd_matkul=$_GET['kd_matkul'];
$matkulByID=$data->get_matkulById($kd_matkul)->fetch_assoc();
 
?>
<html>
    <head></head>
    <body>
        <h1>Edit Matkul</h1>
 
        <form action="#" method="post">
        <table>
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="number" name="kd_matkul" value="<?php echo $matkulByID['kd_matkul']?>" disabled></td>
            </tr>
            <tr>
                <td>Nama Matakuliah</td>
                <td>:</td>
                <td><input type="text" name="nama_matkul" value="<?php echo $matkulByID['nama']?>"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="number" name="sks" value="<?php echo $matkulByID['sks']?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
 
        </table>
        </form>
        <?php
 
        if(isset($_POST['nama_matkul'])){
           //$kd_matkul;
             $nama_matkul=$_POST['nama_matkul'];
             $sks=$_POST['sks'];
 
            if($data->update_matkul($kd_matkul,$nama_matkul,$sks)){
                header('location:index.php');
            }
 
           
 
        }
 
        ?>
    </body>
</html>
