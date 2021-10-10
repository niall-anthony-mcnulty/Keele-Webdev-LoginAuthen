<?php
$username = $_POST['username'];
$password = $_POST['password'];
$passlist = array('james' => 'penguin', 'mike' => 'llama', 'niall' => 'niall');

if($passlist[$username] == $password){
      // SUCCESS
      session_start();
      $_SESSION['id'] = session_id();
      $_SESSION['username'] = $username;
      $_SESSION['loggedin'] = true;
      header('location: http://localhost/week%205/CODE/cookies/secure.php');
}else{
      // FAILURE
      echo "Login failed. Check username and passowrd and try again!";
      header( "Refresh:5; url=http://localhost/week%205/CODE/cookies/login.html", true, 303);
}

?>