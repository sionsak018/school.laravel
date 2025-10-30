<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MySchool</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
      rel="stylesheet"
    />
    <!--front awesome bootsrap icon-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <section class="sub-header">
      <nav>
          <a href="{{ url('/') }}">
          <img src="{{ asset('css/img/logo.png') }}" alt="Logo" />
        </a>        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>

          <ul>
  <li><a href="{{ url('/') }}">HOME</a></li>
  <li><a href="{{ url('/about') }}">ABOUT</a></li>
  <li><a href="{{ url('/course') }}">COURSE</a></li>
  <li><a href="{{ url('/blog') }}">BLOG</a></li>
  <li><a href="{{ url('/contact') }}">CONTACT</a></li>
</ul>

        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>About Us</h1>
    </section>
    <!--about us content-->
    <section class="about-us">
      <div class="row">
        <div class="about-col">
          <h1>We are the world's largest university</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
            iusto voluptates earum nam placeat modi! Necessitatibus temporibus
            vel omnis nobis repudiandae corporis cupiditate aut, beatae neque
            rerum, dicta tempore provident!
          </p>
          <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
          <img src="css/img/2.jpg" alt="" />
        </div>
      </div>
    </section>
    <section class="footer">
      <h4>About Us</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nisi
        minima fugiat. Repellendus eaque <br />dolores vitae unde maxime debitis
        delectus, earum nisi optio
      </p>
      <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </div>
      <p>Made with<i class="fa fa-heart-o"></i> by Me</p>
    </section>
    <script src="{{ asset('js/javascript.js') }}"></script>
  </body>
</html>
