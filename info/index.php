<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="info";
$koneksi=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>tugas akhir</title>
</head>
<body>
	<header>
			<img src="info.PNG">
		<h2>INFO KONTRAKAN JOGJA</h2>
		<p>Web yang memuat info kontrakan yang ada dijogja dan sekitarnya untuk mempermudah mencari kontrakan</p>
	</header>
	<div class="menu">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="kontak.php">KONTAK</a></li>
			<li><a href="tentang.php">TENTANG</a></li>
				<div class="cari">
			<form>
					<input class="search" type="text"placeholder="cari...." required="">
					<input class="button" type="button" value="cari"></input>
			</form>
		</div>			
		</ul>
	
	</div>
	<div class="konten">
		<center>

		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM data ") ?>
			<?php while($rumah = $ambil->fetch_assoc()){ ?>
		
			<div class="isi">
				<div class="tumbnail">

				<div class="body">
					<h2 ><?php echo $rumah['nama_rumah']; ?></h2>
					<img src="foto/<?php echo $rumah['foto_rumah'];?>" width=600px >
					<div class="caption">
						
						<h5>Harga     :Rp.<?php echo number_format($rumah['harga_sewa']); ?></h5>
						<h5>Deskripsi :<?php echo $rumah['deskripsi']; ?></h5>

						</div>
					</div>
				</div>
		
			<?php } ?>
		</div>
		</center>
		</div>
		
	</div>
	<div class="footer">
		&copy copyright 
	</div>


</body>
</html>