<html lang="en">
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
                     <li><a href="#">#1 - Sugar</a></li>
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


    <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img alt="First slide" src="img/red-apple.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Red Delicious Apples...</h1>
              <p>Don't worry, It will only take one bite, and you'll be hooked.  I guarentee it!<br /> How Bad could it really be?</p>
              <p><a class="btn btn-lg btn-danger" href="#" role="button">Have a Taste</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img alt="Second slide" src="img/cube-banner.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Current Employment</h1>
              <p>I work as a Web developer for Perfect Cube, L.L.C.  Most of our work uses the framework Drupal.  </p>
              <p><a class="btn btn-lg btn-success" href="#" role="button">Drupal Intro</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img alt="Third slide" src="img/blue-banner.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hobbies</h1>
              <p>Of the many things I love to do, Ultimate Frisbee ranks quite high.  Dancing with my wife and enjoying a relaxing computer game are also a few of my favorite things...</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn a bit more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" alt="140x140" src="img/what-matters-most.jpg">
          <h2>What Matters Most</h2>
          <p>In life there are a very few things that are truly eternal.  These things are what are precious to me.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" alt="140x140" src="img/lisp.jpg">
          <h2>Current Projects</h2>
          <p>In CS 490R, we are currently studying the topic of Artifcial Intellegence... In thort, I am learning to thpeak with a lithp.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>