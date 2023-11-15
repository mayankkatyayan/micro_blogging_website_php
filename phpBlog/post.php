<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MicroBlog App</title>
  <!--stylesheet-->
  <link rel="stylesheet" href="style.css">
  <!--ICONSCOUT CDN-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--======GOOGLE FONTS========-->
  <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">


</head>
<body>
  <nav>
    <div class="container nav__container">
      <a href="index.html" class="nav__logo">MicroBlog</a>
      <ul class="nav__items">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signin.html">SignIn</a></li>
        <li class="nav__profile">
          <div class="avatar">
            <img src="./Darjeeling Trip/IMG_1679.JPG" alt="no clip">
          </div>
          <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="logout.html">Logout</a></li>
          </ul>

        </li>
      </ul>

      <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
      <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
  </nav>
  <!--================ENF OF NAVBAR===========----->
  <section class="singlepost">
    <div class="container singlepost_container">
      <h2>The Transformative Tapestry of Art: A Journey into Emotion and Expression</h2>
      <div class="post__author">
        <div class="post__author-avatar">
          <img src="./Darjeeling Trip/pexels.jpg" alt="404">
        </div>
        <div class="post_author-info">
          <h5>By: Pradip </h5>
          <small>Nov 15, 2023 - 1:30PM</small>
        </div>
      </div>
      <div class="singlepost__thumbnail">
        <img src="./Darjeeling Trip/IMG_1642.jpg" alt="">
      </div>
      <p>Art, the universal language of the soul, weaves a tapestry of emotion through diverse mediums—paintings, sculptures, and photography. In the realm of paintings, artists become storytellers, using vibrant hues and intricate details to articulate the kaleidoscope of human emotion. Each brushstroke is a narrative, from the melancholy of a rainy cityscape to the exuberance of a sunlit field.</p>
      <p>Sculpture, with its tactile nature, breathes life into the inanimate, carving tales of strength, vulnerability, and resilience from unyielding stone. Whether it's the grace of a frozen dancer or the contemplation of a carved figure, sculptures embody the artist's vision and passion.

      </p>
      <p>Photography freezes moments in time, offering a visual narrative that transcends the immediate. Through the lens, artists become time travelers, capturing the raw beauty of nature, fleeting expressions, and unspoken stories etched on faces.</p>
      <p>Yet, art is more than personal expression; it mirrors society, challenging norms and inspiring change. Artists, through political cartoons and socially charged works, act as catalysts for dialogue, urging us to confront uncomfortable truths and envision a more compassionate world.</p>
      <p>In this exploration, art emerges not just as a form of expression but as a transformative force. It connects us to the rich tapestry of the human experience, inviting us to explore beauty, emotion, and the shared stories that define us. Art, in its myriad forms, stands as a testament to the profound and universal language that binds us all.</p>
     

    </div>
  </section>
   <!--===================END OF SINGLE POST===================-->
<footer>
  <div class="footer__socials">
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/facebook.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/youtube.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/facebook.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/github.png" alt=""></a>
  </div>
  <div class="container footer__container">
    <article>
      <h4>Categories</h4>
      <ul>
        <li><a href="">Art</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">Fest</a></li>
        <li><a href="">Music</a></li>
        <li><a href="">Travel</a></li>
        <li><a href="">Science and Technology</a></li>
        <li><a href="">Wild Life</a></li>
      </ul>
    </article>

    <article>
      <h4>Support</h4>
      <ul>
        <li><a href="">Online Support</a></li>
        <li><a href="">Phone</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Socail Support</a></li>
        <li><a href="">Location</a></li>
       
      </ul>
    </article>

    <article>
      <h4>Permalinks</h4>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </article>

    <article>
      <h4>Blog</h4>
      <ul>
        <li><a href="">Safety</a></li>
        <li><a href="">Repair</a></li>
        <li><a href="">Recent</a></li>
        <li><a href="">Popular</a></li>
        <li><a href="">Categories</a></li>
      </ul>
    </article>
  </div>
  <div class="footer__copyright">
    <small> copyright &copy:2023 Team Zeng4</small>
  </div>
</footer>
<script src="./main.js"></script>
</body>
</html>