<?php

/**
 * @autor: Ronald Iraheta
 */


session_start();

$inputs = array(
    'car_type' => '',
    'budget' => '',
    'postal_code' => ''
);

if( !isset( $_SESSION['application'] ) )
    $_SESSION['application'] = $inputs;


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
</head>
<body style="width: 800px!important;">

<div class="container-fluid">

  <div class="text-center">
  </div>
  <h2 class="h2 ">Let's get started</h2>
  <h4 class="h4 ">Select the kind of vehicle you are looking for</h4>



    <?php
        if(isset($_GET['error'])){
            echo 'Invalid selection. Please select one of the following options';
        }
    ?>
    <hr>
  <a href="step_2.php?car_type=car">
  <div class=" box">
    <div class="row">
      <div class="col-xs-2 ">
      <p class="vehicle-label">Car</p>
      <img class="img-responsive"src="images/car.png">
     </div>
     <div class="col-xs-3">
      <p>Excellent fuel efficiency</br>Reliable Performance</br>Seats up to 5</p>
     </div>
     <div class="col-xs-3">
      <a href="step_2.php?car_type=car" ><img class ="img_padding img-responsive"src="images/chevron-right.png"></a>
    </div>
   </div>
  </div>
</a>
  <hr>
<a href="step_2.php?car_type=van">
<div class=" box">
    <div class="row">
      <div class="col-xs-2">
      <p class="vehicle-label ">VAN</p>
      <img class="img-responsive"src="images/van.png">
     </div>
     <div class="col-xs-3">
      <p>Ideal space for busy families</br>Ensures lots of cargo space</br>Seats up to 8</p>
     </div>
     <div class="col-xs-3">
      <a href="step_2.php?car_type=van" ><img class ="img_padding img-responsive"src="images/chevron-right.png"></a>
    </div>
   </div>
  </div>
</a>
<hr>
<a href="step_2.php?car_type=suv">
<div class=" box">
    <div class="row">
      <div class="col-xs-2">
      <p class="vehicle-label ">SUV</p>
      <img class="img-responsive"src="images/suv.png">
     </div>
     <div class="col-xs-3">
      <p>Flexible seating and storage</br>Performance and versatility</br>Seats up to 7</p>
     </div>
     <div class="col-xs-3">
      <a href="step_2.php?car_type=suv" ><img class ="img_padding img-responsive"src="images/chevron-right.png"></a>
    </div>
   </div>
  </div>
</a>
  <hr>
  <a href="step_2.php?car_type=truck">
<div class=" box">
    <div class="row">
      <div class="col-xs-2">
      <p class="vehicle-label ">TRUCK</p>
      <img class="img-responsive"src="images/truck.png">
     </div>
     <div class="col-xs-3">
      <p>Provides torque and horsepower</br>Towing and hauling applications</br>Seats up to 5</p>
     </div>
     <div class="col-xs-3">
      <a href="step_2.php?car_type=truck" ><img class ="img_padding img-responsive"src="images/chevron-right.png"></a>
    </div>
   </div>
  </div>
</a>

  <a href="step_2.php?car_type=help">
 <div class=" recommended">
    <div class="row">
      <div class="col-xs-2">
      <img class="img-responsive"src="images/recommended.png">
     </div>
     <div class="col-xs-3">
      <p class="help">HELP ME CHOOSE</br>Allow us to find</br>the perfect match</p>
     </div>
     <div class="col-xs-3">
      <a href="step_2.php?car_type=help" ><img class ="img_padding img-responsive"src="images/chevron-right.png"></a>
    </div>
   </div>
  </div>
</a>

<div class='container'>
  <div class='row'>
    <div class='col-md-5'></div>
    <!--start of social media share buttons-->
    <div class='col-md-7'>
    
    <!--end of social media share buttons-->
  </div>
</div>
<!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>