<?php
$visit = 0;

$numbers = array('first','second','third','fourth');

if (!isset($_COOKIE['visits'])){
   setcookie('visits', $visit);
} else if ($_COOKIE['visits'] == 4) {
   setcookie('visits', $visit, 0);
} else {
   $visit = $_COOKIE['visits'] + 1;
   setcookie("visits", $visit);
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title> Delicious </title>
   </head>
   <body>
      
      <h1><?php 
         if ($visit == 4) {
            print "Oh no!!  Your cookie has been eaten!!";
         } else {
            print "This is your {$numbers[$visit]} time here.  Beware the cookie monster...";
         }
      ?></h1>
      
   </body>
</html>