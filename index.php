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
   echo "<br>";
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
   echo "<br>";

   #scope
   $x=25;
   function f1() 
   {
       echo "$x"; //doesnt display as it should be redefined again as its global

   }
   f1();
   echo "$x"; // outside the function it works
   echo "<br>";

    #global keyword

    $m=7;
    $n=9;
    function globs(){
        global $m,$n;
        $n = $m + $n ;
    };

    glob();
    echo "$n";
    echo "<br>";

    #globals
    $p=7;
    $q=9;

    function globals(){

        $GLOBALS['q']=$GLOBALS['p']+$GLOBALS['q'];
    }

    globals();
    echo "$q";
    echo "<br>";

    #static keyword retains the previous info
    function stati(){
        static $x=0;
        echo "$x";
        $x++;
    }

    stati();
    echo "<br>";
    stati();
    echo "<br>";
    stati();
    echo "<br>";

    #echo
    echo ("<h2>checking echo</h2>");
    echo "i" , " am" , " learning" , " php" ;
    echo "<br>";
    echo "i am learning php";
    echo "<br>";
    echo "php<br>";

    #display text and vars using echo
    $text1="learn php";
    $text2="through self study";

    echo "<h2>$text1</h2>";
    echo "<h2>".$text1."</h2>";
    echo "i learn ".$text2."<br>";

    #print
    print "<h2>learn php</h2>";
    print "Learn php<br>";
    print "i am learning php";

    #display text and vars using print
    $text1="learn php";
    $text2="through self study";

    print "<h2>$text1</h2>";
    print "<h2>".$text1."</h2>";
    print "i learn ".$text2."<br>";

    #data types

    #string
    $d1="heyyyy";
    $d2='heyyyyyyyy';

    echo $d1;
    echo "<br>";
    echo $d2;
    echo "<br>";

    #integer
    $d3=123;
    var_dump($d1);
    var_dump($d3);

    $d4=0x0000111;
    var_dump($d4);

    #float
    $d5=10.234;
    var_dump($d5);

    #array
    $colours=array("red","black","bronze");
    var_dump($colours);
    echo "<br>";

    #object
    class ClothBrand{
        function ClothBrand(){
            $this->brand="H&M";
            $this->brand="Forever21";
        }
    }
    $cloth=new ClothBrand;
    echo $cloth->brand;// Forever21 will be the output
    echo "<br>";
    #null
    $nobj="object";
    $nobj=null;
    var_dump($nobj);
    echo "<br>";

    #stringFunctions
    echo strlen("hello trupti");
    echo "<br>";
    echo str_word_count("hello trupti");
    echo "<br>";
    echo strrev("hello trupti");
    echo "<br>";
    echo strpos("hello trupti","trupti");
    echo "<br>";
    echo str_replace("trupti","tuti","hello trupti");
    echo "<br>";

    #constants

    #case sensitive
    echo "<br>";
    define("welcome","The PHP Learners ");
    echo welcome;

    #case insensitive
    echo "<br>";
    define("Welcome","The PHP Learners ",true);
    echo welcome;
 
    echo "<br>";
    define("welcome","The PHP Learners ");

    function check(){
        echo welcome;
    }
    check();
    
    #OPERATORS

    #Arithmetic operators
    echo "<br>";
    $n1=23;
    $n2=45;
    echo $n1;
    echo "<br>";
    echo $n2;
    echo "<br>";
    echo $n1+$n2; //addition
    echo "<br>";
    echo $n1-$n2;//subtraction
    echo "<br>";
    echo $n1*$n2;//multiplication
    echo "<br>";
    echo $n1/$n2;//division
    echo "<br>";
    echo $n1%$n2;//modulus
    echo "<br>";
    echo $n1**$n2;//exponentiation
    echo "<br>";
    
    #Assignment operators
    $ass=20;
    echo $ass;
    echo "<br>";
    $ass+=70;
    echo $ass;
    echo "<br>";
    $ass-=50;
    echo $ass;
    echo "<br>";
    $ass*=20;
    echo $ass;
    echo "<br>";
    $ass/=10;
    echo $ass;
    echo "<br>";
    $ass%=50;
    echo $ass;
    echo "<br>";

    #comparison operators
    $cmp1=100;
    $cmp2="500";
    $cmp3=100;
    var_dump($cmp1==$cmp2);
    echo "<br>";
    var_dump($cmp1==$cmp3);
    echo "<br>";
    var_dump($cmp1===$cmp3);
    echo "<br>";
    var_dump($cmp1!=$cmp3);
    echo "<br>";
    var_dump($cmp1<>$cmp3);
    echo "<br>";
    var_dump($cmp1!==$cmp3);
    echo "<br>";
    var_dump($cmp1>$cmp3);
    echo "<br>";
    var_dump($cmp1<$cmp3);
    echo "<br>";
    var_dump($cmp1>=$cmp3);
    echo "<br>";
    var_dump($cmp1<=$cmp3);
    echo "<br>";


    #Increment Decrement Operator
    echo "<br>";
    $inc=100;
    echo ++$inc;//101
    echo "<br>";
    $inc1=100;
    echo $inc1++;//100
    echo "<br>";
    $inc2=100;
    echo $inc2--;//100
    echo "<br>";
    $inc3=100;
    echo --$inc3;//99
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    #Logical Operators

    $log1=20;
    $log2=40;
    
    if($log1==20 and $log2==40){
        echo "and";  
    }
    echo "<br>";

    if($log1==20 or $log2==40){
        echo "or";
    }
    echo "<br>";

    if($log1==20 xor $log2==40){
        echo "xor";
    }
    echo "<br>";

    if($log1==20 && $log2==40){
        echo "&&";
    }
    echo "<br>";

    if($log1==20 || $log2==40){
        echo "||";
    }
    echo "<br>";

    if($log1!==40){
        echo "!";
    }
    echo "<br>";


    #String operator
    $con1="Hello";
    $con2="Trupti";
    echo $con1 . $con2;
    echo "<br>";
    $con1 .= $con2;
    echo $con1;
        echo "<br>";
    echo "<br>";

    #Array Operators
    echo "<br>";
    $arr1= array("a"=>"black","b"=>"white");
    $arr2=array("c"=>"grey","d"=>"navyblue");
    print_r($arr1+$arr2);
    echo "<br>";
    var_dump($arr1==$arr2);
    echo "<br>";
    var_dump($arr1===$arr2);
    echo "<br>";
    var_dump($arr1!=$arr2);
    echo "<br>";
    var_dump($arr1<>$arr2);
    echo "<br>";
    var_dump($arr1!==$arr2);
    echo "<br>";
    echo "<br>";
    echo "<br>";



   ?> 



</body>
</html>