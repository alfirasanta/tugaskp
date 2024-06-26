<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indibiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets')?>//img/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets')?>//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets')?>//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets')?>//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets')?>//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets')?>//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets')?>//css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html"><img src="<?= base_url('assets')?>/img/indibiz.png"></a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('Pelanggan/index')?>">Beranda</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('Pelanggan/layanan')?>">Layanan</a></li>
          <li><a class="nav-link scrollto" >Laporan</a></li>
          <li><a class="nav-link scrollto">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="linkedin"><i class="bi bi-person-circle"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
	 <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background-image:url('<?= base_url('assets')?>//img/cover1.jpg')";>
    <div class="container text-center text-md-left" data-aos="fade-up" >
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>INDIBIZ</h2>
          <p>Hadir untuk memenuhi kebutuhan akses internet Anda.</p>
        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color:#3498db">
      <div class="container">
        <div class="row">
				
          <div class="col-lg-8 pt-6 pt-lg-5">
            <h2 style="color:white">Tentang Kami</h2>
            <p style="color:white">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
				nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
				reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
				
				<p style="color:white">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
				nisi ut aliquip ex ea commodo consequat. </p>
          
        </div>
				<div class="col-lg-4">
            <img src="<?= base_url('assets')?>//img/cover3.jpg" class="img-fluid" alt="">
          </div>
      </div>
    </section>
    <!-- End About Section -->
       

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk">
      <div class="container">

        <div class="section-title">
          <h2>Produk Kami</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
        </div>

        <div class="row produk-container">

          <div class="col-lg-4 col-md-6 produk-item filter-app wow fadeInUp">
            <div class="produk-wrap">
              <figure>
                <img src="<?= base_url('assets')?>//img/cover4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="produk-info">
                <h4 style="text-align: center"><a href="produk-details.html">Produk 1</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 produk-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="produk-wrap">
              <figure>
                <img src="<?= base_url('assets')?>//img/cover4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="produk-info">
							<h4 style="text-align: center"><a href="produk-details.html">Produk 2</a></h4>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 produk-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="produk-wrap">
              <figure>
                <img src="<?= base_url('assets')?>//img/cover4.jpg" class="img-fluid" alt="">
              </figure>

              <div class="produk-info">
							<h4 style="text-align: center"><a href="produk-details.html">Produk 3</a></h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" >

    <div class="footer-top" style="background-color:#3498db">
      <div class="container" >
        <div class="row" >

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Indibiz</h3>
            <p style="color:white">
              Jalan Bunga <br>
              New York, 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +62 5589 55488 55<br>
              <strong>Email:</strong> info@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><a href="#" style="color:white;">Beranda</a></li>
              <li><a href="#" style="color:white">Layanan</a></li>
              <li><a href="#" style="color:white">Laporan</a></li>
              <li><a href="#" style="color:white">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#" style="color:white">Service 1</a></li>
              <li><a href="#" style="color:white">Service 2</a></li>
              <li><a href="#" style="color:white">Service 3</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Kunjungi Kami</h4>
            <iframe src="https://www.google.co.id/maps/"></iframe>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets')?>//vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('assets')?>//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets')?>//vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets')?>//vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets')?>//vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets')?>//vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('assets')?>//vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets')?>//js/main.js"></script>

</body>

</html>
