<?php

/**
 * @autor: Ronald Iraheta
 */


session_start();

if( !isset( $_SESSION['application'] ) )
    header('Location: index.php?error=1');

if(!isset($_SESSION['application']['car_type']))
    header('Location: index.php?error=1');

if($_SESSION['application']['car_type'] != 'car' && $_SESSION['application']['car_type'] != 'van' && $_SESSION['application']['car_type'] != 'suv'
    && $_SESSION['application']['car_type'] != 'truck' && $_SESSION['application']['car_type'] != 'help')
    header('Location: index.php?error=1');

if($_GET['points'] == '' || !is_numeric($_GET['points']))
    header('Location: step_2.php?car_type='.$_SESSION['application']['car_type']);

$_SESSION['application']['budget'] = htmlentities($_GET['points']);

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bad Credit Car Loans Calculator Canada| Ontario| Toronto</title>

  <link rel="canonical" href="http://canadacreditcompany.ca" />
  <link rel="author" href="https://plus.google.com/u/0/102252983026944378559/"/>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Boostrap-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!--Styles -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!--Fonts -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>



</head>

<body>

<div class="container">
    <p class="indicator">Application Progress<span class="number">(50%)</span></p>  
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      <span class="sr-only">50% Complete</span>
    </div>
  </div>
 <h2 class="h2 ">Postal Code</h2>
  <h4 class="h4 ">Please enter your postal code to search for available vehicles </h4>

    <form method="get" action="matches.php">
        <input type="text" name="postal_code" class="form_input" placeholder="Enter postal code" />
        <p class="sidenote ">Your postal code allows us to provide personal service
     based on where you live.</p>
        <input type="submit" class="btn continue-btn" data-role="none" value="SUBMIT" />

        <!-- <a href="matches.php" class="btn submit-btn">SUBMIT</a> -->
    </form>

</div>



</body>

</html>