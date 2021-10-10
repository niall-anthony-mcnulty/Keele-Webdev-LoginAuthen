
<!-- Cookies --> 
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
            <p id='jscookie'></p>
      </body>
      <script>
            var cookie = document.cookie;
            document.getElementById('jscookie').innerHTML = "Javascript reads the cookies for this site as <pre>"+cookie+"</pre>";
  </script>
</html>


