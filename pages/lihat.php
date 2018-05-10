<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cache &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <!-- <link rel="shortcut icon" href="favicon.ico"> -->
  
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/icomoon.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/style.css">
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body class="boxed">

  <!-- Loader -->
  <div class="fh5co-loader"></div>

  <div id="wrap">

  <div id="fh5co-page">
    <header id="fh5co-header" role="banner">
      <div class="container">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
        <div id="fh5co-logo"><a href="index.html"><img src="images/logo.jpg" alt="Free HTML5 Website Template"></a></div>
        <nav id="fh5co-main-nav" role="navigation">
          <ul>
            <li><a href="homeadmin.php">HOME</a></li>
            <li class="has-sub">
              <div class="drop-down-menu">
              <a href="pages/input.php">INPUT DATA KARYAWAN</a>
                <div class="drop-down-menu">
                </div>
              </div>
            </li>
            <li><a href="pages/lihat.php">TAMPIL DATA KARYAWAN</a></li>
            <li class="has-sub">
              <div class="drop-down-menu">
                <a href="pages/logout.php">Logout</a>
                <div class="drop-down-menu">
                </div>
              </div>
            </li>
            <li class="cta"><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header -->
  <html>
  <body>
    <table width="10" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="green">
      <tr>
        <td height="40" align="center" bgcolor="black"><strong></strong>
          <h2><strong><font color="yellow"> DATA KARYAWAN</font></strong></h2></td>
        </tr>
        <tr>
          <td bgcolor="white"><table width="600" border="0" align="left" cellpadding="3" cellspacing="0">
          </td>
        </tr>
      </table>
    </head>
    <body>
      <table border="1" width="100%">
       <tr>
         <th>NIK</th>
         <th>Nama Lengkap</th>
         <th>Alamat</th>
         <th>No Telepon</th>
         <th>Jenis kelamin</th>
         <th>Status</th>
         <th>Agama</th>
         <th>Divisi</th>
         <th>Foto</th>
         <th>Email</th>
         <th colspan="2">Aksi</th>
       </tr>
       <?php 
 // Load file koneksi.php  
       include'koneksi.php';  

$sql = "SELECT * FROM karyawan"; // Query untuk menampilkan semua data siswa  
$hasil = mysqli_query($koneksi, $sql); // Eksekusi/Jalankan query dari variabel $query    
while ($data = mysqli_fetch_array($hasil))
{ // Ambil semua data dari hasil eksekusi $sql   
  echo "<tr>";
  echo "<td>".$data['nik']."</td>";   
  echo "<td>".$data['nama_lengkap']."</td>"; 
  echo "<td>".$data['alamat']."</td>"; 
  echo "<td>".$data['no_tlp']."</td>";
  echo "<td>".$data['jenis_kelamin']."</td>";
  echo "<td>".$data['status']."</td>";
  echo "<td>".$data['agama']."</td>";
  echo "<td>".$data['divisi']."</td>";
  echo "<td><img src=../images/".$data['foto']." 'width='50' height='50'></td>"; 
  echo "<td>".$data['email']."</td>";
  echo "<td><a href='edit.php?nik=".$data['nik']."'>Ubah</a></td>";    
  echo "<td><a href='hapus.php?nik=".$data['nik']."'>Hapus</a></td>";
  echo "</tr>"; 
}   
?>
      </table>
    </body>
<div class="introtext">
  <h2><center> PT.Sukses Sejahtera</h2></center>
  <center>intinya jangan malas<a href="http://www.os-templates.com/"></a> <a href="http://www.os-templates.com/"></a>.</>
  </div>
  <li class="clear featured_slide_Image"> 
    <!-- Leave This Empty --> 
  </li>
</ul>
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <p class="right">Copyright &copy; 2018 - All Rights Reserved - <a href="#">PT.Sukses Sejahtera</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
