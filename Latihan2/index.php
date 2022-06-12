<?php
session_start();
if($_SESSION['status']!='login'){
    header('location:login.php');
}
?>
 
 
<html>
    <body>
        <h1>Menu aplikasi</h1>
 
        <p>Selamat Datang : <?php  echo $_SESSION['username'] ?></p>
 
        <a href="matkul"><button>Data Mata Kuliah</button></a><br><br>
        <a href="dosen"><button>Data Dosen</button></a><br><br>
        <a href="jadwal"><button>Data Jadwal</button></a>
        <a href="mahasiswa"><button>Data Mahasiswa</button></a><br><br>
        <a href="semester"><button>Data Semester</button></a><br><br>
        <a href="krs"><button>KRS</button></a>
    </body>
 
    <p><a href="logout.php">Keluar/Logout</a></p>
   
</html>