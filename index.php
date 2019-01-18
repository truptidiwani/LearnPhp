<!DOCTYPE html>
<html>
<body>
    <h2>My page</h2>
   <?php

    //syntax
   echo "first php ex";
   echo "<br>";

   // variables
   $x=5;
   $y=10;
   $z=me;
   $sum=$x+$y+$z;
   echo "$sum";

   //case sensitivity
   Echo "$sum";
   ECHO "$sum";

   //case sensitivity
   $color= "cyan";
   $COLOR="yellow";
    echo "<br>";
   echo "My pen is " .$color. "<br>";
   echo "My house is ".$COLOR."<br>";
   echo "My bike is".$coLOR."<br>";

   #variables
   $txt="i love php";
   echo "guys $txt";


   #scope
   $x=25;
   function f1() 
   {
       echo "$x"; //doesnt display as it should be redefined again as its global

   }
   f1();
   echo "$x"; // outside the function it works


    #global keyword

    $m=7;
    $n=9;
    function globs(){
        global $m,$n;
        $n = $m + $n ;
    };

    glob();
    echo "$n";
   ?> 



</body>
</html>