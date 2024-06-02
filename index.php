<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home | Genshin Impact Merchandise</title>
  <link rel="icon" href="media/tab-logo.jpg" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-image: url('media/bg-blur2.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .corner-image {
      position: absolute;
      top: 0;
      right: 0;
      width: 398px;
      height: auto;
      z-index: 3;
      overflow: hidden;
    }

    .navbar-nav {
      margin: 0;
    }

    .corner-image img {
      overflow: hidden;
    }

    .container-jumbotron {
      padding-top: 140px;
      padding-left: 100px;
    }

    .container-jumbotron h1 {
      font-size: 40px;
    }

    .custom-heading {
      font-size: 60px;
      color: #fff;
      font-family: Tahoma, Helvetica, Arial, sans-serif !important;
      text-shadow: 0 0 10px rgba(114, 71, 21, 0.68), 0 0 10px rgba(114, 71, 21, 0.68);
    }

    .custom-paragraph {
      font-size: 20px;
      color: #f6f6f6;
    }

    .carousel-container {
      position: absolute;
      bottom: 20px;
      left: 180px;
      z-index: 1000;
      width: 620px;
      border: 2px solid #FDCC7B;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    .carousel-container h2 {
      font-size: 24px;
      color: #fff;
      margin-bottom: 20px;
      text-align: center;
    }

    #carouselExampleCaptions {
      width: 80%;
      height: auto;
      left: 70px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
      <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center"
          style="margin-left: 100px; margin-top: -40px; margin-bottom: -40px;">
          <img src="media/logo.png" alt="Avatar Logo" style="width:150px; margin-right: 180px;" class="rounded-pill">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active m-2" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link m-2" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item m-2">
              <a class="nav-link" href="shop.php">SHOP</a>
            </li>
            <li class="nav-item m-2">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav" style="margin-right: 20px;">
          <li class="nav-item">
            <a class="nav-link m-2" href="login.php">LOG OUT</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container-jumbotron">
    <h1 class="custom-heading">Enhance Your <br> Genshin Experience!</h1>
    <p class="custom-paragraph">Get one of the Merchandise now!</p>
    <div class="mt-4">
      <a href="shop.php" class="btn btn-primary me-2">Check Merchs</a>
      <a href="about.php" class="btn btn-secondary">Learn About Us</a>
    </div>
  </div>

  <img src="media/navia3.png" alt="Another Image" class="corner-image">

  <div class="carousel-container">
    <h2>Trending Now</h2>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-1.png" class="d-block w-100" alt="Slide 1">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-2.png" class="d-block w-100" alt="Slide 2">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-3.png" class="d-block w-100" alt="Slide 3">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-4.png" class="d-block w-100" alt="Slide 4">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-5.png" class="d-block w-100" alt="Slide 5">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="col" style="margin-right: 20px;">
              <img src="media/slide-6.png" class="d-block w-100" alt="Slide 6">
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</body>

</html>