<?php
session_start();
$user = "admin";
$pass = "admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <title>Login</title>
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
    <div class="login-page">
        <div class="form">
            <h1 style="margin-bottom: 15%; color: black;">Login Admin</h1>
			<?php
			if (isset($_POST['login'])){
				if($_POST['username'] != $user){
					echo '<font color="red">username atau password salah</font><br/><br/>';
				}else{
					if ($_POST['password'] == $pass){
						header('location: admin.php');
					}else{
						echo '<font color="red">username atau password salah</font><br/><br/>';
					}
				}
			}
			?>
            <form action="" method="POST" class="login-form">
                Username
                <input type="text" placeholder="Username" name="username" required minlength="3">
                Password
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="login">Login</button>
                <p class="message">
                </p>
            </form>
        </div>
    </div>

    <div class="footer">
        Copyright xplore jogja - Pabw 
    </div>
        
    
</body>
</html>