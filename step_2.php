<?php

/**
 * @autor: Ronald Iraheta
 */

session_start();

if( !isset( $_SESSION['application'] ) )
    header('Location: index.php?error=1');

if(!isset($_GET['car_type']))
    header('Location: index.php?error=1');

if($_GET['car_type'] != 'car' && $_GET['car_type'] != 'van' && $_GET['car_type'] != 'suv'
    && $_GET['car_type'] != 'truck' && $_GET['car_type'] != 'help')
    header('Location: index.php?error=1');

$_SESSION['application']['car_type'] = htmlentities($_GET['car_type']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Mobile- CanadaCreditCompany.CA</title>

  <link rel="canonical" href="http://canadacreditcompany.ca" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Boostrap-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--Styles -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--Fonts -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div class="container">
  <p class="indicator">Application Progress<span class="number">(30%)</span></p>  
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
      <span class="sr-only">30% Complete</ span>
    </div>
  </div>
  <h2 class="h2">Monthly Payment</h2>
  <h4 class="h4 ">Set your desired amount for vehicle monthly payment</h4>
  <div data-role="main" class="ui-content" >

    <form method="get" action="step_3.php">

        <div>
          <label for="points">BUDGET </label>
          <input type="range" name="points" id="points" value="400" min="100" max="1000" >
          <!--<a href="step_3.php" class="btn continue-btn"data-inline="true" >CONTINUE TO NEXT STEP</a>-->
            <input type="submit" class="btn continue-btn" data-role="none" value="CONTINUE TO NEXT STEP" />
        </div>

      </form>

  </div>
</div>
<div class='container'>
  <div class='row'>
    <div class='col-md-5'></div>
    <!--start of social media share buttons-->
    <div class='col-md-7'>
    
    <!--end of social media share buttons-->
  </div>
</div>



</body>
<!-- Facebook Pixel Code -->

</html>
