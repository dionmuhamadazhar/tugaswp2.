<?php 

include 'koneksi.php';
include 'fungsi.php';
$nik            = $_POST['nik'];
$nama           = $_POST['nama_lengkap'];
$alamat        	= $_POST['alamat'];
$no_tlp 		 = $_POST['no_tlp'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$status         = $_POST['status'];
$agama         = $_POST['agama'];
$divisi         = $_POST['divisi'];
$foto         = $_POST['foto'];
$email        = $_POST['email'];

$query="UPDATE infokaryawan  SET nik='$nik',nama_lengkap='$nama',alamat='$alamat',no_tlp='$no_tlp',jenis_kelamin='$jenis_kelamin',status='$status',agama='$agama',divisi='$divisi',foto='$foto',email='$email'";
mysqli_query($koneksi, $query);

header("location:../pages/lihat.php");


?>