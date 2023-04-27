<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<nav>
  <div class="sideLinks">
  <ul>
  <li class="current"><a href="projects.html">Home</a></li>
  <li class="current"><a href="#about">About</a></li>
  <li class="current"><a href="#projects">Projects</a></li>
  <li class="current"><a href="projects.html">Scripts</a></li>
<li class="email">
  <a href="mailto:Nicholas.jknight@yahoo.com">Email Me</a></li>
  <div class="icons">
    <a href="https://www.twitter.com" target="_blank"><img src="./images/twitter-icon.png" title="Twitter"></a>
    <a href="https://www.facebook.com"><img src="./images/facebook-icon.png" title="Facebook"></a>
    <a href="https://www.youtube.com"><img src="./images/youtube-icon.png" title="You Tube"></a>
    <a href="https://www.discord.com"><img src="./images/discord-icon.png" title="Discord"></a>
    <a href="https://www.twitch.com"><img src="./images/twitch-icon.png" title="Twitch"></a>
    <a href="https://www.linkedin.com"><img src="./images/linkedin-icon.png" title="Linked-in"></a>
    </div>
      </ul>  
</div>
</nav>

<body>
  
  <div class="hero-back">
    <img src="./images/computersetup.png" width="100vw"></div>  
    
  <div class="boxes">
    <span id="box"><a href="https://www.knightgroup.com"><img src=".//images/knightgroup-black.png" title="KnightGroup.com" target="_blank"></a>
    </span>
    <span id="box"><img src="./images/slogo.png"></a></span>
    <span id="box"><img src="./images/Wygos.png">
    </div>
<div class="boxes2">
    <ul><div class="bxtxt"><br>
    <li>Computer Networking, Development, & Security Systems</li>
        <br>
        <li>Family Owned - Since 1995</li>
    </div>
    <div class="bxtxt"><br>
      <li>Programming Group</li>
      <br>
        <li>Crypto & Options Trading </li>
        <br>
            </div>
    <div class="bxtxt">
        <br>
        <li>Self-Owned LLC</li>
        <br>
        <li>Personal Business Ventures</li>
        
    </div></ul>

</div>
<div class="aboutTitle"><h2>About</h2></div>
<div class="aboutism" id="about">
 <br><p>Hello, I've created this page to help demonstrate some of my skill-sets, and is intended to be updated periodically as I focus on gaining expertise in each programming language. 
    </p><br><br>
</div>

<div class="projects" id="projects">
  <br><h1>Projects</h1>
<div class="phpstuff"><?php
    include "index1.php";
?></div>

<div class="SQL">
  
  <p>SQL</p>
</div>
<div class="Javascript">
  <p>Javascript</p>
  <figure><div class="figures">
    <a href="./videos/Main.mp4"><img src="./images/UOGithub.png" alt="Uses seed if variable met and put on timer"></a>
    <a href="./videos/Vid2.mp4"><img src="./images/seed.png" alt="Uses seed if variable met and put on timer"></a>
    <a href="./videos/evade.mp4"><img src="./images/evade.png" alt="Casts evasion and displays timer"></a>
    <a href="./videos/mount.mp4"><img src="./images/mounting.png" alt="Call back function & status check for mounting"></a>
    <a href="./videos/dart.mp4"><img src="./images/darts.png" title="darts" alt="Multiple Functions (darts)"></a>
    <a href="./videos/looter.mp4"><img src="./images/looter.png" alt="Complicated Loot Script"></a>
    </div>
  </figure>
</div>
<div class="CSS">
  <p>CSS</p>
</div>
<div class="HTML5">
  <p>HTML</p>
</div>
<div class="Python">
  <p>Python</p>
</div>
<div class="Jquerry">
  <p>Jquerry</p>
</div></div>
    <footer>
      <div class="emailText">
          <br>
          <br>
          <a>Email: NKnight@KnightGroup.com</a>
          <p>@Date.Now</p>
          </div></footer>

  
  <script type="text/javascript">
    $(window).scroll(function() {
      var scrollPos = $(this).scrollTop();
      $(".hero-back").css({
        'background-size' : 100 + scrollPos + '.1%'
      });
    });
  </script>

</body>