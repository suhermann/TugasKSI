<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "admin"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>


        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="53571-ai.png" alt="">
                </div>
                    <div class="title">              
                <h1>Login</h1>
                <p>Silahkan masukkan username dan passowrd untuk masuk ke akun anda</p>
                </div>
            </div>
            <form action="cek.php" method="POST">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                <button value="login">Log in</button>
            </form>
        </div>     
    </body>
</html>