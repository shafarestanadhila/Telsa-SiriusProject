<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>navbar | Telsa</title>

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="image/favicon.png" alt="logo" class="img-fluid" width="160" height="40"  /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-button">
                    <a class="nav-chart" href="chart.html"><img src="image/chart-menu.png" alt="chart" class="img-fluid1" width="30" height="30"  /></a>
                </li>
                <li class="nav-button">
                    <a class="nav-contact" href="contact.html"><img src="image/contact-menu.png" alt="contact" class="img-fluid2" width="30" height="30"  /></a>
                </li>
                <li class="nav-button">
                    <a class="nav-signin" href="signin.html"><img src="image/signin-menu.png" alt="signin" class="img-fluid3" width="90" height="30"  /></a>
                </li>
                <li class="nav-button">
                    <a class="nav-signup" href="signup.html"><img src="image/signup-menu.png" alt="signup" class="img-fluid4" width="90" height="30"  /></a>
                </li>
            </ul>
          </div>
          </div>
      </nav>
</body>
</html>