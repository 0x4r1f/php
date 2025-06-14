<?php 

$a = 20;
$b = 30;

$addition = $a + $b; // 50

$subtraction = $b - $a; // 10

$multiplication = $a * $b; // 600

$division = $b / $a; // 1.5

$modulus = $b % $a; // 10

$exponentiation = $a ** 5; // 3200000
$exponentiation = ($a+$b) ** 2; // 2500

echo $exponentiation;

echo "<br> <br>";

// 1. Arithmetic Operators 

echo 10 + 5; // 15
echo 10 - 5; // 5
echo 10 * 5; // 50
echo 10 / 2; // 5
echo 10 % 3; // 1
echo 2 ** 3; // 8

// 2. Assignment Operators

$x = 10;
$x += 5; // 15
$x -= 3; // 12
$x *= 2; // 24
$x /= 4; // 6
$x %= 4; // 2
echo $x; // 2

// 3. Comparison Operators

$a = 5;
$b = "5";
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a != 4); // true
var_dump($a > 3); // true
var_dump($a <= 3); // false

// 4. Logical Operators

$a = true;
$b = false;
var_dump($a && $b); // false
var_dump($a || $b); // true
var_dump(!$b); // true
var_dump($a xor $b); // true

// 5. String Operators

$x = "Hello";
$y = "World";
echo $x . " " . $y; // Hello World
$greet = "Hi";
$greet .= " there!";
echo $greet; // Hi there!

// 6. Increment / Decrement Operators

$x = 5;
echo ++$x; // 6
echo $x--; // 6 (then becomes 5)
echo $x; // 5

// 7. Array Operators 

$a = ["a" => "red", "b" => "blue"];
$b = ["b" => "blue", "a" => "red"];
$c = ["a" => "red", "b" => "green"];
var_dump($a == $b); // true
var_dump($a === $b); // false (order matters)
var_dump($a != $c); // true
var_dump($a + $c); // merges $a with $c; duplicate keys are ignored


/*
Conclusion : 
PHP offers a rich set of operators for every common programming need:

Perform calculations ( + , * )
Compare values ( == , === )
Combine logic ( && , || )
Manipulate strings ( . )
Modify arrays ( + , == )
And much more!
*/

?>