<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="_css/signin.css" />

    <title>Telsa | Signin</title>

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
  </head>

  <body>
    <!-- Hero Section Start -->
    <div class="container">
      <div class="signin">
        <h2>Sign In</h2>
        <form class="form-login col-lg-9 align-item-center" action="">
          <div class="mb-3">
            <label for=""> Email <span class="color-red">*</span> </label>
            <input
              type="text"
              class="email form-control"
              id="email"
              name="email"
              placeholder="Masukan email"
              required
            />
          </div>

          <div class="mb-3">
            <label for=""> Password <span class="color-red">*</span> </label>
            <input
              type="password"
              class="password form-control"
              id="password"
              name="password"
              placeholder="Masukan password"
              required
            />
          </div>
        </form>
        <div class="form-group remember-forgot">
          <div class="remember-me">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember">Remember Me</label>
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
        </div>

        <a href="home.php"><button type="submit" class="btn">Login</button></a>
      </div>

      <div class="image justify-content-center">
        <div class="img-logo">
          <img src="image/telsa.png" alt="logo" width="380" />
        </div>
        <h1>WELCOME TO <span class="text-color">TELSA</span></h1>
        <h3>Buy high quality eggs here</h3>
        <a href="signup.php"
          ><button type="submit" class="btn2">Signup here</button></a
        >
      </div>
    </div>

    <!-- Hero Section End -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
  </body>
</html>
