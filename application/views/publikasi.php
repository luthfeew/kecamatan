<!DOCTYPE html>
<html>
<head> 
	<title>KEC. ADIPALA</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/gambar/logo_adipala.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<script>new WOW().init();</script>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-light navbar-light">
		<!-- Brand -->
		<a class="navbar-brand" href="#">
			<img src="<?php echo base_url(); ?>assets/gambar/logo_adipala.png" alt="Logo" style="width: 40px;">
			<a class="navbrand">KECAMATAN ADIPALA</a>
		</a>

		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" style="margin-right: 15px; font-size: 15px;">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/kecamatan/index">BERANDA</a>
				</li>
				<li class="nav-item dropdown" style="margin-right: 15px; font-size: 15px;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						PROFIL
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kecamatan/profil">Profil Website</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kecamatan/peta">Peta Wilayah</a>
					</div>
				</li>
				<li class="nav-item" style="margin-right: 15px; font-size: 15px;">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/kecamatan/sejarah">SEJARAH</a>
				</li>
				<li class="nav-item dropdown" style="margin-right: 15px; font-size: 15px;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						PEMERINTAHAN
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kecamatan/visimisi">Visi & Misi</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kecamatan/fasilitas">Fasilitas Publik</a>
					</div>
				</li>
				<li class="nav-item" style="font-size: 15px;">
					<a class="nav-link active" href="<?php echo base_url(); ?>index.php/kecamatan/publikasi">PUBLIKASI</a>
				</li>
			</ul>
		</div> 
	</nav>

	<div class="textimage wow animated fadeIn" style="background: rgba(63, 60, 60, 0.64);">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/gambar/bgheader_menu.jpg" width="1366" style="max-height: 150px;">
		<div class="bottomright"><p class="headertext">PUBLIKASI</div>
	</div>
	<div class="headermantap1 wow animated fadeInUp"></div>
	<div class="headermantap2 wow animated fadeInUp"></div>

	<div class="p30px">
		<div class="container">

			<p class="contenttitle wow animated fadeInUp">PUBLIKASI</p>
			<hr class="hr5 wow animated fadeInUp">
			<p class="contenttitle2 wow animated fadeInUp">“ Pengabdian Kenangan dan Informasi Terkini “</p>

			<div class="p30px">

				<?php
				foreach ($berita as $row) {
					?>
<hr class="hr8 wow animated fadeInDown">
					<div class="row">
						<div class="col-md-5 wow animated fadeInLeft" style="padding-bottom: 10px;">
							<div class="parent">
							<?php echo $row->gambar ?>
						</div>
						</div>
						<div class="col-md-7 wow animated fadeInRight">
							<p class="contenttext4" style="margin-top: 20px;"><?php echo $row->judulberita ?></p>
							<p class=""><?php echo $row->tanggalupload ?></p>
							<p class="contenttext5"><?php echo substr($row->isiberita, 0, 150)  ?> ...</p>
							<a href="<?php echo base_url('index.php/kecamatan/tampilberita/'.$row->id); ?>" class="btn btn-light btn-sm">READ MORE</a>
						</div>
					</div>
					<?php
				}
				?>

				<hr class="hr8 wow animated fadeInUp">
			</div>

		</div>
	</div>

	<!-- <ul class="pagination justify-content-center">
		<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
		<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
	</ul> -->
<div class="wow animated fadeInDown">
	<?php echo $pagination; ?>
</div>

	<footer class="bgfooter" style="">
		<div class="container">
			<div class="row">
				<div class="col-md-1" style="min-width: 70px; max-width: 70px;"><img src="<?php echo base_url(); ?>assets/gambar/logoadipala.jpg" width="60" height="76"></div>
				<div class="col-md">
					<p class="footertext">PEMERINTAH KECAMATAN ADIPALA</p>
					<hr class="hr2">
					<p class="footertext2">SINERGI UNTUK NEGERI</p>
				</div>
				<div class="col-md text-right">
					<div class="" style="padding-top: 15px;">
						<img class="rounded-circle" src="<?php echo base_url(); ?>assets/gambar/icon_gmail.png" width="45" height="45">
						<img class="rounded-circle" src="<?php echo base_url(); ?>assets/gambar/icon_instagram.png" width="45" height="45" style="margin-left: 5px;">
						<img class="rounded-circle" src="<?php echo base_url(); ?>assets/gambar/icon_youtube.png" width="45" height="45" style="margin-left: 5px;">
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>