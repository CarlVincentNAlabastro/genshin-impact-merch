<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us | Genshin Impact Merchandise</title>
  <link rel="icon" href="media/tab-logo.jpg" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Tahoma, Helvetica, Arial, sans-serif !important;
      color: #f6f6f6;
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .custom-heading {
      font-size: 40px;
      color: #fff;
      text-shadow: 0 0 10px rgba(114, 71, 21, 0.68), 0 0 10px rgba(114, 71, 21, 0.68);
      font-weight: bold;
    }

    .custom-paragraph {
      font-size: 18px;
    }

    .bg-black-transparent {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
    }

    .rounded-full {
      border-radius: 50%;
    }

    .rounded-lg {
      border-radius: 0.5rem;
    }

    .shadow-lg {
      box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
    }

    .container {
      position: relative;
      bottom: -90px;
      z-index: 1;
    }
  </style>
</head>

<body>
  <video autoplay muted loop class="video-background">
    <source src="media/bg-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center"
          style="margin-left: 100px; margin-top: -40px; margin-bottom: -40px;">
          <img src="media/logo.png" alt="Avatar Logo" style="width:150px; margin-right: 180px;" class="rounded-full">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active m-2" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link m-2" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item m-2">
              <a class="nav-link" href="#">SHOP</a>
            </li>
            <li class="nav-item m-2">
              <a class="nav-link" href="#">APPS</a>
            </li>
            <li class="nav-item m-2">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav" style="margin-right: 20px;">
          <li class="nav-item">
            <a class="nav-link m-2" href="#">LOG IN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link m-2" href="#">SIGN UP</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- About Section -->
  <section class="py-3 py-md-5">
    <div class="container">
      <div class="bg-black-transparent p-4 rounded-lg shadow-lg">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <img src="media/about-logo.png" alt="Genshin Impact Merchandise" style="m-2;"
              class="img-fluid rounded-lg about-logo">
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="custom-heading mb-4">About Us</h2>
            <p class="custom-paragraph lead text-white mb-4">Welcome to Genshin Impact Merchandise, where every
              product tells a story. Our journey began with a passion for providing exceptional merchandise experiences
              for Genshin Impact fans. At Genshin Impact Merchandise, we believe in the art of design, selecting the
              finest materials, and creating a warm, inviting space for enthusiasts.</p>

            <p class="custom-paragraph mb-4">Our mission is to provide high-quality merchandise that brings joy to
              our
              customers. Feel
              free to explore our collection and find the perfect item to add to your Genshin Impact
              collection.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>