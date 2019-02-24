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
					<a class="nav-link active" href="<?php echo base_url(); ?>index.php/kecamatan/index">BERANDA</a>
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
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/kecamatan/publikasi">PUBLIKASI</a>
				</li>
			</ul>
		</div> 
	</nav>

	<div class="textimage wow animated fadeIn">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/gambar/bgheader_home.png" width="1366" style="max-height: 543px;">
		<!-- <div class="centertext hometext animated fadeIn delay-1s">
			oportere convenire te pro. Ius ne novum maiorum, quo lorem falli nihil ei. Mel ei reque omnes
		</div> -->
		<div class="bottomtext"></div>
	</div>

	<div class="#">
		<p class="text-center hometext1 animated zoomIn">
			Eka Adi Dasa Purwa Panjang Punjung Loh Jinawi Gemah Ripah Tata Tentrem Kerta Raharja
		</p>
	</div>

	<div class="bghome p30px">
		<div class="container text-center wow animated fadeInUp">
			<p class="hometext2">Selamat Datang di Website Resmi</p>
			<p class="hometext3">PEMERINTAH KECAMATAN ADIPALA</p>
			<hr class="hr1">
			<p class="hometext4">Silahkan explore website kami dan temukan berbagai hal menarik. Website ini menyediakan berbagai informasi lengkap mengenai berbagai macam hal di kecamatan Adipala, seperti tempat wisata, produk populer, berita terbaru, serta berbagai alamat tempat menarik. Silahkan datang ke Kecamatan Adipala dan rasakan nikmatnya atmosfir di sini.</p>
		</div>
	</div>

	<div class="container-fluid text-center p30px">
		<div class="wow fadeInUp">
			<p class="hometext5">WISATA KEKINIAN</p>
			<hr class="hr1"><br>
			<div class="row">
				<div class="col-lg">
					<img src="<?php echo base_url(); ?>assets/gambar/wisata1.jpg" class="mx-auto d-block float-right">
				</div>
				<div class="col-lg"><img src="<?php echo base_url(); ?>assets/gambar/wisata2.jpg" class="mx-auto d-block"></div>
				<div class="col-lg"><img src="<?php echo base_url(); ?>assets/gambar/wisata3.jpg" class="mx-auto d-block float-left"></div>
			</div>
			<!-- <button type="button" class="btn btn-outline-light text-center" style="margin-top: 30px; background: #FF4530; border-radius: 23px;"> --><a href="<?php echo base_url(); ?>index.php/kecamatan/fasilitas" class="btn btn-outline-light text-center" style="margin-top: 30px; background: #FF4530; border-radius: 23px;">View More</a><!-- </button> -->
		</div>
		<br>
		
	</div>

	<div class="container text-center p30px">
		<div class="wow fadeInUp">
			<p class="hometext5">FASILITAS PUBLIK</p>
			<hr class="hr1">
		</div>
		<br>
		<div class="row">
			<div class="col-sm wow fadeInLeft">
				<img class="" src="<?php echo base_url(); ?>assets/gambar/icon_masjid.png" width="60" height="60" style="padding-bottom: 10px;">
				<p class="hometext6">Rumah Ibadah</p>
				<p class="hometext7">50 Masjid<br>
					1 Gereja Protestan<br>
					1 Gereja Katholik<br>
					2 Pura<br>
				1 Vihara</p>
			</div>
			<div class="col-sm wow fadeInLeftBig">
				<img class="" src="<?php echo base_url(); ?>assets/gambar/icon_transportasi.png" width="60" height="60" style="padding-bottom: 10px;">
				<p class="hometext6">Transportasi</p>
				<p class="hometext7">Terminal Bus<br>
				SPBU</p>
			</div>
			<div class="col-sm wow fadeInUp">
				<img class="" src="<?php echo base_url(); ?>assets/gambar/icon_obat.png" width="60" height="60" style="padding-bottom: 10px;">
				<p class="hometext6">Kesehatan</p>
				<p class="hometext7">2 Puskesmas<br>
					4 Klinik Umum<br>
				6 Apotek</p>
			</div>
			<div class="col-sm wow fadeInRight">
				<img class="" src="<?php echo base_url(); ?>assets/gambar/icon_buku.png" width="60" height="60" style="padding-bottom: 10px;">
				<p class="hometext6">Edukasi</p>
				<p class="hometext7">51 Sekolah Dasar<br>
					8 SMP/MTS<br>
				3 SMA/MA</p>
			</div>
			<div class="col-sm wow fadeInRightBig">
				<img class="" src="<?php echo base_url(); ?>assets/gambar/icon_wisata.png" width="60" height="60" style="padding-bottom: 10px;">
				<p class="hometext6">Pariwisata</p>
				<p class="hometext7">Pantai Sodong Indah<br>
					Bukit Selok<br>
					Gunung Srandil<br>
				Cemara Sewu</p>
			</div>
		</div>
	</div>

	<div class="bghome1 p30px">
		<div class="container">
			<div class="wow fadeInUp">
				<p class="hometext8">PEJABAT TERAS</p>
				<hr class="hr1">
			</div>
			<br>
			<div class="row wow fadeIn">
				<div class="col-md">
					<img src="https://placehold.it/215x287?text=IMAGE" class="img-fluid mx-auto d-block" style="margin-bottom: 10px;">
				</div>
				<div class="col-md">
					<img src="https://placehold.it/215x287?text=IMAGE" class="img-fluid mx-auto d-block" style="margin-bottom: 10px;">
				</div>
				<div class="col-md">
					<img src="https://placehold.it/215x287?text=IMAGE" class="img-fluid mx-auto d-block" style="margin-bottom: 10px;">
				</div>
				<div class="col-md">
					<img src="https://placehold.it/215x287?text=IMAGE" class="img-fluid mx-auto d-block" style="margin-bottom: 10px;">
				</div>
			</div>
		</div>
	</div>

	<div class="p30px bghome3">
		<div class="container">
			<div class="wow fadeInUp">
				<p class="hometext9">BERITA TERBARU</p>
				<hr class="hr1">
			</div>
			<div class="row">
				<?php
				foreach ($berita as $row) {
					?>

					<div class="col-md-4 wow fadeInDown">
						<div class="card" style="">
							<div class="parent">
							<?php echo $row->gambar ?>
							</div>
							<div class="card-body">
								<div class="hometext10"><?php echo $row->judulberita ?></div>
								<hr class="hr4">
								<div class="hometext11"><b><?php echo $row->tanggalupload ?></b></div>
								<p class="card-text hometext12"><?php echo substr($row->isiberita, 0, 100)  ?>...</p>
								<a href="<?php echo base_url('index.php/kecamatan/tampilberita/'.$row->id); ?>" class="btn btn-light btn-sm">READ MORE</a>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
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

<!-- <footer class="bgfooter">
	<div class="jumbotron" style="background: transparent;">
		<div class="row">
			<div class="col-md-1"><img src="https://placehold.it/60x76?text=LOGO"></div>
				<div class="col text-left">
					<p class="footertext">PEMERINTAH KECAMATAN ADIPALA</p>
					<hr class="hr2">
					<p class="footertext2">SINERGI UNTUK NEGERI</p>
				</div>
				<div class="col-md-3">
					<div class="" style="padding-top: 15px;">
					<img class="rounded-circle" src="https://placehold.it/45x45?text=ICON">
					<img class="rounded-circle" src="https://placehold.it/45x45?text=ICON" style="padding-left: 5px;">
					</div>
				</div>
		</div>
	</div>
</footer> -->

</body>
</html>