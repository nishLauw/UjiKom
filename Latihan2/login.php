<html>
 
 
<body>
    <h1> Silahkan Login</h1>
    <form method="post" action="#">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
               
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>
    <?php
    include 'koneksi.php';
    session_start();
 
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
 
         $data_login=$data->get_user($username,$password);
        if(mysqli_num_rows($data_login)>0){
            $_SESSION['username']=$username;
            $_SESSION['status']='login';
 
            header('location:index.php');
        }else {
        	echo "Username atau Password Salah!";
        }
    }
 
    ?>
</body>
</html>
