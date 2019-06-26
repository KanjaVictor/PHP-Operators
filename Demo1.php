<?php
/**
 * Created by PhpStorm.
 * User: lenovo E440
 * Date: 6/3/2019
 * Time: 10:36 AM
 */
# PHP Operators
//1.Arithmetic operators :integers and floats ,numeric
#Addition : +
#subtraction : -
#multiplication : *
#Division : /
#Modulus : %
#Exponential : **

$x = 100;
$y = 7;
#addition
$z = $x + $y;
echo $z;
echo "<br>";
#Modulus
$a = $x % $y;
echo $a;
echo "<br>";

//2.Assignment operators
#They are used to write a value to a variable
#this is read as 1 assigned to $s and 12 assigned to d :initial values:its read from right to left
$s = 1;
$d = 12;
#the initial value is 1 so its read as $s + 23 which is supposed to produce the answer 24
$s += 23;# $s = $s + 23 ;
echo $s;
echo "<br>";
#the initial value of $d is 12 ; 12 -12 ans is 0
$d -= 12; #$d = $d -12;
echo $d;
echo "<br>";
#the initial value of $b is 10 ;10 *12 ans is 120
$b = 10;
$b *= 12;#$d =$d * 12:
echo $b;
echo "<br>";
#ans will be 0 since the data stored last in the variable was 0 after the subtraction
$d /= 12;
echo $d;

//3.Comparison operators
$t = 1000000;
$r = 11000000;
//1.(==)equal
//$r == $t;
echo $r == $t;

//2.(===)identical
#returns true if one variable id equal to another variable and they are of the same data types
//checks for same datatypes and the value
$u = 100;#integer
$l =12.12;#float

//$u === $l;
echo "<br>";
var_dump($u === $l);//shows the datatype and whether they are same ; in this case the datatypes are different#false
echo "<br>";
var_dump($u != $l);#true
echo "<br>";
var_dump($u >= $l);#true
echo "<br>";
//4.Increment and decrement Operators
#They are used in conjunction with variables
#++ :Increment
#-- :Decrement

$b =1;
$c =5;
echo ++$b;#Ans is 2 ;value is increased by one :Pre-increment-increments and then results
echo "<br>";
echo $c++;#Ans is 5 ;used in loops:Post-increment-results first then increment
echo "<br>";
echo --$b;
echo "<br>";
echo $b--;
echo "<br>";

//5.Logical Operators
#They are used to combine conditional statements
//1. [and] :$x and $c ;returns true if both are true.
//2. [or] : $x or $c ;returns true if at least one is true.
//3. [xor] : $x xor $c ;returns true if either $x or $c is true but not both
//4. [&&] : $x && $c ;Similar to [and]
//5.[||] : $x || $c ;Similar to [or]#also known as piped operators
//6.[ ! ] : !$x ;True if $x is not true

$x = 100;
$y = 50;
if($x == 100 xor $y == 49){
    echo "Conditions are true";
}
echo "<br>";
if ($x == 100 && $y == 50){
    echo "Conditions are true";
}
echo "<br>";
if($x == 99 or $y ==50){
    echo "One condition is not true a";
}
echo "<br>";
if($x == 99 || $y ==50){
    echo "One condition is not true b";
}
echo "<br>";
if(!$x == 98){
    echo "$x.is not equal to 100";
}

//6.String Operators
#Concatenation
$name = "Php";
$name_two = "Developer";
echo $name.$name_two;
echo "<br>";
#Concatenation assignment
$first_name = "John";
$second_name = "Doe";
echo $first_name.=$second_name; #$first_name =$first_name.$second_name


