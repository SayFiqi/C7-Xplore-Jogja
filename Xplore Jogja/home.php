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
    <div class="wrap">
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
							echo '<li id="register"><a href="tambah.php">Tambah Konten</a></li>';
							echo '<li id="register"><a href="logout.php">Logout</a></li>';
						}
					?>
                </ul>
            </div>
        </header>

        <div class="konten">
            <h1>Xplore Jogja</h1><br>
            <p>Explore Beautiful Jogja As Easy One Click.</p>
            <p>See Beautiful Moments You Never See Before.</p>
            <div class="btn-group">
                <a href="#Ttg" class="color1">Selengkapnya</a>
            </div>
        </div>

        <!-- <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="#fff" fill-opacity="1" d="M0,64L48,74.7C96,85,192,107,288,122.7C384,139,480,149,576,149.3C672,149,768,139,864,144C960,149,1056,171,1152,154.7C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->

    </div>

    <div class="tentang" id="Ttg" >
        <h1 style="text-align: center;">Tentang Kami</h1>
            <div class="tentang1">
                <div class="mainbodyttg">
                    <div class="cardttg">
                        <div class="image">
                                <img src="image/icon1.png">
                        </div>
                        <div class="Judul"> 
                               <h1>Pariwisata</h1>
                        </div>
                        <div class="deskripsi">
                               <p>Xplore Jogja Tour menawarkan berbagai keindahaan menarik Daerah Istimewah Jogja yang wajib untuk dikunjungi</p>
                            <!-- <a href="pariwisata.php"><button id="btn1">Selengkapnya</button></a> -->
                        </div>
                   </div>   
           
                   <div class="cardttg">
                       <div class="image">
                           <img src="image/icon2.png">
                       </div>
                       <div class="Judul"> 
                           <h1>Pelayanan Terbaik</h1>
                       </div>
                       <div class="deskripsi">
                           <p>Xplore Jogja berkomitmen memberikan pelayanan terbaik dan menjamin kepuasan pelanggan</p>
                           <!-- <a href="kuliner.php"><button id="btn1">Selengkapnya</button></a> -->
                       </div>
                   </div>
           
           
                   <div class="cardttg">
                       <div class="image">
                           <img src="image/icon3.png">
                       </div>
                       <div class="Judul"> 
                           <h1>Pengalaman Terbaik</h1>
                       </div>
                       <div class="deskripsi">
                           <p>Xplore Jogja selain memberikan pelayanan terbaik, memberikan pengalaman menarik juga dalam berselancar</p>
                           <!-- <a href="universitas.php"><button id="btn1">Selengkapnya</button></a> -->
                       </div>
                   </div>
               </div>
        </div>
    </div>

    <div class="Isi" id="isi">
        <h1 style="text-align: center; color: white; margin-top: 5%;"> Konten </h1>
        <div class="mainbody">
            <div class="card">
                <div class="image">
                      <img src="image/T-parangkusumo.jpg">
                   </div>
                   <div class="Judul"> 
                       <h1>Pariwisata</h1>
                   </div>
                   <div class="deskripsi">
                       <p>Yogyakarta memiliki banyak wisata menarik,dari yang bersejarah sampai yang instagramable.</p>
                       <a href="pariwisata.php"><button id="btn1">Selengkapnya</button></a>
                   </div>
               </div>
    
               <div class="card">
                    <div class="image">
                        <img src="image/T-resto.jpg">
                    </div>
                   <div class="Judul"> 
                       <h1>Kuliner</h1>
                   </div>
                   <div class="deskripsi">
                       <p>Yogyakarta memiliki banyak kuliner yang khas. salah satunya adalah gudeg.</p>
                       <a href="kuliner.php"><button id="btn1">Selengkapnya</button></a>
                   </div>
               </div>
            
               <div class="card">
                   <div class="image">
                       <img src="image/T-kampus.jpg" style="width: 100%;">
                   </div>
                   <div class="Judul"> 
                       <h1>Universitas</h1>
                   </div>
                   <div class="deskripsi">
                       <p>Sebagai kota pelajar, tentu saja Yogyakarta memiliki beberapa kampus.</p>
                       <a href="universitas.php"><button id="btn1">Selengkapnya</button></a>
                   </div>
               </div>
       
               <div class="card">
                   <div class="image">
                       <img src="image/T-hotel.jpg" style="width: 100%;">
                   </div>
                   <div class="Judul"> 
                       <h1>Penginapan</h1>
                   </div>
                   <div class="deskripsi">
                       <p>Banyak tempat penginpan yang menarik dan nyaman yang dapat digunakan beristirahat.</p>
                       <a href="penginapan.php"><button id="btn1">Selengkapnya</button></a>
                   </div>
               </div>
           </div>
    </div>
    <div class="katamereka">
        <h1 style="text-align: center;">Apa Kata Mereka</h1>
        
    </div>
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

<script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>
</html>