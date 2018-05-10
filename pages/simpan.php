<?php
include 'koneksi.php';
include 'fungsi.php';
// menyimpan data kedalam variabel
$nik            = $_POST['nik'];
$nama           = $_POST['nama_lengkap'];
$alamat        	= $_POST['alamat'];
$no_tlp 		 = $_POST['no_tlp'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$status         = $_POST['status'];
$agama         = $_POST['agama'];
$divisi         = $_POST['divisi'];
$foto         = $_FILES['foto']['name'];
$tmp        = $_FILES['foto']['tmp_name'];
$email        = $_POST['email'];


$fotobaru = date('dmYHis').$foto;

$path = "../images/".$foto;

if(move_uploaded_file($tmp, $path)){

$query="INSERT INTO karyawan  SET nik='$nik',nama_lengkap='$nama',alamat='$alamat',no_tlp='$no_tlp',jenis_kelamin='$jenis_kelamin',status='$status',agama='$agama',divisi='$divisi',foto='$foto',email='$email'";
mysqli_query($koneksi, $query);

header("location:lihat.php");
}
?>