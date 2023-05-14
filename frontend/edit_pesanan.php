<?php 
require_once '../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if(!empty($_idedit)){
    // edit
    $sql = "SELECT * FROM pesanan WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();

    $sql2 = "SELECT * FROM produk WHERE nama = ?";
    $st2 = $dbh->prepare($sql2);
    $st2->execute([$row['nama_produk']]);
    $produk = $st2->fetch();


}else{
    // new data
    $row = [];
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Regar Shop</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.php"><h2 class='head'>Regar Shop</h2></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.php">Home</a>
                     <a href="../admin/index.php">Admin</a>
                     <a href="#">Fashion</a>
                     <a href="#">Blog</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Baju</a>
                        <a class="dropdown-item" href="#">Celana</a>
                        <a class="dropdown-item" href="#">Sepatu</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">

                     <div class="login_menu">
                        <ul>
                           <li><a href="../admin/index.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Admin</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->

                  <!-- konten -->
                  <div class="div">
                    <div class="container">
                    <form method="POST" action="proses_pesanan.php">
    <div class="form-group row">
        <label for="nama_produk" class="col-4 col-form-label">nama produk</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="nama_produk" name="nama_produk" value="<?=$row['nama_produk']?>" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">tanggal</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="tanggal" name="tanggal" value="<?php echo date('20y-m-d'); ?>" type="date" class="form-control" readonly>
            </div>
        </div>
    </div>
    
    <div class="form-group row">
        <label for="qty" class="col-4 col-form-label">qty</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="qty" name="qty" value="<?= $row['qty'] ?>" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">harga satuan</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="harga" name="harga" type="number" class="form-control" value="<?=$produk['harga']?>" readonly>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_pemesan" class="col-4 col-form-label">nama_pemesan</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="nama_pemesan" name="nama_pemesan" value="<?= $row['nama_pemesan'] ?>" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_pemesan" class="col-4 col-form-label">alamat_pemesan</label>
        <div class="col-8">
            <div class="input-group">
                
            <input id="alamat_pemesan" name="alamat_pemesan" value="<?= $row['alamat_pemesan'] ?>" type="text" class="form-control">
            </div>
        </div>
    </div>

    
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
                $button = (empty($_idedit)) ? "Simpan":"Update"; 
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?=$button?>" />
            <input type="hidden" name="idedit" value="<?=$_idedit?>" />
        </div>
    </div>
</form>
            <!-- footer section start -->
            <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.php"><h2>Regar Shop</h2></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+62 843 8934 8695</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Created by Amir Hamzah siregar_Sistem Informasi 15</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

