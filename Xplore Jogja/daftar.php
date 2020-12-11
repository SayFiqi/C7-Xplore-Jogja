<?php
session_start();
include 'conf/koneksi.php';
if (!empty($_SESSION['username'])){
	header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="daftar.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <title>Daftar Diri</title>
</head>
<body>
    <header>
        <!-- <div class="logo">LOGO</div> -->
        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="pariwisata.php">Pariwisata</a></li>
                <li><a href="kuliner.php">Kuliner</a></li>
                <li><a href="penginapan.php">Penginapan</a></li>
                <li><a href="universitas.php">Kampus</a></li>
                <li id="register"><a href="login.php">Login</a></li>
                <li id="register"><a href="daftar.php">Daftar</a></li>
            </ul>
        </div>
    </header>

    <a class="logo" href="home.php"><h1>Xplore jogja</h1></a> 
        <div class="form">
            <form class="register-form" action="" method="post">
                <h2>Daftar Diri</h2>
				<?php
				if (isset($_POST['daftar'])){
					$q = $koneksi->query("SELECT * FROM pengguna where username='".$_POST['username']."' or email='".$_POST['email']."'");
					if ($q->num_rows > 0){
						echo '<font color="red">Username atau email telah digunakan.</font><br/><br/>';
					}else{
						if($koneksi->query("INSERT INTO pengguna (username, email, password) values ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')")){
							echo '<font color="green">Berhasil mendaftarkan akun.</font><br/><br/>';
							header('refresh: 2;url=login.php');
						}
					}
				}
				?>
                Username
                <input type="text" name="username" placeholder="Username" required minlength="3"><br>
                Password
                <input type="password" id="pw" onkeyup="checkPw()" name="password" placeholder="Password" required><br>
                Verifikasi Password
                <input type="password" id="vpw" onkeyup="checkPw()" name="vpassword" placeholder="Password" required><br>
                Email
                <input type="email" name="email" placeholder="Email" required><br>
                <button type="submit" name="daftar" id="daftar">Create</button>
                <p class="message">
                    Sudah mendaftar? <a href="login.php">Login</a>
                </p>
            </form>
        </div>
    </div>

    <div class="footer">
       Copyright xplore jogja - Pabw
    </div>

    <script type="text/javascript" src="daftar.js"></script>

</body>
</html>