<?php
include 'conf/koneksi.php';
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Xplore </title>
	<link rel="stylesheet" type="text/css" href="adm.css">
	<style>
		table, th, td {
  border: 1px solid black;
  padding:5px;
}
	</style>
</head>
<body>
	<div class="wrapper">
  <nav>
  <a href="logout.php">Logout</a> 
   <a href="#">Beranda</a> 
   <h3>Xplore</h3>
  </nav>
  <main>
   </main>
   <div class="Fitur">
      <h1>Konten</h1>
   </div>
	
      <section id="boxes"> 	
	  <?php
		if (isset($_POST['hapus'])){
			$q = $koneksi->query("DELETE FROM page where id='".$_POST['id_konten']."'");
			if ($q){
				header('refresh:2;');
			}
		}
		if (isset($_POST['hapus-user'])){
			$q = $koneksi->query("DELETE FROM pengguna where id='".$_POST['id_user']."'");
			if ($q){
				header('refresh:2;');
			}
		}
	  ?>
			<table style="text-align:center;margin-left:10%;margin-right:10%;width:80%">
			<tr>
			<th>Creator</th>
			<th>Kategori</th>
			<th>Lokasi</th>
			<th>Web</th>
			<th>Aksi</th>
			</tr>
			<?php
			$q = $koneksi->query("SELECT * FROM page");
			while($r =$q->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$koneksi->query("SELECT username from pengguna where id='".$r['id_creator']."'")->fetch_assoc()['username']."</td>";
				echo "<td>".$r['kategori']."</td>";
				echo "<td>".$r['alamat']."</td>";
				echo "<td>".$r['web']."</td>";
				echo "<td><a href='page.php?id=".$r['id']."'><button style='width:100%;' value='Lihat'>Lihat Halaman</button></a><br/><br/><form action=\"\" method=\"POST\"><input type='hidden' name='id_konten' value='".$r['id']."'/><input style='width:100%;' type='submit' name='hapus' value='Hapus'/></form></td>";
				echo "</tr>";
			}
			?>
			</table>
			
      </section><hr>
	  <div class="Fitur">
      <h1>User</h1>
   </div>
	
      <section id="boxes">
        	
			<table style="text-align:center;margin-left:10%;margin-right:10%;width:80%">
			<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Jumlah Konten Dibuat</th>
			<th>Aksi</th>
			</tr>
			<?php
			$q = $koneksi->query("SELECT * FROM pengguna");
			while($r =$q->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$r['username']."</td>";
				echo "<td>".$r['email']."</td>";
				echo "<td>".$koneksi->query("SELECT count(id) as i from page where id_creator='".$r['id']."'")->fetch_assoc()['i']."</td>";
				echo "<td><a href='page.php?id=".$r['id']."'><form action=\"\" method=\"POST\"><input type='hidden' name='id_user' value='".$r['id']."'/><input style='width:100%;' type='submit' name='hapus-user' value='Hapus'/></form></td>";
				echo "</tr>";
			}
			?>
			</table>
			
      </section><hr>
<footer>
  <p>
    Explore Jogja, 2020.
  </p>
</footer>
 </div>

</body>
</html>