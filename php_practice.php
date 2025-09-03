<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1{
        color: blue;
        text-align: Center;

    }
</style>

<script>
    alert("Hello World");
</script>
-->

<?php 
    //echo "Hello World!";
    #echo "Hello World!";
?>

<!-- Hello -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my first PHP page</h1>
    <hr>
    <h1>-PHP-</h1>
    <?php echo "<b><i>Hello</i> my name is Ednis</b><br><br>";

    //aZ09_
    //echo $a
    /*$a = 5;
    var_dump($a);
    var_dump("John");
    var_dump(3.14);
    // var_dump(true);
    // var_dump(["one","2","three"]);
    // var_dump(null);*/

    // //GLOBAL
    // $a = 5;

    // echo $a."<br>";

    // //LOCAL
    // function test(){
    //    // $a = 0;

    //    //STATIC
    //    static $a = 0;
    //     echo $a."<br>";
    //     $a++;
    // }

    // test()."<br>";
    // test()."<br>";

    // //ECHO CAN ADD MULTIPLE USING COMMA
    // echo ("Hello<br>"), ("Hello<br>"), ("Hello<br>");
    // echo "World<br>";
    // //PRINT CAN'T
    // print ("Hello<br>");
    // print "World<br>";

    // echo print ("Hello")."<br>";
    // //Print can display value 1 (Succesfully executed)
    
//     $a = 5;
//     echo "$a eggs";

// $a = "Natoy Cruz";
// $b = 124;
// $c = 04.27;
// $d = true;
// $e = [1,2,3];
// $f = new stdClass();
// $g = null;
// $h = fopen("php_practice.php", "r"); //File name, Mode

// var_dump($a);
// echo "<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);
// echo "<br>";
// var_dump($d);
// echo "<br>";
// var_dump($e);
// echo "<br>";
// var_dump($f);
// echo "<br>";
// var_dump($g);
// echo "<br>";
// var_dump($h);
// echo "<br><br>";
// echo "<hr>";

// echo strlen($a);
// echo "<br>";

// echo str_word_count($a);
// echo "<br>";

// echo strpos($a,"Cruz");
// echo "<br>";

// echo strtoupper($a);
// echo "<br>";

// echo strtolower($a);
// echo "<br>";

// echo str_replace("Cruz", "Manaloto", $a);
// echo "<br>";

// echo strrev($a);
// echo "<br>";

// echo trim("Hello Love!  ");
// echo "<br>";

// var_dump( explode("o",string: "Hello Love!"));

echo "<hr>";

// echo var_dump("Hello"."World!");
// $x = "Hello";
// $y = "World";

// echo "$x $y";
// echo "<br>";

// echo "John \$Bai \" Cruz";

// $a = 5;
// $b = 3.14;
// $c = "25";

// var_dump( $a, $b, $c );
// echo "<br>";
// echo PHP_INT_MAX;
// echo "<br>";
// echo PHP_INT_MIN;
// echo "<br>";
// echo PHP_INT_SIZE;
// echo "<br>";
// echo "<br>";
// echo is_int( $c);
// echo "<br>";
// echo is_long( $a );
// echo "<br>";

// echo PHP_FLOAT_MAX;
// echo "<br>";
// echo PHP_FLOAT_MIN;
// echo "<br>";
// echo PHP_FLOAT_DIG;
// echo "<br>";
// echo PHP_FLOAT_EPSILON;
// echo "<br>";

// echo is_float( $b );
// echo "<br>";
// echo "<br>";
// echo is_numeric( $c );

//echo "<hr>";
echo"<h1>Casting</h1>";

// $a = (string)"Natoy Cruz";
// $b = (string) 124;
// $c = (string) 04.27;
// $d = (string) true;
// $e = (string) null;
// $f = (string) fopen("php_practice.php","r");

// $a = (int)"Natoy Cruz";
// $b = (int) -5;
// $c = (int) 3.14;
// $d = (int) true;
// $e = (int) null;
// $f = (int) fopen("php_practice.php","r");

// $a = (float)"Natoy Cruz";
// $b = (float) -5;
// $c = (float) 3.14;
// $d = (float) true;
// $e = (float) null;
// $f = (float) fopen("php_practice.php","r");

// $a = (bool)"Natoy Cruz";
// $b = (bool) -5;
// $c = (bool) 3.14;
// $d = (bool) true;
// $e = (bool) null;
// $f = (bool) fopen("php_practice.php","r");

// $a = (array)"Natoy Cruz";
// $b = (array) -5;
// $c = (array) 3.14;
// $d = (array) true;
// $e = (array) null;
// $f = (array) fopen("php_practice.php","r");

// $a = (unset)"Natoy Cruz";
// $b = (unset) -5;
// $c = (unset) 3.14;
// $d = (unset) true;
// $e = (unset) null;
// $f = (unset) fopen("php_practice.php","r");

// $a ="Natoy Cruz";
// $b = -5;
// $c = 3.14;
// $d = true;
// $e = null;
// $f = fopen("php_practice.php","r");

// //unset($a);

// var_dump($a);
// echo "<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);
// echo "<br>";
// var_dump($d);
// echo "<br>";
// var_dump($e);
// echo "<br>";
// var_dump($f);

// echo pi();
// echo "<br>";
// echo min(5, 1, 2);
// echo "<br>";
// echo max(5,1, 2);
// echo "<br>";
// echo abs(-10);
// echo "<br>";
// echo sqrt(225);
// echo "<br>";
// echo round(3.45);
// echo "<br>";
// echo rand(1, 10);

// echo "<hr>";

// echo "<h1>CONSTANTS</h1>"; //Constant 

// $x = 10;
// define("GREETING", [1,2,3,4]);

// // echo $x;
// // echo "<br>";
// // var_dump(GREETING);

// const _GREETING2 = "Hello People!";

// echo _GREETING2;

// function test() {
//     echo _GREETING2;
// }
// test();

// echo $x;
// unset($x);

// echo "<hr>";
// echo "<h1>ARITHMETIC</h1>";
// // ADDITION +

// echo 10 + 20 + 30 + 40 + 50;

// echo "<br>";
// // SUBTRACTION - 

// echo "<br>";
// echo 10 - 6 - 2 - 1 - .5;

// //add $ subtract
// echo 10+20-30+10+50;

// echo "<br>";
// // MULTIPLICATION *
// echo 10 * 8 * 7;

// echo "<br>";
// // DIVISION
// echo 1000/100/10;

// //Divide $ Multiply
// echo "<br>";
// echo 10 / 5 * 2;

// //Add Division || Add Multi
// echo "<br>";
// echo 50 + 10 / 2 ;
// //Division and Multiplication before Add and Subtract

// echo "<br>";
// // EXPONENTIAL **
// echo 5 ** 2;

// echo "<br>";
// // MODULUS %
// echo 5 % 3;

// echo "<hr>";
// echo "<h1>ASSIGNMENT</h1>";

// $x = 10; // equal
// // $x += $x; //($x = $x + $x)Add Equal
// // $x -= 10; //($x = $x - 10)Subtract Equal
// // $x /= 10; //($x = $x / 10)Divide Equal
// // $x *= 10; //($x = $x * 10)Multiply Equal

// echo "<hr>";
// echo "<h1>COMPARISON</h1>";

//  //Equal to == if similar value
//  var_dump(10 == 9);
//  echo "<br>";

//  //Identical === not similar value and data type
//  var_dump(10 === "10");
//  echo "<br>";

//  //!= not equal or <>
// var_dump(10 <> 10);
//  echo "<br>";

//  //!== not Identical - not similar value and data type
// var_dump(10 !== 10);
//  echo "<br>";

//  //< Less than - Checks if first is less than the second value
// var_dump(0 < 10);
// echo "<br>";

//  //> Greater than - check if first value is higher
//  var_dump(12 > 10);
//  echo "<br>";

//  //<= Less than or equal to -Checks if the first value is equal or less than the second
//  var_dump(12 <= 10);
//  echo "<br>";
 
//  //> Greater than or equal to - Check if first If Higher or equal than second
//  var_dump(12 >= 10);
//   echo "<br>";
 
//  //<=> Spaceship
//  var_dump(12 <=> 10);
//   echo "<br>";

echo "<hr>";
echo "<h1>INCREEMENT AND DECREEMENT</h1>";

$x = 10; //Pre-increement
echo ++$x;
echo "<br>";

$y = 10; //Post-Increement
echo $y++;







?>
</body>
</html>