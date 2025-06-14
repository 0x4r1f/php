<?php

echo "Hello PHP! ";

echo "<br>";

echo "Hello br tag test output ";

echo "<br>";

print "Hello print";

echo "<br>";
echo "<br>";

// ############# Echo vs Print in PHP #############

// ********* echo *********

echo "Hello ";
echo "Bangladesh!";

echo "<br>";

// You can also use:

echo "Hello", " echo!";

echo "<br>";

// ********* print *********

print "Hello print!";

echo "<br>";
echo "<br>";
/*
You can’t do:
print "Hello", " World!"; // ❌ This will throw an error

Syntax [ echo "A", "B"; is valid ]  [ print "A", "B"; is invalid ]
*/

// ############# Other Output Methods in PHP #############

// print_r()

$arr = array("Apple", "Banana", "Orange");
print_r($arr);

echo "<br>";

// var_dump()

$x = 42;
var_dump($x);

echo "<br>";

// printf() & sprintf()

$price = 45.99;
printf("Price: %.2f", $price); // Output: Price: 45.99

echo "<br>";

// print_r()

$arr = array("Apple", "Banana", "Orange");
print_r($arr);

echo "<br>";

/* 
✅ Conclusion
Use echo for most cases – it’s simple and fast.
Use print if you need to return a value from the expression.
Use print_r() or var_dump() for debugging.
Use printf() / sprintf() for formatted outputs.
*/
