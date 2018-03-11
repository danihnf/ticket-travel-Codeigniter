<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?PHP
$id="";
$nama="";
$gambar="";
$kode="";
$rute_from = "";
$rute_to = "";
$depart = "";
$arrive_at = "";
$price = "";
foreach ($pilih->result() as $obj){

  $id = $obj->id;
  $nama = $obj->nama;
  $gambar = $obj->gambar;
  $kode = $obj->kode;
  $dari = $obj->rute_from;
  $ke = $obj->rute_to;
  $depart = $obj->depart_at;
  $arrive = $obj->arrive_at;
  $price = $obj->price;

}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Reavion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="<?php echo base_url(); ?>assets/css/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.min.css">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
  <link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
  <link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
  <link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
  <link href='<?php echo base_url(); ?>assets/css/seat.css' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
  <!-- Custom Theme files -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <!--animate-->
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
  <script>
   new WOW().init();
 </script>
 <!--//end-animate-->
</head>
<body>
  <!-- top-header -->
  <!--- /top-header ---->
  <!--- header ---->
  <div class="header">
    <div class="container">
      <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
        <a href="<?php echo base_url(); ?>landing">Reavion</span></a>  
      </div>
      <div class="bus wow fadeInUp animated" data-wow-delay=".5s">
        <a href="index.html" class="buses active">PESAWAT</a>

      </div>
      <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
        <li><i class="fa fa-lock"></i></li>
        <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!--- /header ---->
  <!--- footer-btm ---->
  <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
      <div class="navigation">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
            <nav class="cl-effect-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>landing">Cari Tiket</a></li>
                <li><a href="<?php echo base_url(); ?>boking/cek">Cek Pemesanan</a></li>
                <li><a href="#">Kontak Kami</a></li>
                <div class="clearfix"></div>
              </ul>
            </nav>
          </div><!-- /.navbar-collapse -->  
        </nav>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
  <!--- /footer-btm ---->
  <!--- banner-1 ---->
  <div class="banner-1 ">
    <div class="container">
      <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"></h1>
    </div>
  </div>
  <!--- /banner-1 ---->
  <div class="selectroom">
    <div class="container"> 
      <div class="selectroom_top">
        <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
          <img src="<?php echo base_url(); ?>assets/logo/<?php echo $gambar; ?>" class="img-responsive" alt="">
        </div>
        <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
          <h2>Pesawat</h2>
          <p class="dow"><?php echo $kode; ?> - <?php echo $nama; ?>, <?php echo $dari ?> → <?php echo $ke; ?></p>
          <p><span><?php $penumpang = $this->uri->segment(4);
          ?><?php echo $penumpang; ?> Kursi</span> Executive Room with Breakfast</p>
          <ul>
            <li>
              <h6>Berangkat</h6>
              <h4><?php echo date('H:i',strtotime($depart)); ?></h4>
              <h6><?php echo date('d M Y',strtotime($depart)); ?></h6>
            </li>
            <li>
              <h6>Datang</h6>
              <h4><?php echo date('H:i',strtotime($arrive)); ?></h4>
              <h6><?php echo date('d M Y',strtotime($arrive)); ?></h6>
            </li>
            <li>
              <h6>Penumpang</h6>
              <h4><?php echo $penumpang; ?> Kursi</h4>
            </li>
          </ul>
          <div class="clearfix"></div>
          <div class="grand">
            <span>Total Biaya</span>
            <h6><?php $penumpang = $this->uri->segment(4);
            ?><?php echo $penumpang; ?> x Rp <?php echo $price; ?></h6>
            <h3>Rp <?php $penumpang = $this->uri->segment(4);
            ?><?php echo $penumpang*$price; ?></h3>
            <?php $total_price = $penumpang*$price; ?>
          </div>

        </div>
        <div class="clearfix"></div>
      </div>
      <div class="selectroom_top form-group">
        <h2>Detail Kontak</h2>
        <?php 
        $str = 'abcdef1234';
        $shufle = str_shuffle($str); ?>
        <form method="POST" action="<?php echo base_url(); ?>landing/booking/<?php echo $id; ?>">
          <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <ul>
              <input name="token_pemesan" type="hidden" value="<?php echo $shufle; ?>">
              <input name="total_price" type="hidden" value="<?php echo $total_price; ?>">
              <?php $id_rute = $this->uri->segment(3); ?>
              <?php $penumpang = $this->uri->segment(4); ?>
              <input name="id_rute" type="hidden" value="<?php echo $id_rute; ?>">
              <input name="penumpang" type="hidden" value="<?php echo $penumpang; ?>">
              <li class="nam">
                <label class="inputLabel">Nama Lengkap</label>
                <input name="nama_pemesan" class="email" type="text" placeholder="Nama Lengkap">
              </li>

              <li class="nam">
                <label class="inputLabel">Email</label>
                <input name="email" class="name" type="text" placeholder="Email">
              </li>
              
              <li class="nam">
                <label class="inputLabel">No Handphone</label>
                <input name="nohp" class="name" type="text" placeholder="No Handphone">
              </li>

              <li class="nam">
                <label class="inputLabel">Alamat</label>
                <input name="alamat" class="name" type="text" placeholder="Alamat">
              </li>
              <div class="clearfix"></div></ul>
              <div class="sear">    
                <button class="seabtn">Pesan</button> </div>
                <div class="clearfix"></div>
              </ul>
            </div>

          </div>

        </form>
      </div>
    </div>
  </div>
  <!--- /selectroom ---->
  <!---copy-right ---->
  <div class="copy-right">
    <div class="container">

      <div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
        <ul>
          <li><a class="facebook" href="<?php echo base_url(); ?>assets/#"><span>Facebook</span></a></li>
          <li><a class="twitter" href="<?php echo base_url(); ?>assets/#"><span>Twitter</span></a></li>
          <li><a class="flickr" href="<?php echo base_url(); ?>assets/#"><span>Flickr</span></a></li>
          <li><a class="googleplus" href="<?php echo base_url(); ?>assets/#"><span>Google+</span></a></li>
          <li><a class="dribbble" href="<?php echo base_url(); ?>assets/#"><span>Dribbble</span></a></li>
        </ul>
      </div>
      <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="<?php echo base_url(); ?>assets/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
  </div>
  <!--- /copy-right ---->

</body>
</html>