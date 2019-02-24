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
				<li class="nav-item dropdown active" style="margin-right: 15px; font-size: 15px;">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						PEMERINTAHAN
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kecamatan/visimisi">Visi & Misi</a>
						<a class="dropdown-item active" href="<?php echo base_url(); ?>index.php/kecamatan/fasilitas">Fasilitas Publik</a>
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
		<div class="bottomright"><p class="headertext">PEMERINTAHAN / FASILITAS PUBLIK</div>
	</div>
	<div class="headermantap1 wow animated fadeInUp"></div>
	<div class="headermantap2 wow animated fadeInUp"></div>

	<div class="p30px">
		<div class="container">

			<p class="contenttitle wow animated fadeInUp">FASILITAS PUBLIK</p>
			<hr class="hr5 wow animated fadeInUp">

			<h4 class="patas50px wow animated fadeInUp">Tempat Kesehatan</h4>
			<table class="table table-bordered table-hover table-sm wow animated fadeInUp">
				<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>Nama Tempat</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Puskesmas Adipala</td>
						<td>Sumpilan, Adipala </td>
					</tr>
					<tr>
						<td>2</td>
						<td>Puskesmas Adipala 2</td>
						<td>Jl. Srandil, Babakan, Adireja Kulon, Adipala </td>
					</tr>
					<tr>
						<td>3</td>
						<td>PKU Muhammadiyah Adipala</td>
						<td>Lancar, Penggalang, Adipala </td>
					</tr>
					<tr>
						<td>4</td>
						<td>Klinik Lufita Husada</td>
						<td>Jl. Kauman Adipala, Sumpilan, Adipala </td>
					</tr>
					<tr>
						<td>5</td>
						<td>Klinik Aisyah</td>
						<td>Jl. A. Yani Adipala, Kebonmanis, Adipala </td>
					</tr>
					<tr>
						<td>6</td>
						<td>Klinik Pratama Raja Husada</td>
						<td>Jl. Srandil, Karanganyar, Adiraja, Adipala </td>
					</tr>
					<tr>
						<td>7</td>
						<td>klinik syfa Al-mukhtar</td>
						<td>Kebonsari, Penggalang, Adipala </td>
					</tr>
				</tbody>
			</table>

			<div class=""> 
				<iframe src="https://www.google.com/maps/d/u/4/embed?mid=1_QNinVFPdOfdVj0xgowoawrlRBwFToww" style="width: 100%; height: 500px; min-height: 300px;"></iframe>
			</div>

			<h4 class="patas50px wow animated fadeInUp">Sekolah</h4>       
			<table class="table table-bordered table-hover table-sm wow animated fadeInUp">
				<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>NPSN</th>
						<th>Nama Sekolah</th>
						<th>Alamat Sekolah</th>
						<th>Kelurahan</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>69881422</td>
						<td>MAS Al Mukhtar Adipala</td>
						<td>Jl. Mangga No. 35</td>
						<td>Penggalang</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>2</td>
						<td>20362816</td>
						<td>MAS RAUDLATUL HUDA</td>
						<td>Jl. KH SYARBINI NO.124</td>
						<td>Welahan Wetan</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>3</td>
						<td>60710150</td>
						<td>MIS AL MUKHTAR PENGGALANG</td>
						<td>Jl.MANGGA NO.11 RT.03 RW.11</td>
						<td>Penggalang</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>4</td>
						<td>60710149</td>
						<td>MIS DIPONEGORO KALIKUDI</td>
						<td>Jl.POLISI SANMUKHID NO.86</td>
						<td>Kalikudi</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>5</td>
						<td>60710147</td>
						<td>MIS YA BAKII WELAHAN WETAN</td>
						<td>Jl.N. KH. SYARBINI NO.139 WELAHAN WETAN</td>
						<td>Welahan Wetan</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>6</td>
						<td>20363352</td>
						<td>MTSS AL MUKHTAR ADIPALA</td>
						<td>Jl. MANGGA NO. 11</td>
						<td>Penggalang</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>7</td>
						<td>20363350</td>
						<td>MTSS RAUDLATUL HUDA ADIPALA</td>
						<td>Jl. KH. SYARBINI NO. 139</td>
						<td>Welahan Wetan</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>8</td>
						<td>20363351</td>
						<td>MTSS TASHFIYUL FIKRI ADIPALA</td>
						<td>Jl. MANGKUBUMI 07 DOPLANG ADIPALA CILACAP</td>
						<td>Doplang</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>9</td>
						<td>20300774</td>
						<td>SD KRISTEN ADIRAJA</td>
						<td>Jl. Srandil No.223 Adiraja</td>
						<td>Adiraja</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>10</td>
						<td>20300896</td>
						<td>SD NEGERI ADIPALA 01 ADIPALA</td>
						<td>Jl. Srandil No.301</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>11</td>
						<td>20300895</td>
						<td>SD NEGERI ADIPALA 02 ADIPALA</td>
						<td>Jl. A Yani 55</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>12</td>
						<td>20300894</td>
						<td>SD NEGERI ADIPALA 03 ADIPALA</td>
						<td>Jalan Srandil No.299</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>13</td>
						<td>20300893</td>
						<td>SD NEGERI ADIPALA 05 ADIPALA</td>
						<td>Jl. Laut No.26</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>14</td>
						<td>20300892</td>
						<td>SD NEGERI ADIPALA 06 ADIPALA</td>
						<td>Jl. Progo No.01 Adipala</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>15</td>
						<td>20300891</td>
						<td>SD NEGERI ADIPALA 07 ADIPALA</td>
						<td>Jl. Jambu</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>16</td>
						<td>20300889</td>
						<td>SD NEGERI ADIRAJA 01 ADIPALA</td>
						<td>Jl. Srandil No. 207</td>
						<td>Adiraja</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>17</td>
						<td>20300887</td>
						<td>SD NEGERI ADIRAJA 02 ADIPALA</td>
						<td>Jl. Cisadane No.1</td>
						<td>Adiraja</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>18</td>
						<td>20300886</td>
						<td>SD NEGERI ADIREJA KULON ADIPALA</td>
						<td>Jl. Pahlawan No.03</td>
						<td>Adireja Kulon</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>19</td>
						<td>20300884</td>
						<td>SD NEGERI ADIREJA WETAN 02 ADIPALA</td>
						<td>Jl. Swari No. 65 Adireja Wetan, Adipala Cilacap</td>
						<td>Adireja Wetan</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>20</td>
						<td>20300885</td>
						<td>SD NEGERI ADIREJAWETAN 01 ADIPALA</td>
						<td>Jl. Srandil No.186</td>
						<td>Adireja Wetan</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>21</td>
						<td>20301411</td>
						<td>SD NEGERI BUNTON 01 ADIPALA</td>
						<td>Jl. Laut No.02</td>
						<td>Bunton</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>22</td>
						<td>20301412</td>
						<td>SD NEGERI BUNTON 02 ADIPALA</td>
						<td>Jl. Laut No.11</td>
						<td>Bunton</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>23</td>
						<td>20301413</td>
						<td>SD NEGERI BUNTON 03 ADIPALA</td>
						<td>Jl. Kenanga Bunton</td>
						<td>Bunton</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>24</td>
						<td>20301447</td>
						<td>SD NEGERI DOPLANG 01 ADIPALA</td>
						<td>Jl. A. Yani No.70</td>
						<td>Doplang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>25</td>
						<td>20301446</td>
						<td>SD NEGERI DOPLANG 02 ADIPALA</td>
						<td>Jl. A. Yani No.90</td>
						<td>Doplang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>26</td>
						<td>20301445</td>
						<td>SD NEGERI DOPLANG 03 ADIPALA</td>
						<td>Jl. Mernek - Doplang</td>
						<td>Doplang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>27</td>
						<td>20301443</td>
						<td>SD NEGERI DOPLANG 04 ADIPALA</td>
						<td>Jl. Doplang Lor No. 01</td>
						<td>Doplang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>28</td>
						<td>20301433</td>
						<td>SD NEGERI GLEMPANG PASIR 01 ADIPALA</td>
						<td>Jl. Terate No.02</td>
						<td>Glempangpasir</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>29</td>
						<td>20301451</td>
						<td>SD NEGERI GLEMPANGPASIR 02 ADIPALA</td>
						<td>Jl. Diponegoro No.6</td>
						<td>Glempangpasir</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>30</td>
						<td>20301452</td>
						<td>SD NEGERI GLEMPANGPASIR 04 ADIPALA</td>
						<td>Jl. Bolot No.121</td>
						<td>Glempangpasir</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>31</td>
						<td>20301453</td>
						<td>SD NEGERI GLEMPANGPASIR 05 ADIPALA</td>
						<td>Jl. Diponegoro No.357</td>
						<td>Glempangpasir</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>32</td>
						<td>20301471</td>
						<td>SD NEGERI GOMBOLHARJO 01 ADIPALA</td>
						<td>Jl. Masjid</td>
						<td>Gombolharjo</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>33</td>
						<td>20301470</td>
						<td>SD NEGERI GOMBOLHARJO 02 ADIPALA</td>
						<td>Jl. Melati No. 101 RT.01/RW.02</td>
						<td>Gombolharjo</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>34</td>
						<td>20301157</td>
						<td>SD NEGERI KALIKUDI 01 ADIPALA</td>
						<td>Jl. Polisi Sanmuhid No.100</td>
						<td>Kalikudi</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>35</td>
						<td>20301156</td>
						<td>SD NEGERI KALIKUDI 02 ADIPALA</td>
						<td>Jl.depok No.03</td>
						<td>Kalikudi</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>36</td>
						<td>20301155</td>
						<td>SD NEGERI KALIKUDI 04 ADIPALA</td>
						<td>Jl. Jend Sudirman No.92</td>
						<td>Kalikudi</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>37</td>
						<td>20301089</td>
						<td>SD NEGERI KARANGANYAR 01 ADIPALA</td>
						<td>Jl. Laut No.12</td>
						<td>Karanganyar</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>38</td>
						<td>20301088</td>
						<td>SD NEGERI KARANGANYAR 02 ADIPALA</td>
						<td>Jl. Laut No.68</td>
						<td>Karanganyar</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>39</td>
						<td>20301083</td>
						<td>SD NEGERI KARANGBENDA 01 ADIPALA</td>
						<td>Jl. Srandil No.85</td>
						<td>Karangbenda</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>40</td>
						<td>20301082</td>
						<td>SD NEGERI KARANGBENDA 02 ADIPALA</td>
						<td>Jl. Srandil No.92</td>
						<td>Karangbenda</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>41</td>
						<td>20301346</td>
						<td>SD NEGERI KARANGSARI 02 ADIPALA</td>
						<td>Jl. Masjid No.68</td>
						<td>Karangsari</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>42</td>
						<td>20301344</td>
						<td>SD NEGERI KARANGSARI 03 ADIPALA</td>
						<td>Jl.Masjid Karangsari</td>
						<td>Karangsari</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>43</td>
						<td>20301343</td>
						<td>SD NEGERI KARANGSARI 04 ADIPALA</td>
						<td>Jl. KERINCI NO.12</td>
						<td>Karangsari</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>44</td>
						<td>20301342</td>
						<td>SD NEGERI KARANGSARI 05 ADIPALA</td>
						<td>Jl. Serayu No. 29</td>
						<td>Karangsari</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>45</td>
						<td>20300378</td>
						<td>SD NEGERI PEDASONG 01 ADIPALA</td>
						<td>Jl. Protein No.23</td>
						<td>Pedasong</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>46</td>
						<td>20300377</td>
						<td>SD NEGERI PEDASONG 02 ADIPALA</td>
						<td>Jl. PEDASONG-PEDASONG</td>
						<td>Pedasong</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>47</td>
						<td>20300167</td>
						<td>SD NEGERI PENGGALANG 01 ADIPALA</td>
						<td>Jl. Balai Desa No. 11</td>
						<td>Penggalang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>48</td>
						<td>20300166</td>
						<td>SD NEGERI PENGGALANG 03 ADIPALA</td>
						<td>Jl. Balai Desa No.137</td>
						<td>Penggalang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>49</td>
						<td>20300165</td>
						<td>SD NEGERI PENGGALANG 04 ADIPALA</td>
						<td>Jl. Mawar No.14</td>
						<td>Penggalang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>50</td>
						<td>20300164</td>
						<td>SD NEGERI PENGGALANG 05 ADIPALA</td>
						<td>Jl. Jambu No.15</td>
						<td>Penggalang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>51</td>
						<td>20300163</td>
						<td>SD NEGERI PENGGALANG 06 ADIPALA</td>
						<td>Jl. Pandebesi No.21</td>
						<td>Penggalang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>52</td>
						<td>20300607</td>
						<td>SD NEGERI WELAHAN 01 ADIPALA</td>
						<td>Jalan Diponegoro No.138</td>
						<td>Welahan Wetan</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>53</td>
						<td>20300606</td>
						<td>SD NEGERI WELAHAN 02 ADIPALA</td>
						<td>Jl. Bendasari No.126</td>
						<td>Welahan Wetan</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>54</td>
						<td>20300605</td>
						<td>SD NEGERI WELAHAN 03 ADIPALA</td>
						<td>Jl. Perintis No.164</td>
						<td>Welahan Wetan</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>55</td>
						<td>20300604</td>
						<td>SD NEGERI WLAHAR 01 ADIPALA</td>
						<td>Jl. Serayu</td>
						<td>Wlahar</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>56</td>
						<td>20300602</td>
						<td>SD NEGERI WLAHAR 03 ADIPALA</td>
						<td>Jl. Protokol Rt 03 Rw 05</td>
						<td>Wlahar</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>57</td>
						<td>20339149</td>
						<td>SMA NEGERI 1 ADIPALA</td>
						<td>Jl. A YANI DOPLANG</td>
						<td>Doplang</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>58</td>
						<td>20300494</td>
						<td>SMP KRISTEN ADIPALA</td>
						<td>Jalan Srandil No. 223 Adiraja</td>
						<td>Adipala</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>59</td>
						<td>20300499</td>
						<td>SMP MUHAMMADIYAH ADIPALA</td>
						<td>Jl. Balai Desa Penggalang No.02</td>
						<td>PENGGALANG</td>
						<td>SWASTA</td>
					</tr>
					<tr>
						<td>60</td>
						<td>20300558</td>
						<td>SMP NEGERI 1 ADIPALA</td>
						<td>Jl. Laut No.105</td>
						<td>Adipala</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>61</td>
						<td>20300577</td>
						<td>SMP NEGERI 2 ADIPALA</td>
						<td>Jl. Srandil No. 100</td>
						<td>Karangbenda</td>
						<td>NEGERI</td>
					</tr>
					<tr>
						<td>62</td>
						<td>20300443</td>
						<td>SMP PEMDA ADIPALA</td>
						<td>Jl. Srandil No.408</td>
						<td>ADIPALA</td>
						<td>SWASTA</td>
					</tr>
				</tbody>
			</table>

			<div class=""> 
				<iframe src="https://www.google.com/maps/d/embed?mid=17fMvtEiC6lfp2XpLj1TW6fn54eCCb-5p&hl=en" style="width: 100%; height: 500px; min-height: 300px;"></iframe>
			</div>

			<h4 class="patas50px wow animated fadeInUp">Tempat Keagamaan</h4>     
			<table class="table table-bordered table-hover table-sm wow animated fadeInUp">
				<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>Nama Tempat</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Masjid Al Hikmah</td>
						<td>Jl. Kauman Adipala No.144, Adipala</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Masjid Nur-Hidayah</td>
						<td>Jl. Kauman Adipala No.44, Sumpilan, Adipala</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Masjid AR ROHMAH CIWIRU</td>
						<td>Adipala</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Masjid Al Ishlah Adirejakulon</td>
						<td>Adireja Kulon, Adipala</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Masjid An Nur Penggalang</td>
						<td>Area Sawah, Adipala</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Masjid Darul Hikmah Adiraja</td>
						<td>Jl. Srandil No.2014, Penempen, Adiraja, Adipala</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Masjid Jami' Nurul Huda</td>
						<td>Adireja Kulon, Adipala</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Masjid Baitur Rohim</td>
						<td>Jl. Jambu No.33, Kebondalem Wetan, Adipala</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Masjid Darus Salam</td>
						<td>Jl. Laut No.184, Adipala</td>
					</tr>
					<tr>
						<td>10</td>
						<td>GKJ Adireja-Adipala</td>
						<td>Jl. Gereja No. 196 RT. 02 RW. 01, Adipala</td>
					</tr>
					<tr>
						<td>11</td>
						<td>Pura Mandara Giri Gunung Selok</td>
						<td>Jalan Srandil, Karangbenda, Adipala, Pereng, Karangbenda</td>
					</tr>
					<tr>
						<td>12</td>
						<td>Vihara Padepokan</td>
						<td>Karangbenda, Adipala, Karangbenda, Cilacap</td>
					</tr>
					<tr>
						<td>13</td>
						<td>Ma Chao Temple</td>
						<td>Bunton, Adipala</td>
					</tr>
				</tbody>
			</table>

			<div class=""> 
				<iframe src="https://www.google.com/maps/d/u/4/embed?mid=1-O8KqbKiLbXLOIx8Dx0ixrwL_-vyEp1O" style="width: 100%; height: 500px; min-height: 300px;"></iframe>
			</div>

			<h4 class="patas50px wow animated fadeInUp">Tempat Wisata</h4>         
			<table class="table table-bordered table-hover table-sm wow animated fadeInUp">
				<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>Nama Tempat</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Pantai Bunton</td>
						<td>Bunton, Adipala</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Cemara Sewu</td>
						<td>Bunton, Adipala</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Gunung Selok</td>
						<td>Karangbenda, Adipala</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Gunung Srandil</td>
						<td>Glempangpasir, Adipala</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Pantai Sodong</td>
						<td>Jl. Laut, Karangbenda, Adipala</td>
					</tr>
				</tbody>
			</table>

			<div class=""> 
				<iframe src="https://www.google.com/maps/d/u/4/embed?mid=1vNP4e5QaTlbhrolCks1tQfaaMU7B174E" style="width: 100%; height: 500px; min-height: 300px;"></iframe>
			</div>

			<h4 class="patas50px wow animated fadeInUp">Transportasi</h4>      
			<table class="table table-bordered table-hover table-sm wow animated fadeInUp">
				<thead class="thead-light">
					<tr>
						<th>No</th>
						<th>Nama Tempat</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Terminal Adipala</td>
						<td>Adipala, Kabupaten Cilacap</td>
					</tr>
					<tr>
						<td>2</td>
						<td>SPBU 44.532.24 Adipala</td>
						<td>Adipala, Kabupaten Cilacap</td>
					</tr>
				</tbody>
			</table>

			<div class=""> 
				<iframe src="https://www.google.com/maps/d/u/4/embed?mid=1WxVUroTymtajrh7jKh5JpKZHuIozV-Zj" style="width: 100%; height: 500px; min-height: 300px;"></iframe></iframe>
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

</body>
</html>