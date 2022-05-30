<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VISIDATA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/about.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="container">
        <div id="logo" style="margin-top: 3%;" class="pull-left">
          <h1><a href="/"><img src="assets/img/logofix.png" width="165" height="75"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
        </div>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#clients">Client</a></li>

          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#partners">Partners</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div style="text-align:center ;" class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Making <span>your ideas
          happen!
        </span></h1>
      <div style="text-align:center; padding-top:5%;" class="container">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="company-profile" class="company-profile">
      <div class="container" data-aos="fade-up">
        <div class="section-title">

        </div>
        <p align="center">
          <img src="assets/img/about.png" class="img-fluid" alt="">

        </p>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>About Us</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div style="width: 100%; height:100%">
              <video id="video" width="600" height="345" autoplay muted controls loop>
                <source src="assets/video/visdat.mp4" type="video/mp4">
                Your browser does not support HTML video.
              </video>
            </div>
            <script>
              var video = document.getElementById("video");
              var documentTitle = document.title;
              document.addEventListener('visibilitychange', function() {
                var state = document.visibilityState;
                if (!video.paused) {
                  if (state === 'hidden') {
                    video.pause()
                  }

                }
              })
            </script>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3><i>an experienced team, equipped with the most innovative tools.</i>
            </h3>

            <p>
              VISIDATA is a company built by professionals with extensive track record in delivering business inteligence solutions for corporations. We focus on helping companies deal with data deluge using the right tools with the right approach.
              We learned from our clients experience that the the real measure of success in business intelligence is its extent of use by managers and users in their decision making and knowledge gathering.
              Our mission is to help our clients rapidly implement and get immediate returns from, a reliable and relevant BI and Data Management system.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Client</h2>
          <h3><span>Our Client</span></h3>
        </div>

        <div class="container" data-aos="zoom-in">

          <div class="row">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/6.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/7.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/8.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/9.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3><span>SOLUTION & SERVICES</span></h3>
          <p>We have a laser focus on Data Management and Analytics solution.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height: 450px">

              <img src="assets/img/serv/1.png" style="width:150px; height:100px;" class="img-fluid" alt="">

              <h4><a href="">BI and Analytics</a></h4>
              <p>- BI Reporting & Data viz.<br>
                - Business Dashboard.<br>
                - Geo/spatioal analysis.<br>
                - Data analysis/mining.<br>
                - Text mining<br>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" style="height: 450px">
              <img src="assets/img/serv/2.png" style="width:150px; height:100px;" class="img-fluid" alt="">
              <h4><a href="">Big Data</a></h4>
              <p>- All data necessary for business<br>
                - Unstructed data, semi-structured as well as structured<br>
                - Apps: text analytics, log analysis, data offloading, voice & video<br>
                - Build real use cases
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="height: 450px">
              <img src="assets/img/serv/3.png" class="img-fluid" alt="" style="width:150px; height:100px;">
              <h4><a href="">Data quality mgmt & mdm</a></h4>
              <p>- Data cleansing, data dedup<br>
                - Data quality<br>
                - Data reconciliation<br>
                - Data preparation<br>
                - Automatic flexible data capture<br>
                - Process, data governance, policy, standard, and tool
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height: 450px">
              <img src="assets/img/serv/4.png" class="img-fluid" alt="" style="width:150px; height:100px;">
              <h4><a href="">Data Warehouse</a></h4>
              <p>- Multi-layer modeling</p>
              <p> - Data vault 2.0</p>
              <p> - Near real time data</p>
              <p> - Rapid fire analytical db (~100x)</p>
              <p> - Cloud database</p>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box" style="height: 450px">
              <img src="assets/img/serv/5.png" style="width:150px; height:100px;" class="img-fluid" alt="">
              <h4><a href="">Database replication</a></h4>
              <p>- Replication/Mirroring </p>
              <p> - Synchronization </p>
              <p> - Database connectivity </p>
              <p> - Database integration
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-fixed align-items-fixed mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box" style="height: 450px">
              <img src="assets/img/serv/6.png" class="img-fluid" alt="" style="width:150px; height:100px;">
              <h4><a href="">Data enrichment & Demographic/map</a></h4>
              <p>- Data enrichment (map, demographic, market survey, business directory, financial data, media sosial)</p>
              <p> - For BI and transactional app
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="partners" class="partners section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Partner</h2>
          <h3><span>Our Partner</span></h3>
        </div>

        <div class="container" data-aos="zoom-in">

          <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/partners/1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/partners/2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/partners/3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/partners/4.png" class="img-fluid" alt="">
            </div>


          </div>

        </div>
      </div>
    </section>
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

      </div>
    </section><!-- End Counts Section -->
    <!-- End Frequently Asked Questions Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jl. TB Simatupang No.18, RT.2/RW.1, Kebagusan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12 ">
            <iframe class="mb-6 mb-lg-0" src="https://maps.google.com/maps?q=18%20office%20park&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Visidata<span>.</span></h3>
            <p>
            <p>Jl. TB Simatupang No.18, RT.2/RW.1, Kebagusan,<br>
              Kec. Ps. Minggu, Kota Jakarta Selatan,<br> Daerah Khusus Ibukota Jakarta 12520
              <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Visidata</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>