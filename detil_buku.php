<?php
include "../include/koneksi_db.php";
include "../buku/link.php";

$judul = isset($_GET['judul']) ? $_GET['judul'] :"";

$querry=mysqli_query($konek,"SELECT * FROM data_buku WHERE judul='$judul'");
$hasil=mysqli_fetch_array($querry);
?>
 <table class="table-data" width=100% border=1>
     <tr><td colspan="2" class="head-data">Data Detail Buku : "<?php echo $judul; ?>"</td></tr>
	 <tr><td class ="pinggir-data">Judul</td><td class="pinggir-data"><?php echo $hasil[1]; ?></td></tr>
	 <tr><td class="pinggir-data">Pengarang</td><td class="pinggir-data"><?php echo $hasil[2]; ?></td></tr>
	 <tr><td class="pinggir-data">Tahun Terbit</td><td class="pinggir-data"><?php echo $hasil[3]; ?></td></tr>
	 <tr><td class="pinggir-data">Penerbit</td><td class="pinggir-data"><?php echo $hasil[4]; ?></td></tr>
	<tr><td class="pinggir-data">I S B N</td><td class="pinggir-data"><?php echo $hasil[5]; ?></td></tr>
	<tr><td class="pinggir-data">Jumlah Halaman</td><td class="pinggir-data"><?php echo $hasil[6]; ?> <b>halaman</b></td></tr>
	<tr><td class="pinggir-data">Kategori</td><td class="pinggir-data"><?php echo $hasil[7]; ?></td></tr>
	<tr><td class="pinggir-data">Jumlah Buku</td><td class="pinggir-data"><?php echo $hasil[8]; ?></td></tr>
	<tr><td class="pinggir-data">Lokasi</td><td class="pinggir-data"><?php echo $hasil[9]; ?></td></tr>
	<tr><td class="pinggir-data">Asal Perolehan</td><td class="pinggir-data"><?php echo $hasil[10]; ?></td></tr>
    <tr><td class="pinggir-data">Jumlah Sementara</td><td class="pinggir-data"><?php echo $hasil[11]; ?></td></tr>
	<tr><td class="pinggir-data">Tgl. input</td><td class="pinggir-data"><?php echo $hasil[12]; ?></td></tr>
	</table>