<?php
echo "my website <br>";

$myName ='anastesia';

var_dump($myName);

$yearsOfexperience = 5;

echo "<br>";

var_dump($yearsOfexperience);

$height =6.1;

echo "<br>";

var_dump ($height);

$isFemale = true;

echo "<br>";

var_dump ($isFemale);

// array
$fullName = array("anastesia", "emenike");
echo "<br>";

var_dump ($fullName);
echo "my first name is emenike and my <br>";

echo "<br>";

// 28/10/2024
// NULL 
$nothing = null;

echo "<br>";

var_dump($nothing);

// constant
define("pi", 3.142);
echo "<br>" ;
var_dump(pi);

// const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);
echo "<br>";

//31/18/2024
//operators
//arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x %  $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment and decrement operators
$x++;

 echo $x;

//  anonymous continuation
//Assignment operators

$a=100;
$b=50;
// addition assignment


if ($a == 100 && $b == 50 ) {
    echo"we are good to go";
}
echo "<br>";
if ($a == 100 || $b == 50 ) {
    echo"we are good to go";
}
echo "<br>";
if ($a == 100 xor $b == 51 ) {
    echo"we are good to go";
}
echo "<br>";
if (!($a==101) ) {
    echo"we are good to go";
}
// 04/11/24
// PHP conditional statements

// There are four notable conditional statements in PHP viz

// if statement 

// if 

// else if statement

// switch statement 

// this is one of the most important statement in PHP  

// Example;

// IF STATEMENT
// _________
// variable declaration\
$my_name = "anastesia";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";


// $present_time 


if($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> Good Morning, $my_name! </h3>";
}
elseif($present_time >= 12.00 && $present_time < 16.00) {
    echo "<h3> Good Afternoon, $my_name!  </h3>";
}
elseif($present_time >= 16.00 && $present_time <= 23.59) {
    echo "<h3> Good Night,  $my_name! </h3>";
}
else {
    echo "<h3> Hello, $my_name! </h3>";

}

// Switch Statements
//__________

// $today = (format: "D");
// echo "Today is: $today <br>";

//  switch ($today) {
// 

/* www.github.com/elvincedik/backend-project.git */

// index 

// function

function greetMe() {
    echo "<br> good afternoon";
    
}

greetMe()
?>