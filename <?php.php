<?php
if(!isset($_COOKIE['counter'])){
      $counter = 1;
}else{
      $counter = $_COOKIE['counter'];
      $counter++;
}

setcookie('counter', $counter);
?><!DOCTYPE html>
<html lang="en">
      <head>
            <title>Cookie Counter Example</title>
      </head>
      <body>
            <p>You have visited this page <?php echo($counter); ?> times.</p>
      </body>
</html>