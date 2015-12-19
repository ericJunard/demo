<?php

session_start();

if( !isset( $_SESSION['application'] ) )
    header('Location: index.php?error=1');

if($_GET['good'] != 1)
    header('Location: index.php?error=1');

echo 'thank you!!';

session_destroy();
unset($_SESSION['application']);