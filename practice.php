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
