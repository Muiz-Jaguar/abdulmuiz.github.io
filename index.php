<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="A personal website of Abdul Muiz." />
    <meta name="keywords" content="Abdul Muiz, Abdul Moiz, Coocoo boys" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- adding multiple fonts and stylesheets-->
    <link
      href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/theme.css" />
    <link id="dark-theme-css" rel="stylesheet" href="#" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="shortcut icon" href="images/icon.png" />
    <title>AbdulMuiz-HOMEPAGE</title>
  </head>

  <body>
    <div class="header-content">
      <a href="index.html" class="logo" title="homepage">&nbsp;Abdul Muiz .</a>
      <i class="fas fa-sun sun" id="sun"></i>
      <i
        class="fas fa-toggle-off switch"
        id="toggle-button"
        title="nightmode"
      ></i>
      <i class="far fa-moon moon" id="moon"></i>
    </div>
    
    
    <div class="navbar-container">
      <!-- navbar for big screens -->
      <ul class="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="Aboutme.html">About Me</a></li>
        <li><a href="Facts.html">Facts</a></li>
        <li><a href="FriendLinks.html"> My friends </a></li>
      </ul>
      <!-- navbar for small screens -->
      <ul class="small-navbar">
        <li><a class="fas fa-home navbar-icons" href="index.html"></a></li>
        <li class="dropdown-part">
          <a class="fas fa-bars navbar-icons dropdown-button dropdown-part"></a>
          <div class="dropdown-content">
            <a href="Facts.html" class="dropdown-links">Facts</a>
            <a href="Aboutme.html" class="dropdown-links">About me</a>
            <a href="FriendLinks.html" class="dropdown-links">Friends</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <img alt="AbdulMuiz's picture" class="muiz-image" />
      <blockquote class="animated" id="index-quote"></blockquote>
      <div id="website-intro">
        <h3 id="welcome-header">Assalam-o-alaikum</h3>
        <span style="margin-left: 40px"
          >I welcome you to my official personal website.
        </span>
        I handmade this website to introduce myself, to share information and to
        tell about my friends. It took me like days of work to get this website
        up and running. I am trying my best to make it look as good as possible,
        <a class="personal-links" href="mailto:muiz.jaguar@gmail.com"
          >please give me a feedback on how good it is</a
        >.If you want to know more about me
        <a class="personal-links" href="Aboutme.html">click here</a>.
      </div>
    </div>
    <footer>
      <p style="display: block; margin: auto; padding-top: 12vh">
        Copyright &copy; 2021
        <span class="logo" style="font-size: 4vw; color: aliceblue"
          >Abdul Muiz .</span
        >, the developer of this website.
      </p>
    </footer>
    <script
      src="https://kit.fontawesome.com/ff103ad7df.js"
      crossorigin="anonymous"
    ></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/index.js"></script>
  </body>
</html>