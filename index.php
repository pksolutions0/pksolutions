<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PK Solutions</title>
  <meta name="description" content="Digital marketing solutions" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="author" content="Satyam Mishra ,Vaibhav Tiwari" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png" />
  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/utility.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/contact.css" />
  <link rel="stylesheet" href="./assets/css/services.css" />
  <link rel="stylesheet" href="./assets/css/services-2.css" />
  <link rel="stylesheet" href="./assets/css/about.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- ------------------------ -->
  <!-- -----Hiring Alert ------ -->
  <!-- ------------------------ -->
  <section class="hiring grid-center">
    WE ARE HIRING <a href="mailto:info@pksolutions.org"> Mail Us</a>
  </section>

  <!-- ------------------------ -->
  <!-- -----Landing section -->
  <!-- ------------------------ -->
  <section class="landing-section">
    <header id="header" class="width-100 flex-center-bet">
      <!-- ------------------------ -->
      <!-- -----Logo section -->
      <!-- ------------------------ -->
      <div class="logo-container flex">
        <a href="#">
          <p class="flex"><span>PK</span> Solutions</p>
        </a>
      </div>
      <div class="menu-list-div">
        <ul class="menu-list flex-center">
          <li>
            <div class="link-item">
              <a class="line-ani" href="#">About Us</a>
            </div>
          </li>
          <li>
            <div class="link-item">
              <a class="line-ani" href="#services">Services</a>
            </div>
          </li>
          <li>
            <div class="link-item">
              <a class="line-ani" href="#portfolio">Portfolio</a>
            </div>
          </li>

          <li>
            <div class="link-item">
              <a class="line-ani" href="#contact">Contact Us</a>
            </div>
          </li>
        </ul>
        <div class="menu-icon"></div>
      </div>
    </header>
    <div class="landing-container section-padding">
      <p>top class digital agency</p>
      <h1 class="main-h1-heading">
        We <span style="color: var(--primary-pink)">design</span> and
        <span style="color: var(--primary-blue)">develop</span> <br />digital
        solutions
      </h1>
      <p class="landing-container-last-p">
        Based in Texas, with clients all over the world
      </p>
      <button class="basic-button"><a href="#">Connect with us</a></button>
    </div>
  </section>

  <!-- first landing include header , end-->

  <!-- strip section, start -->
  <div class="adds width-100">
    <img src="./assets/images/google-partner.png" alt="Best Digital Marketing Company " />
    <img src="./assets/images/clutch.png" alt="Best Digital Marketing Company " />
    <img src="./assets/images/google-star.png" alt="Best Digital Marketing Company " />
    <img src="./assets/images/woo-commerce.png" alt="Best Digital Marketing Company " />
    <img src="./assets/images/wordpress.png" alt="Best Digital Marketing Company " />
  </div>
  <!-- strip section, end -->

  <!-- services section start -->
  <section class="service-section section-padding" id="services">
    <h2 class="main-heading">We help your business thrive</h2>
    <p class="main-heading-text">
      Transforming business challenges into impactful web- and mobile
      solutions that people love to use every day
    </p>

    <div class="services-grid grid-3">
      <div class="service-child">
        <h6 class="sub-heading">Digital Design</h6>
        <p class="text">
          Building brands and improving digital interfaces
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
      <div class="service-child">
        <h6 class="sub-heading">Ecommerce</h6>
        <p class="text">
          Converting website visitors into loyal customers
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
      <div class="service-child">
        <h6 class="sub-heading">Optimization</h6>
        <p class="text">
          Boost your online product to an optimized online business
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
      <div class="service-child">
        <h6 class="sub-heading">Branding</h6>
        <p class="text">
          Recognizable branding that reflects your business values
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
      <div class="service-child">
        <h6 class="sub-heading">Web Development</h6>
        <p class="text">
          Developing solutions backed by the latest technologies
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
      <div class="service-child">
        <h6 class="sub-heading">Mobile Development</h6>
        <p class="text">
          Delivering the best user experience through a mobile first approach
        </p>
        <div>
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
      </div>
    </div>
  </section>
  <!-- services section end -->

  <!-- ------------------------ -->
  <!-- -----Service section start-->
  <!-- ------------------------ -->
  <?php include_once './services.html' ?>
  <!-- ------------------------ -->
  <!-- -----Service section end-->
  <!-- ------------------------ -->

  <!-- ------------------------ -->
  <!-- -----Portfolio section -->
  <!-- ------------------------ -->

  <section class="portfolio-container section-padding" id="portfolio">
    <h2 class="main-heading">What we already done</h2>

    <!-- ------------------------ -->
    <!-- -----Project first -->
    <!-- ------------------------ -->

    <div class="work-1 grid grid-2">
      <div class="work-1-img ">
        <img src="./assets/images/work-1.jpg" alt="Best website development" />
      </div>
      <div class="work-1-content ">
        <h2 class="sub-heading">Rapid Auto shipping</h2>
        <p class="text">
          It help you to ship your vehicle on time at an affordable price. You
          can ship your vehicle without any hustle and bustle, only just by
          contacting us.
        </p>
        <div class="tags-box flex">
          <div class="tags grid-center">Web Development</div>
          <div class="tags grid-center">App Development</div>
          <div class="tags grid-center">CRM</div>
        </div>
      </div>
    </div>

    <!-- ------------------------ -->
    <!-- -----Project Second -->
    <!-- ------------------------ -->

    <div class="work-1 grid grid-2">
      <div class="work-1-content media-work-2">
        <h2 class="sub-heading">Music Application</h2>
        <p class="text">
          Listen to Latest and Trending Bollywood Hindi songs online for free
          with JioSaavn anytime, anywhere. Download or listen to unlimited new
          & old Hindi songs ...
        </p>
        <div class="tags-box flex">
          <div class="tags grid-center">Web Development</div>
          <div class="tags grid-center">App Development</div>
          <div class="tags grid-center">Music Player</div>
          <div class="tags grid-center">Layout Management</div>
        </div>
      </div>

      <div class="work-1-img media-work-1">
        <img src="./assets/images/work-2.jpg" alt="Best website development" />
      </div>
    </div>

    <!-- ------------------------ -->
    <!-- -----Project Third -->
    <!-- ------------------------ -->

    <div class="work-1 grid grid-2">
      <div class="work-1-img ">
        <img src="./assets/images/work-3.jpg" alt="Best website development" />
      </div>
      <div class="work-1-content ">
        <h2 class="sub-heading">E-Commerce Website</h2>
        <p class="text">
          the buying and selling of goods and services, or the transmitting of
          funds or data, over an electronic network, primarily the internet.
        </p>
        <div class="tags-box flex">
          <div class="tags grid-center">Web Development</div>
          <div class="tags grid-center">App Development</div>
          <div class="tags grid-center">CRM</div>
          <div class="tags grid-center">E-Commerce</div>
        </div>
      </div>
    </div>

    <!-- ------------------------ -->
    <!-- -----Project fifth -->
    <!-- ------------------------ -->

    <!-- <div class="last-work">
      <div class="last-work-img background-property last-work-content">
        <div class="last-work-text flex-center">
          <h2 class="main-heading">Bakery websites</h2>
          <p class="text">
            Some say plant-based is the way forward. So, we make sure the
            website is smooth and delicious.
          </p>
          <div class="tags-box flex">
            <div class="tags-small grid-center">Web Development</div>
            <div class="tags-small grid-center">App Development</div>
            <div class="tags-small grid-center">CRM</div>
            <div class="tags-small grid-center">E-Commerce</div>
          </div>
        </div>
      </div>
    </div> -->


  </section>

  <!-- ------------------------ -->
  <!-- -----services-2 Include-->
  <!-- ------------------------ -->
  <?php include_once './services-2.html' ?>

  <!-- ------------------------ -->
  <!-- ----- aboutInclude-->
  <!-- ------------------------ -->
  <?php include_once './about.html' ?>



  <!-- ------------------------ -->
  <!-- -----Pratners section -->
  <!-- ------------------------ -->

  <section class="partners section-padding">
    <h2 class="main-heading">Technologies we master</h2>
    <!-- ------------------------ -->
    <!-- -----Companies --------- -->
    <!-- ------------------------ -->

    <div class="companies-container grid">
      <div class="companies-box grid-center"><i>Semrush</i></div>
      <div class="companies-box grid-center"><i>Google <br>Analytics</i></div>
      <div class="companies-box grid-center"><i>Wordpress</i></div>
      <div class="companies-box grid-center"><i>Ahrefs</i></div>
      <div class="companies-box grid-center"><i>Canva</i></div>
      <div class="companies-box grid-center"><i>Wix</i></div>
      <div class="companies-box grid-center"><i>Github</i></div>
      <div class="companies-box grid-center"><i>Blogger</i></div>
    </div>
  </section>

  <!-- ------------------------ -->
  <!-- -----collaboration ---- -->
  <!-- ------------------------ -->

  <section class="collaboration section-padding">
    <div class="collaboration-container grid grid-2">
      <div class="collaboration-container-left flex-center-bet section-padding">
        <p>SMART DIGITAL TEAMS</p>
        <h3 class="sub-heading">
          Extend your team with designers and developers
        </h3>
        <p>
          Equip your team with extra hands on deck and deliver high quality
          projects on time.
        </p>
        <button class="basic-button">
          <a href="mailto:info@pksolutions.org">Get in Touch</a>
        </button>
      </div>
      <div class="collaboration-container-left flex-center-bet collaboration-container-right section-padding">
        <p>AGENCY PARTNERSHIP</p>
        <h3 class="sub-heading">
          Let us help you to deliver your next project
        </h3>
        <p>
          As your partner, we assist you with complementary expertise, be it
          design, development or just advice.
        </p>
        <button class="basic-button">
          <a href="#services">See our Services</a>
        </button>
      </div>
    </div>
  </section>

  <!-- ------------------------ -->
  <!-- -----Sub Footer here---- -->
  <!-- ------------------------ -->

  <section class="sub-footer section-padding" id="contact">
    <div class="sub-footer-grid grid">
      <div class="sub-footer-grid-left">
        <h2>Let’s talk about your next <span>business challenge</span></h2>
        <p>Get to meet Your Next Agency</p>
      </div>
      <div class="sub-footer-grid-right grid-center">
        <button class="basic-button">
          <a href="mailto:info@pksolutions.org">CONNECT WITH US</a>
        </button>
      </div>
    </div>
  </section>

  <!-- ------------------------ -->
  <!-- -----Footer here---- -->
  <!-- ------------------------ -->

  <footer class="footer flex-center-bet">
    <div class="footer-logo-container flex">
      <a href="mailto:info@pksolutions.org">
        <span>PK</span>
      </a>
    </div>
    <div class="footer-strip">
      Copyright © 2022, PK Solutions - All Rights Reserved.
    </div>
    <div class="footer-strip">
      <a href="tel:+919871573232">
        <ion-icon name="call-sharp"></ion-icon>
      </a>
      <a href="mailto:info@pksolutions.org">
        <ion-icon name="logo-facebook"></ion-icon>
      </a>
      <a href="mailto:info@pksolutions.org">
        <ion-icon name="logo-instagram"></ion-icon>
      </a>
      <a href="mailto:info@pksolutions.org">
        <ion-icon name="logo-twitter"></ion-icon>
      </a>
    </div>
  </footer>
  <!-- ------------------------ -->
  <!-- -----Ionic icons links -->
  <!-- ------------------------ -->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>