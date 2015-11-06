<?php
// input misspelled word

?>

<!DOCTYPE html>
<html>
<body>
<div class="navigation">
    <div class="container">
    
        <div class="navigationLogo">
  <a href="/">
      <img src="FEMR LOGO ADMIN PAGE.png" />
  </a>
		</div>
    </div>
</div>
<br>
<br>
<br>
  </body>
<?php

  // if (isset($_POST['newField']))
  // {
  //   $UpdateQuery = "UPDATE patients SET city='$_POST[suggestivecity]' WHERE id='$_POST[id]'";
  //   $conn->query($UpdateQuery);
  // };
?>

<head>
  <meta charset="utf-8">
  <title>fEMR City Suggestive Search</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


</head>

<br>

<center><img align="middle" src="images/femrLogo.png"></img></center>
<center><h1> City Suggestive Search </h1></center>
<div class="ui-widget">
    <label for="skills">City Name: </label>
    <input type="text" class="form-control" id="skills" name="skills">

</div>
  </body>
  <br>
  <script>
  $(function() {
      $( "#skills" ).autocomplete({
          source: 'search.php'
      });
  });
  </script>
  </html>
