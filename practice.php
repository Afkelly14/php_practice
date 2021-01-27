//Insert the missing part of the code below to output "Hello World".
<?php
echo "Hello world";
?>

//Write the correct opening tag and close tag for PHP scripts.
<?php 
echo "This is PHP";
?>

//Statements in PHP have to end with a special character
<?php
echo "Hello World";
?>

//Create a variable named txt and assign the value "Hello".
<?php
$txt = "Hello";
?>

//Create one variable named x, and one variable named y, 
//then use the echo statement to output the sum of x and y.
<?php
$x = 5;
$y = 7;
echo $x + $y;
?>


//Get the length of the string "Hello World!".
<?php
echo strlen("Hello World!");
?>


//Reverse the string "Hello World!".
<?php
echo strrev("Hello World!");
?>

//Replace the word "World" with the word "Dolly".
<?php
$oldtxt = "Hello World";
$newtxt = str_replace("World", "Dolly", $oldtxt);
?>

//Multiply 10 with 5, and output the result.
<?php
echo 10 * 5;
?>

//Divide 10 by 2, and output the result.
<?php
echo 10 / 2;
?>

//Use the correct comparison operator to check if $a is equal to $b.
<?php
var_dump($a == $b);
?>

//Use the correct comparison operator to check if $a is NOT equal to $b.
<?php
var_dump($a != $b);
?>

//Output "Hello World" if $a is greater than $b.
<?php
$a = 50;
$b = 10;
if ($a > $b) {
    echo "Hello world";
}
?>


//Output "Hello World" if $a is NOT equal to $b.
<?php
$a = 50;
$b = 20;
if ($a != $b) {
    echo "Hello World!";
}
?>


//Output "Yes" if $a is equal to $b, otherwise output "No".
<?php
$a = 20;
$b = 15;
if ($a == $b) {
    echo "Yes";
} else {
    echo "No";
}
?>

//Output "1" if $a is equal to $b, 
//print "2" if $a is greater than $b, otherwise output "3".
<?php
$a = 5;
$b = 2;
if ($a == $b) {
    echo "1";
} elseif ($a > $b) {
    echo "2";
} else {
    echo "3";
}
?>

//Create a switch statement that will output "Hello" if $color is "red", 
//and "welcome" if $color is "green".
<?php
$color = "green";
switch ($color) {
    case "red":
        echo "Hello";
    break;
    case "green":
        echo "Welcome";
    break;
    default:
        echo "Neither";
}
?>

//Loops

//Output $i as long as $i is less than 6

<?php
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
?>

//Output $i as long as $i is less than 6
<?php 
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <6);
?>

//Create a loop that runs from 0 to 9

<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
?>

//loop through the items in the $color array

<?php
$colors = array("red", "green", "blue", "yellow");
foreach($colors as $x) {
    echo $x;
}
?>

//create a function named myFunction

<?php
function myFunction(){
    echo "Hello World";
}

myFunction();
?>


//Inside a function with two parameters, print the first parameter
<?php
function myFunction($fname, $lname) {
    echo $fname;
}
?>

//return the second value
<?php
function myFunction($fname, $lname) {
    return $lname;
}
?>

//use the correct function to output the number of items in an array
<?php
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
?>

//Output the second item in the $fruits array
<?php
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[1];
?>