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
					<a class="nav-link active" href="<?php echo base_url(); ?>index.php/kecamatan/sejarah">SEJARAH</a>
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
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/kecamatan/publikasi">PUBLIKASI</a>
				</li>
			</ul>
		</div> 
	</nav>

	<div class="textimage wow animated fadeIn" style="background: rgba(63, 60, 60, 0.64);">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/gambar/bgheader_menu.jpg" width="1366" style="max-height: 150px;">
		<div class="bottomright"><p class="headertext">SEJARAH</div>
	</div>
	<div class="headermantap1 wow animated fadeInUp"></div>
	<div class="headermantap2 wow animated fadeInUp"></div>

	<div class="p30px">
		<div class="container">

			<p class="contenttitle wow animated fadeInUp">SEJARAH</p>
			<hr class="hr5 wow animated fadeInUp">

			<p class="contenttext patas50px wow animated fadeInUp">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with :</p>

			<p class="contenttext wow animated fadeInUp">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.” The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>

			<p class="contenttext wow animated fadeInUp">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs.</p>


		</div>
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