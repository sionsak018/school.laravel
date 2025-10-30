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
      <h1>Our Certificate & Online Programs for 2025</h1>
    </section>
    <!--blog content-->
    <section class="blog-content">
      <div class="row">
        <div class="blog-left">
          <img src="css/img/3.jpg" alt="" />
          <h2>Our Certificate & Online Programs for 2025</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
            dolore. Ea architecto omnis eveniet dolore voluptatibus, obcaecati
            expedita fugit nisi distinctio, sapiente, voluptas sed est iusto.
            Earum repellat aperiam quos.
          </p>
          <br />
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem
            optio culpa architecto sequi ea reprehenderit itaque illo
            dignissimos cupiditate explicabo. Numquam praesentium tempore
            corporis aperiam sed fuga ipsam magni culpa.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            expedita in nam voluptatibus laborum autem quas aliquam, atque ipsum
            nihil quidem nemo corporis, assumenda molestiae perferendis
            dignissimos saepe consectetur cum.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            expedita in nam voluptatibus laborum autem quas aliquam, atque ipsum
            nihil quidem nemo corporis, assumenda molestiae perferendis
            dignissimos saepe consectetur cum.
          </p>

          <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
              <input type="text" placeholder="Enter Name" />
              <input type="email" placeholder="Enter Email" />
              <textarea rows="5" placeholder="Your comment"></textarea>
              <button type="submit" class="hero-btn red-btn">
                POST COMMENT
              </button>
            </form>
          </div>
        </div>

        <div class="blog-right">
          <h3>Post Categories</h3>
          <div>
            <span>Business Analytics</span>
            <span>25</span>
          </div>
          <div>
            <span>Data Science</span>
            <span>25</span>
          </div>
          <div>
            <span>Machine Learning</span>
            <span>25</span>
          </div>
          <div>
            <span>Computer Science</span>
            <span>25</span>
          </div>
          <div>
            <span>AutoCAD</span>
            <span>25</span>
          </div>
          <div>
            <span>AutoCAD</span>
            <span>25</span>
          </div>
          <div>
            <span>AutoCAD</span>
            <span>25</span>
          </div>
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
