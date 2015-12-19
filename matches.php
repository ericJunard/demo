<?php

/**
 * @autor: Ronald Iraheta
 */

session_start();
if( !isset( $_SESSION['application'] ) )
    header('Location: index.php?error=1');
if($_SESSION['application']['car_type'] == '')
    header('Location: index.php?error=1');
if($_SESSION['application']['budget'] == '')
    header('Location: step_2.php?car_type='.$_SESSION['application']['car_type']);
if($_GET['postal_code'] == '' )
    header('Location: step_3.php?points='.$_SESSION['application']['budget']);
$_SESSION['application']['postal_code'] = htmlentities($_GET['postal_code']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bad Credit Car Loans Calculator Canada| Ontario| Toronto</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Boostrap-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--Styles -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--Fonts -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <p class="indicator">Application Progress<span class="number">(70%)</span></p>  
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
   <h2 class="h2 ">Searching for programs </br>in your area</h2> 
    <h4 class="trivia ">Did you know, over 250,000 Canadians have taken
</br>advantage of our convenient programs</br> this year already? </h4>
    <div class="text-center">
      <img class=""src="images/rotate.gif"/>
    </div>
   <h3 class='h3 '>Locating dealers<img class="fade-in one pleft" src="images/check.png"/></h3>
   <h3 class='h3 '>Searching inventory<img class="fade-in two pleft" src="images/check.png"/></h3>
   <h3 class='h3 '>Confirming financing<img class="fade-in three pleft" src="images/check.png"/></h3>
  
</div>
<meta http-equiv="refresh" content="6;url=application_newfunnel.php">
</body>
</html>
