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
      <h1>Our Course</h1>
    </section>
    <!--course content-->
      </section>
    <section class="course">
      <h1>Course We Offer</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
      <div class="row">
        <div class="course-col">
          <h3>Intermediate</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
            doloribus odio tempore voluptate in veritatis sunt eaque quis modi
            perferendis totam, sequi cum a reprehenderit dignissimos error nam
            quam qui.
          </p>
        </div>
        <div class="course-col">
          <h3>Degree</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
            doloribus odio tempore voluptate in veritatis sunt eaque quis modi
            perferendis totam, sequi cum a reprehenderit dignissimos error nam
            quam qui.
          </p>
        </div>
        <div class="course-col">
          <h3>Post Graduation</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est
            doloribus odio tempore voluptate in veritatis sunt eaque quis modi
            perferendis totam, sequi cum a reprehenderit dignissimos error nam
            quam qui.
          </p>
        </div>
      </div>
    </section>
    <!--facilities-->
    <section class="facilities">
      <h1>Our Facilities</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
      <div class="row">
        <div class="facilities-col">
          <img src="css/img/1.jpg" alt="" />
          <h3>World Class Library</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, illo
            magni unde ab laboriosam inventore!
          </p>
        </div>
        <div class="facilities-col">
          <img src="css/img/1.jpg" alt="" />
          <h3>Largest Play Gorund</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, illo
            magni unde ab laboriosam inventore!
          </p>
        </div>
        <div class="facilities-col">
          <img src="css/img/1.jpg" alt="" />
          <h3>Tasy and Healthy food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, illo
            magni unde ab laboriosam inventore!
          </p>
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
