-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 04:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecamatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'malasngoding', '10406c1d7b7421b1a56f0d951e952a95');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(255) NOT NULL,
  `judulberita` varchar(1000) NOT NULL,
  `tanggalupload` varchar(50) NOT NULL,
  `isiberita` varchar(10000) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judulberita`, `tanggalupload`, `isiberita`, `gambar`) VALUES
(15, 'Pohon Tumbang Macetkan Jalan Nasional', 'Kamis, 21-02-2019', 'MAJENANG – Hujan deras sepanjang Minggu (17/2) siang hingga sore mengakibatkan sejumlah pohon peneduh bertumbangan. Bahkan lalulintas di jalan nasional pun sempat terhambat menyusul Pohon tumbang di Kecamatan Cimanggu, Majenang dan Wanareja. Lokasi kejadian ada di Desa Cilempuyang Kecamatan Cimanggu, Cilopadang dan Padangjaya (Majenang) serta bukit Cikukun Desa Adimulya (Wanareja). <br><br>\r\nAkibatnya, kendaraan harus bergantian melintasi titik tersebut. “Pohon tumbang menutup jalan di dekat Puskesmas Majenang 1,” ujar salah seorang warga Hendro, Minggu kemarin. Aparat gabungan diterjunkan untuk memotong pohon itu dengan memakai gergaji mesin. Petugas terdiri dari aparat Polsek, BPBD, Pengawas Jalan Nasional dan warga sekitar. Mereka bahu membahu menyingkirkan pohon tumbang yang ada di dekat Puskesmas Majenang 1. Pohon tumbang juga menimpa rumah Hadi Suryanto, warga Jalan Banteng Loreng Desa Padangjaya. Rumah ini mengalami keruskana setelah tertimpa di bagian tengah. Belum diketahui secara pasti tingkat kerusakan dan nilai kerugian. (har/din)<br><br>\r\n\r\nSumber: https://radarbanyumas.co.id/pohon-tumbang-macetkan-jalan-nasional/\r\nCopyright © Radarbanyumas.co.id', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/pohontumbang.png.jpg\" style=\"height:356px; width:779px\" /></p>\r\n'),
(16, 'Alun-Alun Akan Direhab Rp 1 Miliar', 'Kamis, 21-02-2019', 'CILACAP – Alun-alun Cilacap bakal direhab total tahun ini menyusul sejumlah bagian jalur pedestrian sudah rusak berat. Rencananya, rehab ini akan dimulai April mendatang. “Prinsipnya, RTH yang kami bangun, termasuk alun-alun harus memiliki fungsi ekologi yang berfungsi memberikan keteduhan dan kesejukan masyarakat yang berkunjung ke sana,” jelas Kabid Kawasan Permukiman Dinas Perumahan Permukiman dan Pertanahan (Disperkimta) Kabupaten Cilacap, Akhmad Budi Santoso.<br><br> \r\nDia menjelaskan, rehab alun-alun yang masuk kategori Ruang Terbuka Hijau (RTH), tetap akan mempertimbangkan faktor ekologi, estetika. Sebagai taman kota, alun-alun juga harus tetap berfungsi sebagai paru-paru kota. (nas/din)<br><br>\r\n\r\nSumber: https://radarbanyumas.co.id/alun-alun-akan-direhab-rp-1-miliar/\r\nCopyright © Radarbanyumas.co.id', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/alunalun.jpg\" style=\"height:326px; width:785px\" /></p>\r\n'),
(17, 'Betonisasi Dukung Perekonomian di Adipala', 'Kamis, 21-02-2019', 'CILACAP- Ruas Jalan Provinsi Adipala hingga Slrang yang sebagian kondisinya rusak berat dan selama ini sering dikeluhkan masyarakat, rencananya akan dibenahi. Rencana pembangunan jalan tersebut akan dimulai awal tahun ini. Warga dan Pemerintah Kecamatan Adipala menyambut gembira rencana pembangunan jalan tersebut. Terlebih jalan sepanjang satu kilometer menuju Slarang tersebut bakal diperbaiki menggunakan cor atau rigidbeton.<br><br> Rigid beton dinilai menjadi satu-satunya solusi untuk memperbaiki kondisi jalan yang rusak tersebut. Terlebih masyarakat menilai hanya di Kecamatan Adipala yang jalannya belum diperbaiki. “Kalau dicor akan lebih awet, karena di jalan protokol ini banyak kendaraan berat yang melintas. Terlebih lagi tinggal Kecamatan Adipala saja di wilayah Timur Cilacap yang jalannya rusak. Di kecamatan lain sudah mulai diperbaiki,” ujar Warga Adipala, Suismawati. Camat Adipala, Teguh Prastowo mengatakan jika kualitas jalan di Adipala bagus, maka akan mempengaruhi pengembangan perekonomian di Adipala. “Kita selama ini memiliki beban jalan rusak, karena banyak kendaraan yang lewat sehingga tonase jalan rusak. <br><br>Masyarakat Adipala pun banyak mengeluh dengan kondisi jalan tersebut,” kata dia. Menurut Teguh, dengan dirigid beton maka alur pembangunan ekonomi akan semakin maju dan bagus. “Kalau semuanya sudah bagus secara otomatis dapat meningkatkan taraf perekonomiaan warga karena sudah tidak ada kendala lagi. Desa jadi lebih maju, masing-masing desa juga harus dikembangkan. Setiap desa harus memiliki inovasi desa dengan mengedepankan ciri khas dari desa. Sehingga desa tersebut menjadi daya tarik tersendiri,” jelasnya. Dia mengakui, kini wilayah Kecamatan Adipala sudah mulai menggeliat. Dengan adanya investor di berbagai desa, menunjukan bahwa Adipala mulai dilirik dan menjadi daya tarik tersendiri. “Sekarang pertokoan sudah mulai banyak, retaie juga mulai mengembangkan bisnisnya di Adipala. Begitu juga dengan kuliner. Akhir tahun lalu, sudah terlihat banyak yang membuka di wilayah Kecamatan Adipala. Tentunya ini menjadi daya beli masyarakat dan kemajuan untuk Adipala,” ujarnya. (ray/din)<br><br>\r\n\r\nSumber: https://radarbanyumas.co.id/betonisasi-dukung-perekonomian-di-adipala/\r\nCopyright © Radarbanyumas.co.id', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/betonisasi(1).png.jpg\" style=\"height:381px; width:779px\" /></p>\r\n'),
(18, 'PLTU Wajib Angkat Kemakmuran Adipala', 'Kamis, 21-02-2019', 'ADIPALA-Keberadaan PLTU di Adipala diharapkan mampu memberikan kontribusi nyata bagi kemajuan Kecamatan Adipala. Hal itu dikatakan sejumlah tokoh Adipala yang tidak ingin hanya menerima dampaknya. Pasalnya, hiruk pikuk proyek yang mencapai triliunan Rupiah tersebut selain telah memberikan keuntungan bagi sebagain orang, namun memberikan kerugian bagi banyak orang. Bahkan, bisa jadi hingga saat ini masih lebih banyak kerugiannya.<br><br>\r\nPLTU Wajib Angkat Kemakmuran Adipala Radar Banyumas SENIN, 3 OKTOBER 2016 ADIPALA-Keberadaan PLTU di Adipala diharapkan mampu memberikan kontribusi nyata bagi kemajuan Kecamatan Adipala. Hal itu dikatakan sejumlah tokoh Adipala yang tidak ingin hanya menerima dampaknya. Pasalnya, hiruk pikuk proyek yang mencapai triliunan Rupiah tersebut selain telah memberikan keuntungan bagi sebagain orang, namun memberikan kerugian bagi banyak orang. Bahkan, bisa jadi hingga saat ini masih lebih banyak kerugiannya. “Karena itu, agar sekarang dapat lebiih banyak keuntungannya, pengelola PLTU Adipala bisa bekerjasama untuk membangun Kecamatan Adipala,” kata Tunut Widodo dari GP Ansor. Menurut dia, banyak harapan setelah lebih dari 4 tahun kegiatan proyek pembangunan PLTU memasuki tahap operasional. <br><br>\r\nSebab, setiap fasilitas nasional harus mampu memberikan dampak yang positif baik langsung maupun tidak langsung. “Tugasnya membantu memperkuat pasokan listrik nasional. Secara tidak langsung telah memberikan dampak postif bagi ketersediaan energi,” beber dia. Diakuinya, dampak positif langsungnya juga harus bisa dirasakan. Misalnya, bagi masyarakat di sekitar lokasi PLTU. Sebab, masyarakat sudah empat tahun merasakan tebalnya debu, bisingnya suara belum lagi tentang dampak sosialnya. “Sehingga wajar jika sekarang giliran PLTU yang bisa memberi manfaat bagi masyarakat. Apalagi PLTU bukan sekedar memasok listrik. Namun juga menjadi corp bisnis berskala nasional,” ujar dia. Tunut berharap agar “kemiskinan” di Adipala juga sedikiit demi sedikit bisa dikikis. Setidaknya tidak ada warga yang tinggal di rumah yang tidak layak. Sebab, dari laporan anggota Ansor di desa terdekat saja seperti Desa Bunton masih banyak rumah warga yang tidak layak huni. “Ini hanya sebagian persoalan yang bisa diatasi hanya dengan kerjasama dari berbagai pihak. Masih banyak persoalan masyarakat yang butuh,” kata dia. Kepala Desa Penggalang Miswanto SE juga mempunyai harapan yang sama. Sebab fasilitas nasional harus memberikan dampak positif bagi daerah sekitarnya. Apalagi PLTU juga sebuah fasilitas usaha yang di fasilitasi negara. “Kaau tidak ada perannya untuk masyarakat disekitarnya percuma saja.<br><br>\r\n Sebab awal masuk ke sini tentu dengan keinginan agar saling memberikan manfaat. Setidaknya Coorporate Social Responbility (CSR) bisa menjadi harapan warga,”kata dia. Sementara itu Humas PLTU Jateng 2 Adipala Kendida kepada Radarmas beberapa waktu lalu menjelaskan jika CSR PLTU Jateng 2 Adipala ada tiga bidang. “Yakni pemberdayaan masyarakat, pelayanan masyarakat dan peningkatan hubungan masyarakat. Artinya CSR memang sudah diberikan sejak PLTU ini mulai dibangun,”kata dia.(yan/ttg)<br><br>\r\n\r\nSumber: https://radarbanyumas.co.id/pltu-wajib-angkat-kemakmuran-adipala/\r\nCopyright © Radarbanyumas.co.id', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/pltu(1).jpg\" style=\"height:290px; width:782px\" /></p>\r\n'),
(19, 'Adipala', 'Kamis, 21-02-2019', 'IOQWEHHWQ', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/pasarterminal.jpg\" style=\"height:289px; width:781px\" /></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
