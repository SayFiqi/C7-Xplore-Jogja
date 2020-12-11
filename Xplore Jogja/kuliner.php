<?php
session_start();
include 'conf/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xplore Jogja | Home Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
</head>
<body>
    <div class="wrapKul">
        <header>
            <div class="logo">Xplore Jogja</div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="pariwisata.php">Pariwisata</a></li>
                    <li><a href="kuliner.php">Kuliner</a></li>
                    <li><a href="penginapan.php">Hotel</a></li>
                    <li><a href="universitas.php">Kampus</a></li>
                    <?php
						if (empty($_SESSION['username'])){
							echo '<li id="register"><a href="login.php">Login</a></li>
                    <li id="register"><a href="daftar.php">Daftar</a></li>';
						}else{
							echo '<li id="register"><a href="logout.php">Logout</a></li>';
						}
					?>
                </ul>
            </div>
        </header>
                <div class="desc">
                    <p>Yogyakarta juga memiliki banyak kuliner yang khas.</p>
                </div>
                
        </div>  
                <div class="judul">
                <h1 style="color: black;">Kuliner</h1><br>
                </div>
            <?php
					$q = $koneksi->query("SELECT * FROM page where kategori='kuliner' ORDER BY rand() LIMIT 6 ");
					while($r = $q->fetch_assoc()){
						?>
						<a href="page.php?id=<?= $r['id']; ?>">
                <div class="conteudoPar">    
                    <img class="gambar" src="<?= $r['gambar']; ?>">
                    <h2> <?= $r['nama']; ?> </h2>			
                    <p><?= substr($r['deskripsi'], 0, 100); ?></p><br/>
                    <a href="page.php?id=<?= $r['id']; ?>" style="float: right;">Selengkapnya</a>
                </div>
            </a>  
						<?php
					}
				?>
            <footer>
                <div style="background-color:#41424b;text-align:center;padding:10px;margin-top:7px;">© copyright Xplore Jogja</div>
            </footer>
            <script type="text/javascript" src="komen.js"></script>
            <!-- Footer -->
	<section id="closing">	
		<h1>Kontak Kami</h1>
			<div class="bottom">
				<div class="row-footer-kiri">
					<h1>Email</h1>
					<ul class="ul-footer">
                        <li class="ul-footer-list">19523052@students.uii.ac.id</li>
						<li class="ul-footer-list">19523190@students.uii.ac.id</li>
						<li class="ul-footer-list">19523046@students.uii.ac.id</li>
					</ul>
				</div>

				<div class="row-footer-kanan">
					<h1>About Us</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div id="icon-container">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
					</div>
				</div>
			</div>
			<footer>
				<p><i>Copyright 2020 PABW Universitas Islam Indonesia</i></p>
			</footer>
	</section>
</div>
</div>
    </body>
</html>