<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="welcomepage.css"/>
  <meta charset="utf-8">
  <title>My Sport Fixtures</title>
</head>
<body>
  <form name="sportselection" class="mainform" method="GET" >
    <label for="FirstName" >First Name: </label>
    <input type="text" id="FirstName" name="FirstName"></br>
    <?php
    checkFNAME();
    ?>


    <label for="LastName">Last Name: </label>
    <input type="text" id="LastName" name="LastName"></br>

    <label for="Email">E-mail: </label>
    <input type="text" id="Email" name="Email"></br>

    <?php
    checkEMAIL();
    ?>

    <label for="Sport">Which sport do you want to see the fixtures of? </label></br></br>
    <select id="Sport" name="Sport">
      <option value="Soccer">Soccer</option>
      <option value="Basketball">Basketball</option>
      <option value="Tennis">Tennis</option>
    </select></br>
    <button type="submit">Go!</button>
  </form>




  <?php
  session_start();
  function redirect($where){
    header("Location: $where");
  }
  function checkFNAME(){
    if ($_GET){
      if(empty($_REQUEST['FirstName'])){
        echo '<font style="position:absolute;left:690px; top:230px;" color="red">Please enter your name.</font>';
        return false;
      }
      else {
        return true;
      }
    }
  }
  function checkEMAIL(){
    if ($_GET){
      if(empty($_REQUEST['Email'])){
        echo '<font style="position:absolute;left:690px; top:375px;" color="red">E-mail is required</font>';
        return false;
      }
      else if (!filter_var($_REQUEST['Email'], FILTER_VALIDATE_EMAIL)) {
        echo '<font style="position:absolute;left:650px; top:375px;" color="red">Please enter a valid email address</font>';
        return false;
      }
      else{
        return true;
      }
    }
  }
  if(isset($_REQUEST["Sport"]) ){
    if( checkFNAME() == true && checkEMAIL() ==true ){
      if ($_REQUEST["Sport"] == 'Soccer'){
        $_SESSION['sport']= $_REQUEST["Sport"];
        $_SESSION['fname']=$_REQUEST["FirstName"];
        redirect('homepage.php');
      }
      elseif($_REQUEST["Sport"] == 'Basketball'){
          redirect('basketball.php');
          $_SESSION['sport']= $_REQUEST["Sport"];
          $_SESSION['fname']=$_REQUEST["FirstName"];
    }
      elseif($_REQUEST["Sport"] == 'Tennis'){
          redirect('tennis.php');
          $_SESSION['sport']= $_REQUEST["Sport"];
          $_SESSION['fname']=$_REQUEST["FirstName"];
        }
      }
    }



  ?>



</body>
</html>
