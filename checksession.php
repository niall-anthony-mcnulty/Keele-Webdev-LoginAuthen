<?php 

session_start();
if ($_SESSION['id'] != session_id() || !isset($_SESSION['loggedin']) || (!$_SESSION['loggedin']))  {      
    session_destroy();
    echo "Error with login, try again!";
    header( "Refresh:5; url=http://localhost/week%205/CODE/cookies/login.html", true, 303);
      exit;
}