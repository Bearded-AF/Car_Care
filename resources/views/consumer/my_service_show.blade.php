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
          <li><a class="nav-link scrollto" href="{{url('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('profile.show')}}">Profile</a></li>
          <li><a class="nav-link scrollto active" href="#">My Services</a></li>
          <li><x-app-layout></x-app-layout></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title" style="padding:100px">
          <span>Services</span>
          <h2>My Services</h2>
          <p>Monitor the progress of your service.</p>
        </div>
        @foreach ($service as $services)


        <div class="container" align="center">

          <table style="color:black; font-weight: bold; font-size:120%;">

            <tr>

              <th></th>
              <th></th>

            </tr>

            <tr>

              <td style="padding-bottom:10px;">Service</td>
              <td style="padding-left:15px; ">{{$services->service}}</td>

            </tr>

            <tr>

              <td style="padding-bottom:10px;">Service Type</td>
              <td style="padding-left:15px; padding-bottom:5px">{{$services->servicetype}}</td>

            </tr>

            <tr>

              <td style="padding-bottom:10px;">Garage</td>
              <td style="padding-left:15px; padding-bottom:5px">{{$services->garagename}}</td>

            </tr>

            <tr>

              <td style="padding-bottom:5px;">Status</td>
              <td style="padding-left:15px; padding-bottom:5px">{{$services->status}}</td>

            </tr>

          </table>

        </div>
        @endforeach
      </div>
    </section><!-- End Why Us Section -->







  </main><!-- End #main -->


  </html>
