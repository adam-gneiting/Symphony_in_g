<?php

   if (isset($_POST['favorite']) and $_POST['favorite'] != '') {
      session_start();
      $_SESSION['submitted'] = true;
      $json = array();
      foreach ($_POST as $key=>$value) {
         if (!is_array($value)) {
            $json[$key] = htmlspecialchars($value);
         } else {
            foreach ($value as $inner_value) {
               $json[$key][] = htmlspecialchars($inner_value);
            }
         }
      }
      
      $file = fopen('results.json', 'a');
      fwrite($file, "," . json_encode($json) . "\n");
      fclose($file);
   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A home page for CS313">
    <meta name="author" content="Adam Gneiting">
    <!--<link rel="shortcut icon" href="img/favicon.png">-->

    <title>Symphony In G</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/overrides.css" rel="stylesheet">
    
</head>
  
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Symphony In G</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="survey.php">#1 - Sugar</a></li>
                     <li><a href="#">#2 - Spice</a></li>
                    <li><a href="#">#3 - Everything Nice</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Group Work</li>
                    <li><a href="#">Mix it up</a></li>
                    <li><a href="#">Bake at 450&deg;</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
   
   
   <div class="content">
      <div class="main">
   <?php
   $file = fopen('results.json', 'r');
   $json = json_decode('[' . file_get_contents('results.json') . ']', true);
   
   $favorites = array();
   
   foreach ($json as $entry) {
      if (isset($entry['dessert'])) {
         if ($entry['dessert'] == "Cookies") {
            $cookie++;
         } else {
            $cake++;
         }
      }
      if (isset($entry['cold-dessert'])) {
         if ($entry['cold-dessert'] == "ice cream") {
            $ice_cream++;
         } else {
            $sorbet++;
         }
      }
      if (isset($entry['chocolates'])) {
         foreach ($entry['chocolates'] as $choco) {
            switch ($choco) {
               case "dove":
                  $dove++;
                  break;
               case "hersheys":
                  $hersheys++;
                  break;
               case "milka":
                  $milka++;
                  break;
               case "ritter":
                  $ritter++;
                  break;
               case "toblerone":
                  $toblerone++;
                  break;
               case "lindt":
                  $lindt++;
                  break;
               default:
                  break;
            }
         }
      }
      if (isset($entry['favorite'])) {
         $favorites[$entry['favorite']] = true;
      }
   }
   
   print "<p> $cookie people prefer cookies and $cake people prefer cake.</p>";
   print "<p> $ice_cream people prefer ice cream and $sorbet people prefer sorbet.</p>";
   print "<p> $dove people have tried Dove chocolate.</p>";
   print "<p> $hersheys people have tried Hersheys chocolate.</p>";
   print "<p> $milka people have tried Milke chocolate.</p>";
   print "<p> $ritter people have tried Ritter Sport chocolate.</p>";
   print "<p> $toblerone people have tried Toblerone chocolate.</p>";
   print "<p> $lindt people have tried Lindt chocolate.</p>";
   print "<p> This is a list of peoples favorites. <ul>";
   foreach ($favorites as $key=>$favorite) {
      print "<li> $key </li>";
   }
   print "</p>";
   ?>
      </div>
   </div>
  
          <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>