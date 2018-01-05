<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Publikasi</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/publikasii.css">
</head>
<body>

<div id="berita-publikasi" class="container">
	<div class="row header-berita">
		<div class="col-md-4 col-sm-4">
			<div class="title-beritaPublikasi">Laporan Diskusi</div>
		</div>

	</div>

	<div class="row content-publikasiBerita">
		<div class="col-md-5 col-sm-5">
			<div class="ket-berita">
				<div class="icon"></div>
				<div class="forum">
					UTAMA
				</div>
				<div class="tema">
					ASTRONOMI
				</div>
			</div>

			<div class="title-berita">
				Addiction When Gambling Becomes A Problem
			</div>

			<div class="isi-berita">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
			</div>

			<div class="tanggal">
				29 SEPETEMBER 2017
			</div>
			<div class="pembuat">
				<span>BY</span> ADMIN
			</div>
		</div>

		<div class="col-md-7 col-sm-7">
			<div class="gambar-berita">
				<img src="img/4.jpg" class="berita-img">
			</div>
		</div>
	</div>
</div>

<div id="fiturPublikasi" class="container">
	<div class="row">
		<div class="col-md-5 col-sm-5">
			<div class="row">

				<div class="col-md-1 col-sm-1">
				<div class="icon-cari">
					<img src="img/cari.png" class="cari-img">
				</div>
				</div>

				<div class="col-md-11 col-sm-11">
				<form method="post" action="">
					<input type="text" name="cari" class="box-cari" placeholder="Search by title…">
				</form>
				</div>

			</div>
		</div>

		<div class="col-md-7 col-sm-7"></div>
	</div>
</div>

<div id="kategoriPublikasi" class="container">
	<div class="line"></div>

	<div class="row">

	<div class="col-md-2 col-sm-2">
		<div class="kategori-title">
			Categories :
		</div>
	</div>

	<div class="col-md-10 col-sm-10">
		<div class="link-kategori">
			<a href="index.php?halaman=publikasi" class="kategori-link">Advertising</a>
			<a href="index.php?halaman=publikasi" class="kategori-link">Astronomy</a>
			<a href="#" class="kategori-link">Beauty</a>
			<a href="#" class="kategori-link">Cooking</a>
			<a href="#" class="kategori-link">Medicine</a>
			<a href="#" class="kategori-link">Technology</a>
		</div>
	</div>

	</div>

	<div class="line"></div>

	<div class="content-kategoriPublikasi">
		<?php
			$id = "advertising";
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
			}
			if ($id == "advertising") {
				require_once 'template/publikasi-advertising.php';
			}
			if ($id == "astronomy") {
				require_once 'tempalte/publikasi-astronomy.php';
			}
			if ($id == "beauty") {
				require_once 'tempalte/publikasi-beauty.php';
			}
			if ($id == "cooking") {
				require_once 'tempalte/publikasi-cooking.php';

			}
			if ($id == "medicine") {
				require_once 'template/publikasi-medicine.php';
			}
			if ($id == "technology") {
				require_once 'template/publikasi-technology.php';
			}
		?>
	</div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>