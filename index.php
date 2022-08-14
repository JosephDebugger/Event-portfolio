<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header>

    <div class="head_section">
      <div class="toggle" onclick="toggleManu();"><i class="fas fa-bars"></i> </div>
      <a href="#" class="logo">Pipeline</a>
      <marquee direction="left">"বিশ্বমানের নগরী গড়তে আসুন বিশ্বমানের নাগরিক হই "</marquee>
      <div class="search">
        <input type="text" placeholder="Search here">
        <a href=""> <i class="fas fa-search"></i></a>
      </div>
    </div>

    <nav>
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <a href="message.html">Message</a>
      <a href="links.html">links</a>
      <a href="contact.html">Contact</a>
    </nav>

  </header>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/jquery.ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
  <div class="navigation">
    <ul>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-home"></i> </span>
          <span class="title">
            <h2>Name</h2>
          </span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-newspaper"></i></span>
          <span class="title">About</span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-comments"></i></span>
          <span class="title">Message</span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
          <span class="title">Contact</span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="icon"><i class="fas fa-key"></i></span>
          <span class="title">Privacy Policy</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="hole">

    <div class="side-left">
      <aside>
        <div class="ads">
          <h2>ads here</h2>
          <div>
            <div class="adsn">
              <p>ad</p>
            </div>
            <div class="adsn">
              <p>ad</p>
            </div>
            <div class="adsn">
              <p>ad</p>
            </div>
          </div>
        </div>
      </aside>
      <div class="private">
        <div class="logo"><img src="assets/logos/Pipeline_logo.png" alt=""><a href="https://pipeline.com">pipeline.com</a></div>
        <p>.Privacy Policy</p>
        <p>.Terms and Condition</p>
        <p>.Cookies</p>
        <div class="foot">
          <p>All rights reserved 2021</p>
        </div>
      </div>
    </div>
    <main id="middle-section">



      <?php
      include 'admin/config.php';

      $sql = "SELECT * FROM post ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
      ?>

        <div class="post">

          <div class="heading">
            <h1><?php echo $row['title']; ?></h1>
            <div class="date-time">
              <h5>Date: </h5>
              &nbsp;<p><?php echo $row['date']; ?></p>
              &nbsp;&nbsp;&nbsp; <p><?php echo $row['time']; ?></p>
            </div>
          </div>
          <div class="status">
            <div class="image">
              <img src="<?php echo 'admin/' . $row['image']; ?>" alt="">
              <p><?php echo $row['title']; ?></p>
            </div>
            <div class="des">
              <p><?php echo $row['description']; ?></p>
            </div>
          </div>
        </div>
      <?php
      }

      ?>


    </main>

    <div class="side" id="right-section">
      <div class="vid_sec" id="video-section">
        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>

        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>

        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>

        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>

        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>

        <div class="videos">
          <div class="video-heading">
            <h2>Video heading</h2>
          </div>
          <div class="vid">
            <iframe width="300" height="180" src="https://www.youtube.com/embed/NfUcjgehiJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-des">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum corporis incidunt vero modi porro ex culpa aut accusamus ab dignissimos.</p>
          </div>
        </div>
      </div>
      <div class="recent">
        <div class="heading_reco">
          <h3>Recent Updates</h3>
        </div>


        <?php
        include 'admin/config.php';
        $i = 0;
        $sql = "SELECT * FROM post ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);


        for ($i = 0; $i < 4; $i += 1) {
          $row = mysqli_fetch_array($result);
        ?>

          <div class="rec_sec">
            <div class="post-img">
              <img src="<?php echo 'admin/' . $row['image']; ?>" alt="">

            </div>
            <div class="post-head">
              <p><?php echo $row['title']; ?> </p>
              <div class="date">
                <p> Date: <span><?php echo $row['date']; ?></span></p>
              </div>
            </div>
          </div>
        <?php
        }

        ?>


      </div>
    </div>

  </div>
  <div class="recent-news">
    <div class="heading_rec">
      <h2>See latest Updates</h2>
    </div>
    <div class="rec_updates">



      <?php
      include 'admin/config.php';
      $i = 0;
      $sql = "SELECT * FROM post ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);


      for ($i = 0; $i < 4; $i += 1) {
        $row = mysqli_fetch_array($result);
      ?>



        <div class="rec_post">
          <img src="<?php echo 'admin/' .  $row['image']; ?>" alt="">
          <div class="des">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
          </div>
        </div>
      <?php
      }

      ?>

    </div>

  </div>
  <footer>

  </footer>

  <script>
    function toggleManu() {
      let toggle = document.querySelector('.toggle');
      let navigation = document.querySelector('.navigation');
      let hole = document.querySelector('.hole');
      toggle.classList.toggle('active');
      navigation.classList.toggle('active');
      hole.classList.toggle('active');

    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/jquery.ScrollMagic.min.js" integrity="sha512-2nppfD3Yldtey65ljHpZTHFO/1eeZyy+R69nkezMc7BlvddQwSAD9u0rDkrViSQsmDZMUQ9ZnrArsH/MOTVwKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js" integrity="sha512-hFyYiBIWCYSyo98oFGWjG5V8HEV4g5O2pxu0mzU8qIMC7lrrwtcKWoRDZcpRL0ywIIM2d/XsBJ9iXNLFf6kIgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>