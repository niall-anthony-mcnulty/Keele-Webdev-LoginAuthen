<?php
//destroys the session so next time session_start() is run a new session id will be generated
session_start();
session_destroy();
?>
<html>
      <head>
            <title>Logout</title>
      </head>
      <body>
            <h2>Logout</h2>
            <p>You have been successfully logged out.</p>
            <p>To return to the login page, click <a href="login.html">here</a>.</p>
      </body>
</html>