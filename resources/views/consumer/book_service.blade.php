<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Car Care Servicing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <style type="text/css">

    label
    {
      display:inline-block;
      width:200px;
    }
  </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  * Template Name: Day - v4.7.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">carcare@somemail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +880 1234567890
      </div>
      <div class="social-links d-none d-md-block">
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

      <h1 class="logo"><a href="#">Car</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{url('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('profile.show')}}">Profile</a></li>
          <li><a class="nav-link scrollto" href="{{url('home')}}#services">My Services</a></li>
          <li><x-app-layout></x-app-layout></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <div class="container" align="center" style="padding-top: 100px">

      @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss="alert">
          x
        </button>
        {{session()->get('message')}}
      </div>
      @endif

      <form action="{{url('upload_booking')}}" method="POST">

        @csrf

        <div style="padding:20px">

          <label>Name</label>
          <select name="name" style="width:220px" required>
            @foreach($consumers as $consumer)
              <option value='{{$consumer->name}}'>{{$consumer->name}}</option>
            @endforeach

          </select>

        </div>

        <div style="padding:20px">

          <label>Address</label>
          <input type="text" name="address" placeholder="Address" required>

        </div>

        <div style="padding:20px">

          <label>Phone</label>
          <input type="text" name="phone" placeholder="Phone Number" required>

        </div>

        <div style="padding:20px">

          <label>Service</label>
          <select name="service" style="width:220px" required>
            <option>Select a service</option>
            <option value="Engine Recondition">Engine Recondition</option>
            <option value="EFI">EFI</option>
            <option value="Air Reconditioning">Air Reconditioning</option>
            <option value="Brake and Clutch">Brake and Clutch</option>
            <option value="Diesel Repairs">Diesel Repairs</option>
            <option value="Wheel Alignment">Wheel Alignment</option>
          </select>

        </div>

        <div style="padding:20px">

          <label>Type</label>
          <select name="type" style="width:220px" required>
            <option>Select service type</option>
            <option value="Home">Home</option>
            <option value="Garage">Garage</option>
          </select>

        </div>

        <div style="padding:20px">

          <label>Garage</label>
          <select name="garage" style="width:220px" required>
            <option>Select a garage</option>
            @foreach($garages as $garage)
              <option value="{{$garage->name}}">{{$garage->name}}</option>
            @endforeach
          </select>

        </div>

        <div style="padding:20px">
          <input type="submit" class="btn btn-success" style="color:black">

        </div>


      </form>
    </div>

    <!-- ======= Breadcrumbs ======= -->
  <!--  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>

        </ol>
        <h2>Home Page</h2>

      </div>
    </section> --> <!-- End Breadcrumbs -->

  <!--  <section class="inner-page">
      <div class="container">
        <p>
          Consumer's Book Service Page
        </p>
      </div>
    </section> -->

  </main><!-- End #main -->

  <!-- ======= Footer =======
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
