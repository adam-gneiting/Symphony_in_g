<?php

   session_start();
   
   if (isset($_SESSION['submitted'])) {
      while (ob_get_status()) {
         ob_end_clean();
      }
      header( "Location: results.php" );
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
         <form action="results.php" method="post">
            <label>Given the choice, which do you prefer?</label><br />
            <input type="radio" name="dessert" value="Cookies" checked="true">Cookies</input><br />
            <input type="radio" name="dessert" value="Cake">Cake</input><br /><br />
         
            <label>And for the cold dessert?</label><br />
            <input type="radio" name="cold-dessert" value="ice cream" checked="true">Ice Cream</input><br />
            <input type="radio" name="cold-dessert" value="sorbet">Sorbet</input><br /><br />
         
            <label> Which of these chocolates have you tried? </label><br />
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="dove">Dove</input>
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="hersheys">Hershey's</input>
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="milka">Milka</input>
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="ritter">Ritter Sport</input>
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="toblerone">Toblerone</input>
            <input class="checkboxes"type="checkbox" name="chocolates[]" value="lindt">Lindt</input><br /><br />
         
            <label> What is your favorite dessert? </label>
            <input type="text" name="favorite" placeholder="the one you'd kill for..." required/><br /><br />
            
            <input class="btn btn-primary" type="submit" value="See what others have said." /> 
            <a class="link" href="results.php">Skip the survey, see the results</a>
         
         </form>
         
      </div>
   </div>
   
       <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>