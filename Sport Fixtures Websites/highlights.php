<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="homepage.css"/>
  <!-- <script  type="text/javascript" src="jscript.js"></script> -->
  <meta charset="utf-8">
  <title>My Sport Fixtures</title>
</head>
<body>

  <div class="HeaderMenu">

    <?php
    session_start();
    echo "<div class='welnot' style='position: relative; left:-550px; top:10px;
    font-size: 30px; '> Welcome $_SESSION[fname]  </div>" ;
    ?>
    <div class="Menu Items">
      <!-- Welcome to The Banana Bookstore! <3 -->

      <a href="welcomepage.php"> Home </a>
      <a href="homepage.php"> Fixtures </a>
      <a href="matchresults.php"> Match Results </a>
      <a href="highlights.php" style="opacity:0.5;color:purple"> Latest Highlights </a>
    </div>
    <form>
      <input type="text" placeholder=" Search...." name="search">
      <button type="submit">Search</button>
    </form>

  </div>

  <div class="MainBody" style="height:1900px;">
    <span style="position:absolute; top: 30px;left:50px"> <strong>From Portugal vs France - Euro 2021 </strong></span>
    <iframe style="position:relative; left:100px; top:80px "
    width="500" height="300" src="https://www.youtube.com/embed/6tJEu_WPAoY"></iframe>

    <span style="position:absolute; top: 430px;left:50px"><strong>From Rafael Nadal vs Novak Djokovic - Roland-Garros 2021</strong></span>
    <iframe style="position:absolute; left:100px; top:480px "
    width="500" height="300" src="https://www.youtube.com/embed/3bnmkMx2x_8"></iframe>

    <span style="position:absolute; top: 830px;left:50px"><strong>From Belgium vs Italy - Euro 2021</strong></span>
    <iframe style="position:absolute; left:100px; top:880px "
    width="500" height="300" src="https://www.youtube.com/embed/HiGaRhfftLU"></iframe>

  </div>

  <div class="LeftPane">
    <div class="Sports menu">
      <a href="homepage.php" style="display:block;" > Football </a>
      <a href="Basketball.php" style="display:block"> Basketball </a>
      <a href="tennis.php" style="display:block"> Tennis </a>

    </div>
  </div>
</body>
</html>
