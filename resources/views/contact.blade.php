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
      <h1>Contact Us</h1>
    </section>
    <!--contact us content-->
    <section class="location">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250151.16277460282!2d104.72537649651764!3d11.579654004982858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2z4Z6X4Z-S4Z6T4Z-G4Z6W4Z-B4Z6J!5e0!3m2!1skm!2skh!4v1747924428412!5m2!1skm!2skh"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
    <section class="contact-us">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="fa fa-home"></i>
            <span>
              <h5>255 Road, Teuk Thla</h5>
              <p>Phnom Penh, Sen Sok</p>
            </span>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <span>
              <h5>+855 0123456789</h5>
              <p>Monday to saturday, 10:00 Am to 6:00 PM</p>
            </span>
          </div>
          <div>
            <i class="fa fa-envelope-o"></i>
            <span>
              <h5>information@.com</h5>
              <p>Email us your query</p>
            </span>
          </div>
        </div>
        <div class="contact-col">
          <form action="form-handler.php" method="post">
            <input
              type="text"
              name="name"
              placeholder="Enter Your Name"
              required
            />
            <input
              type="email"
              name="email"
              placeholder="Enter Email Address"
              required
            />
            <input
              type="text"
              name="subject"
              placeholder="Enter Your Subject"
              required
            />
            <textarea
              rows="8"
              name="message"
              placeholder="Message"
              required
            ></textarea>
            <button type="submit" class="hero-btn red-btn">Send Message</button>
          </form>
        </div>
      </div>
    </section>
    <!--footer-->
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
