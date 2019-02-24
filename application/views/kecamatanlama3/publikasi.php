<!DOCTYPE html>
<html>
<head>
	<title>KECAMATAN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">HOME</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFIL
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profil.php">Profil Website</a></li>
							<li><a href="peta.php">Peta Wilayah</a></li>
						</ul>
					</li>
					<li><a href="sejarah.php">SEJARAH</a></li>
					<li><a href="wisata.php">WISATA</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">PEMERINTAHAN
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="visimisi.php">Visi & Misi</a></li>
							<li><a href="fasilitas.php">Fasilitas Publik</a></li>
						</ul>
					</li>
					<li><a href="publikasi.php">PUBLIKASI</a></li>
					<!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
				</ul>
			</div>
		</div>
	</nav>

	<div class="">
		<img class="img-responsive padding8" src="https://placehold.it/1366x150?text=BACKGROUND">
	</div>

	<div class="container">
		<?php
			foreach ($berita as $row) {
		?>
		<div class="row">
			<div class="col-sm-5 padding10">
				<div class="">
					<img src="<?php echo base_url() ?>assets/images/<?php echo $row->gambar ?>" style="" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-6 padding5">
				<div class="">
					<h2 class=""><?php echo $row->judulberita ?></h2>
					<h5 class=""><?php echo $row->tglupload ?></h5>
					<p class=""><?php echo substr($row->isiberita, 0, 100)  ?>...</p>
				</div>
			</div>
		</div>
		<?php
			}
		?>
		<div class="row">
			<div class="col-sm-5 padding10">
				<div class="">
					<img src="https://placehold.it/1366x610?text=IMAGE" style="" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-6 padding5">
				<div class="">
					<h2 class="">Judul Berita</h2>
					<h5 class="">Tanggal Berita</h5>
					<p class="">Deskripsi berita</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 padding10">
				<div class="">
					<img src="https://placehold.it/1366x610?text=IMAGE" style="" class="img-responsive">
				</div>
			</div>
			<div class="col-sm-6 padding5">
				<div class="">
					<h2 class="">Judul Berita</h2>
					<h5 class="">Tanggal Berita</h5>
					<p class="">Deskripsi berita</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-5 margin6">
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					<img src="https://placehold.it/60x70?text=LOGO" class="img-rounded">
				</div>
				<div class="col-sm-8">
					<h5 class="fcolor2 margin3">PEMERINTAH KECAMATAN ADIPALA</h5>
					<hr class="hr4">
					<p class="p8">SINERGI UNTUK NEGERI</p>
				</div>
				<div class="col-sm-3 margin4">
					<img class="img-circle padding6" src="https://placehold.it/45x45?text=ICON">
					<img class="img-circle padding6" src="https://placehold.it/45x45?text=ICON">
					<img class="img-circle padding6" src="https://placehold.it/45x45?text=ICON">
				</div>
			</div>
		</div>
	</footer>

</body>
</html>