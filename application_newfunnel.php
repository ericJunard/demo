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

if($_SESSION['application']['postal_code'] == '')
    header('Location: step_3.php?points='.$_SESSION['application']['budget']);

if($_POST['submitApp']){

    $message = print_r($_SESSION, true);
    $message2 = print_r($_POST, true);

    mail('eric.junard.dabon@gmail.com, riraheta86@live.com, djsaintg@hotmail.com, eric.junard.dabon@gmail.com', 'Application Form from CCC', $message.$message2);

    header('Location: thankyou.php?good=1');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
<title>How To Get An Auto Loan With Bad Credit </title>

<meta name="Description" content="About Us | Canada Credit Company. We offer car finance for people with bad credit. 98% Approval for bad credit car financing in Canada. Contact us now!!" />
<meta name="Keywords" content="bad credit car financing in Canada, car finance for people with bad credit" />
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

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
     <p class="indicator">Application Progress<span class="number">(90%)</span></p>  
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
      <span class="sr-only">90% Complete</span>
    </div>
  </div>
  <h2 class="h2 ">FINAL STEP</h2>
  <h4 class="h4 ">Please fill out the form bleow and submit to complete your application.</h4>
<form class="" method="POST" action="#">
<div class="form-group">
  <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
</div>
<div class="form-group">
  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
</div>
<div class="form-group">
   <label>Birthday</label>
</div>
<div class="form-group">
 
  <select name="birthday-month" class="select_date">
  <option>  Month  </option>
  <option value="January">January</option>
  <option value="Febuary">Febuary</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>

<select name="birthday-day" class="select_date" >
  <option>  Day  </option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>

<select name="birthday-year" class="select_date">
  <option>  Year </option>
  <option value="1993">1997</option>
  <option value="1993">1996</option>
  <option value="1993">1995</option>
  <option value="1993">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
  <option value="1960">1960</option>
  <option value="1959">1959</option>
  <option value="1958">1958</option>
  <option value="1957">1957</option>
  <option value="1956">1956</option>
  <option value="1955">1955</option>
  <option value="1954">1954</option>
  <option value="1953">1953</option>
  <option value="1952">1952</option>
  <option value="1951">1951</option>
  <option value="1950">1950</option>
  <option value="1949">1949</option>
  <option value="1948">1948</option>
  <option value="1947">1947</option>
  
</select>
</div>
<div class="form-group">
  <select name="residence_status_property" class="select">
    <option value="status">Please select residence status (rent/own)</option>
    <option value="rent">Rent</option>
    <option value="own">Own</option>
  </select>
</div>
<div class="form-group">
  <input type="text" class="form-control" id="street" name="street" placeholder="Street Address">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="city" name="city" placeholder="City">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="city" name="city" placeholder="Province">
</div>
<div class="form-group">
  <select name="residence_status_property_living_time" class="select">
    <option value="select" >How long at address? </option>
    <option value="Less Than 1 Year">Less Than 1 Year</option>
    <option value="1 Year">1 Year</option>
    <option value="2 Years">2 Years</option>
    <option value="3 Years">3 Years</option>
    <option value="4 Years">4 Years</option>
    <option value="5 Years">5 Years</option>
    <option value="6 Years">6 Years</option>
    <option value="7 Years">7 Years</option>
    <option value="8 Years">8 Years</option>
    <option value="9 Years">9 Years</option>
    <option value="10 Years">10 Years</option>
    <option value="11 Years">11 Years</option>
    <option value="12 Years">12 Years</option>
    <option value="13 Years">13 Years</option>
    <option value="14 Years">14 Years</option>
    <option value="15 Years">15 Years</option>
    <option value="16 Years">16 Years</option>
    <option value="17 Years">17 Years</option>
    <option value="18 Years">18 Years</option>
    <option value="19 Years">19 Years</option>
    <option value="20 Years">20 Years</option>
    <option value="21 Years">21 Years</option>
    <option value="22 Years">22 Years</option>
    <option value="23 Years">23 Years</option>
    <option value="24 Years">24 Years</option>
    <option value="25 Years +">25 Years +</option>
  </select>
</div>
<div class="form-group">
  <input type="text" class="form-control" id="" name="montly_payment" placeholder="Monthly Payment">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="occupation_job" name="occupation_job" placeholder="Occupation/Job Title">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="employer" name="employer"  placeholder="Name of employer">
</div>
<div class="form-group">
  <select name="how_long_employed" class="select">
    <option value="length">How long employed?</option>
    <option value="Not Employed">Not Employed</option>
    <option value="1 Month">1 Month</option>
    <option value="3 Months">3 Months</option>
    <option value="6 Months">6 Months</option>
    <option value="12 Months">12 Months</option>
    <option value="2 Years">2 Years</option>
    <option value="3 Years">3 Years</option>
    <option value="4 Years">4 Years</option>
    <option value="5 Years">5 Years</option>
    <option value="6 Years">6 Years</option>
    <option value="7 Years">7 Years</option>
    <option value="8  Years">8  Years</option>
    <option value="9 Years">9 Years</option>
    <option value="10 Years +">10 Years +</option>
  </select>
</div>
<div class="form-group">
  <input type="text" class="form-control" id="montly_income" name="montly_income" placeholder="Monthly Income Before Tax">
</div>
<input type="submit" name="submitApp" class="btn submit-btn" value="Submit Application" />
</form>
</div>
</body>

</html>

