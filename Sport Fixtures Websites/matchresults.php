<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="matchresults.css"/>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="HeaderMenu">
    <?php
    session_start();
    echo "<div class='welnot' style='position: relative; left:-550px; top:10px;
    font-size: 30px; display:inline '> Welcome $_SESSION[fname]  </div>" ;
    ?>
    <div class="Menu Items">
      <a href="welcomepage.php"> Home </a>
      <a href="homepage.php"> Fixtures </a>
      <a href="matchresults.html" style="opacity:0.5;color:purple"> Match Results </a>
      <a href="highlights.php"> Latest Highlights </a>
    </div>
    <form>
      <input type="text" placeholder=" Search...." name="search">
      <button type="submit">Search</button>
    </form>

  </div>

  <div class="MainBody">
    <button style="position:absolute; top:10px;left:270px;height:50px;" type="button" onclick="DisplayMatches()"> Display Match Results </button>
    <h3 id="FootballSection">Football</h3>
    <div class="fixtures" id="ffix" style="display:none">
      <span id="FirstHome"><img src=""> Egypt <p id="FHomeScore"></p> &ensp;vs&ensp; </span>

      <span id="FirstAway"> <p id="FAwayScore"></p> England <img src=""> </span>

      <div class="matchdata"  id="FMDATA">
        Location: Anfield Stadium, England
      </div>
    </div>

    <div class="fixtures" id="sfix" style="display:none">
      <span id="SecondHome"><img src=""> Austria vs</span>
      <span id="SecondAway"> Hungary <img src=""></span>
      <div class="matchdata" id="SMDATA">
        Location: Anfield Stadium, England
      </div>
    </div>



    <div class="Basketball" style="position:absolute; left:550px; top: 20px;">
      <h3> Basketball</h3>
      <div class="fixtures" id="bask" style="display:none">
        <span id="BFirstHome"><img src=""> Egypt <p id="BFHomeScore"></p> &ensp;vs&ensp; </span>
        <span id="BFirstAway"> <p id="BFAwayScore"></p> England <img src=""> </span>
        <div class="matchdata"  id="BFMDATA">
          Location: Anfield Stadium, England
        </div>
      </div>
    </div>
  </div>

  <div class="LeftPane">
    <div class="Sports menu">
      <a href="homepage.php" style="display:block;" > Football </a>
      <a href="Basketball.php" style="display:block"> Basketball </a>
      <a href="tennis.php" style="display:block"> Tennis </a>

    </div>
  </div>
  <script>

  function DisplayMatches(){
    var Request = new XMLHttpRequest();
    Request.onreadystatechange= function(){DoThis(this)};
    Request.open("GET","Matches.xml",true);
    Request.send();
  }

  function DoThis(Req){

    var RespFromXml = Req.responseXML;
    var Matches= RespFromXml.getElementsByTagName("Match");
    var FHome= document.getElementById("FirstHome");
    var FAway= document.getElementById("FirstAway");

    var SHome= document.getElementById("SecondHome");
    var SAway= document.getElementById("SecondAway");

    var BFHome= document.getElementById("BFirstHome");
    var BFAway= document.getElementById("BFirstAway");


    var FMatchData= document.getElementById("FMDATA");
    var SMatchData= document.getElementById("SMDATA");

    var BFMatchData= document.getElementById("BFMDATA");




    FHome.innerHTML = "<img src='"+(Matches[0].getElementsByTagName("HomeImg")[0].childNodes[0].nodeValue)+"'/>"+
    (Matches[0].getElementsByTagName("Home")[0].childNodes[0].nodeValue) +
    "<p id='FHomeScore'>"+(Matches[0].getElementsByTagName("HomeScore")[0].childNodes[0].nodeValue)+"</p>"+ " vs";
    // +"<p id='FHomDWeScore'>"+(Matches[0].getElementsByTagName("HomeScore")[0].childNodes[0].nodeValue)+"</p>"+
    FAway.innerHTML = "<p id='FHomeScore'>"+(Matches[0].getElementsByTagName("AwayScore")[0].childNodes[0].nodeValue)+"</p>"+
    (Matches[0].getElementsByTagName("Away")[0].childNodes[0].nodeValue) +
    "<img src='"+(Matches[0].getElementsByTagName("AwayImg")[0].childNodes[0].nodeValue)+"'/>"  ;

    SHome.innerHTML = "<img src='"+(Matches[1].getElementsByTagName("HomeImg")[0].childNodes[0].nodeValue)+"'/>"+
    (Matches[1].getElementsByTagName("Home")[0].childNodes[0].nodeValue) +
    "<p id='FHomeScore'>"+(Matches[1].getElementsByTagName("HomeScore")[0].childNodes[0].nodeValue)+"</p>"+ " vs";

    SAway.innerHTML = "<p id='FHomeScore'>"+(Matches[1].getElementsByTagName("AwayScore")[0].childNodes[0].nodeValue)+"</p>"+
    (Matches[1].getElementsByTagName("Away")[0].childNodes[0].nodeValue) +
    "<img src='"+(Matches[1].getElementsByTagName("AwayImg")[0].childNodes[0].nodeValue)+"'/>" ;

    FMatchData.innerHTML = (Matches[0].getElementsByTagName("Time")[0].childNodes[0].nodeValue);
    SMatchData.innerHTML = (Matches[1].getElementsByTagName("Time")[0].childNodes[0].nodeValue);

    BFHome.innerHTML = "<img src='"+(Matches[2].getElementsByTagName("HomeImg")[0].childNodes[0].nodeValue)+"'/>"+
    (Matches[2].getElementsByTagName("Home")[0].childNodes[0].nodeValue) +
    "<p id='FHomeScore'>"+(Matches[2].getElementsByTagName("HomeScore")[0].childNodes[0].nodeValue)+"</p>"+ " vs";

    BFAway.innerHTML = "<p id='FHomeScore'>"+(Matches[2].getElementsByTagName("AwayScore")[0].childNodes[0].nodeValue)+"</p>"+
    (Matches[2].getElementsByTagName("Away")[0].childNodes[0].nodeValue) +
    "<img src='"+(Matches[2].getElementsByTagName("AwayImg")[0].childNodes[0].nodeValue)+"'/>";

    BFMatchData.innerHTML = (Matches[2].getElementsByTagName("Time")[0].childNodes[0].nodeValue);

    document.getElementById("ffix").style.display="block";
    document.getElementById("sfix").style.display="block";
    document.getElementById("bask").style.display="block";

  }
  </script>

</body>
</html>
