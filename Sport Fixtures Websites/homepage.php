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
      <a href="homepage.php" style="opacity:0.5;color:purple"> Fixtures </a>
      <a href="matchresults.php"> Match Results </a>
      <a href="highlights.php"> Latest Highlights </a>
    </div>
    <form>
      <input type="text" placeholder=" Search...." name="search">
      <button type="submit">Search</button>
    </form>

  </div>

  <div class="MainBody">
    <div class="fixtures">
      <span><img src="egyptflag.png"> Egypt vs </span> <span> England <img src="englandflag.png"> </span>
      <div class="matchdata"  id="FMDATA" onmouseover="showDetails(this);" onmouseout="hideDetails(this);">
        Location: Anfield Stadium, England - <span id="time" style="font-size:16px"></span>
        <img id="arrow1" src="arrowdown.png" style="color:yellow; width:20px; height:15px; position: relative;left:300px; top:20px">
        <div id="remaintime1" style="opacity:0; transition: opacity 2s; left:-10px"> Remaining Time:
        <span id="days"></span>  <span id="hours"></span> <span id="mins"></span>  <span id="secs"></span>
      </div>
      </div>

    </div>

    <div class="fixtures">
      <span><img src="austriaflag.png" > Austria vs</span> <span> Hungary <img src="hungaryflag.png"></span>
      <div class="matchdata" onmouseover="showDetails2(this);" onmouseout="hideDetails2(this);">
      Location: Anfield Stadium, England -  <span id="time2" style="font-size:16px"></span>
        <img id="arrow2" src="arrowdown.png" style="color:yellow; width:20px; height:15px; position: relative;left:300px; top:20px">
        <div id="remaintime2" style="opacity:0; transition: opacity 2s;left:-40px"> Remaining Time:
          <span id="days2"></span>  <span id="hours2"></span> <span id="mins2"></span>  <span id="secs2"></span>
        </div>
      </div>

    </div>

  </div>

  <div class="LeftPane">
    <div class="Sports menu">
      <a href="homepage.php" style="display:block; color:blue" > Football </a>
      <a href="Basketball.php" style="display:block"> Basketball </a>
      <a href="tennis.php" style="display:block"> Tennis </a>

    </div>
  </div>

  <script>

  var date1 = new Date("Jul 4, 2021 16:00:00");
  var date2 = new Date("Jul 25, 2021 20:00:50");
  document.getElementById("time").textContent += date1.toString();
  document.getElementById("time2").textContent += date2.toString();

  function remainingTimeLive(countTo, DaysID, HoursID, MinsID, SecsID ){
  var ThisMoment = new Date();
  var DaysDifference = Math.round( (countTo.getTime()-ThisMoment.getTime() )/ (1000 * 60 * 60 * 24));
  var HoursDifference = Math.round(( (countTo.getTime()-ThisMoment.getTime() ) / (1000 * 60 * 60 )))%24 ;
  var MinutesDifference = Math.round(( (countTo.getTime()-ThisMoment.getTime() ) / (1000*60)))%60;
  var SecondsDifference = Math.round(( (countTo.getTime()-ThisMoment.getTime() ) / (1000 )))%60;
  document.getElementById(DaysID).innerHTML = DaysDifference + " Days ";
  document.getElementById(HoursID).innerHTML = HoursDifference + " Hours ";
  document.getElementById(MinsID).innerHTML = MinutesDifference + " Minutes ";
  document.getElementById(SecsID).innerHTML = SecondsDifference + " Seconds ";
  }

     setInterval(function(){remainingTimeLive(date1,"days","hours","mins","secs")}, 1000);
     setInterval(function(){remainingTimeLive(date2,"days2","hours2","mins2","secs2")}, 1000);

  function showDetails(element){
    element.style.height="120px";
    element.style.zIndex="10";
    var rtime = document.getElementById("remaintime1");

    var arrow = document.getElementById("arrow1");
    arrow.style.top="80px";
    arrow.style.transition="1s";
    rtime.style.opacity=1;
    rtime.style.animationDelay="2s";


  }
  function hideDetails(element){
    element.style.height="60px";
    element.style.zIndex="0";
    var rtime = document.getElementById("remaintime1");
    var arrow = document.getElementById("arrow1");
    arrow.style.top="20px";
    arrow.style.transition="1s";
    rtime.style.opacity=0;
  }

  function showDetails2(element){
    element.style.height="120px";
    element.style.zIndex="10";
    var rtime = document.getElementById("remaintime2");

    var arrow = document.getElementById("arrow2");
    arrow.style.top="90px";
    arrow.style.transition="1s";
    rtime.style.opacity=1;
    rtime.style.animationDelay="2s";


  }
  function hideDetails2(element){
    element.style.height="60px";
    element.style.zIndex="0";
    var rtime = document.getElementById("remaintime2");
    var arrow = document.getElementById("arrow2");
    arrow.style.top="20px";
    arrow.style.transition="1s";
    rtime.style.opacity=0;
  }
  </script>




</body>
</html>
