<!-- local storage -->

<!DOCTYPE html>
<head>
<title>Local Storage example</title>
<link rel='stylesheet' href='main.css' >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
      if(typeof(Storage) !== "undefined") {
            // Code for localStorage/sessionStorage.
            if (localStorage.backgroundcolour) {
                  $('body').css('background-color', localStorage.backgroundcolour);
                  //also set the default value of the colour picker to the local storage value
                  $('#colourpicker').val(localStorage.backgroundcolour);
            }
      } else {
            $('#message').html("Sorry, local storage not supported");
      }

      $('#submitbutton').click( function(){
            var colour = $('#colourpicker').val();
            console.log(colour);
            $('body').css('background-color', colour);
            localStorage.backgroundcolour = colour;
      });

      $('#clearbutton').click( function(){
            localStorage.clear();
            $('body').css('background-color', '#ffffff');
      });
});

</script>
</head>
<body>
<h1>Local storage example</h1>

Select a background colour:
<input type='color' id='colourpicker' />
<input type='button' id='submitbutton' value='Change colour' />
<input type='button' id='clearbutton' value='Clear Setting' />

<div id='message'></div>

</body>
</html>