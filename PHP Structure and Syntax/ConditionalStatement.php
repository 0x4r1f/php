<?php 

/*
PHP supports the following conditional statements:

if
if...else
if...elseif...else
switch
*/

// ################ 1. if Statement ################

/*
********* Syntax: *********
---------------------------
if (condition) {
 // Code to execute if condition is true
}
*/

// Example:
$score = 85;
if ($score >= 80) {
 echo "Excellent!";
}
echo "<br>";

// ################ 2. if...else Statement ################

/*
********* Syntax: *********
---------------------------
if (condition) {
 // True block
} else {
 // False block
}
*/

// Example:
$score = 60;
if ($score >= 50) {
 echo "Pass";
} else {
 echo "Fail";
}

echo "<br>";

// ################ 3. if...elseif...else Statement ################

/*
********* Syntax: *********
---------------------------
if (condition1) {
 // Block 1
} elseif (condition2) {
 // Block 2
} else {
 // Block 3
}
*/

// Real-life Example: Student Grading System:
$marks = 72;
if ($marks >= 80) {
 echo "Grade: A+";
} elseif ($marks >= 70) {
 echo "Grade: A";
} elseif ($marks >= 60) {
 echo "Grade: A-";
} elseif ($marks >= 50) {
 echo "Grade: B";
} elseif ($marks >= 40) {
 echo "Grade: C";
} elseif ($marks >= 33) {
 echo "Grade: D";
} else {
 echo "Grade: F (Fail)";
}

echo "<br>";

// ################ 4. switch Statement ################

/*
********* Syntax: *********
---------------------------
switch (variable) {
 case value1:
 // code
 break;
 case value2:
 // code
 break;
 default:
 // code
}
*/

// Example: Grade Letter to Remarks
$marks = 52;
// Step 1: Map marks to grade group
switch (true) {
 case ($marks >= 80):
 echo "Grade: A+";
 break;
 case ($marks >= 70):
 echo "Grade: A";
 break;
 case ($marks >= 60):
 echo "Grade: A-";
 break;
 case ($marks >= 50):
 echo "Grade: B";
 break;
 case ($marks >= 40):
 echo "Grade: C";
 break;
 case ($marks >= 33):
 echo "Grade: D";
 break;
 default:
 echo "Grade: F (Fail)";
}

/*
Using switch for Ranges (like Grades)? Be Careful!
As shown earlier:
    switch (true) {
    case ($marks >= 80):
    echo "Grade: A+";
    break;
    // ...
    }

✅ Yes, it works... BUT:
❌ This is Not the Ideal Use of switch
*/

echo "<br>";

// ################ Best Practice: Use if...elseif...else for RangeBased Logic ################

if ($marks >= 80) {
 echo "Grade: A+";
} elseif ($marks >= 70) {
 echo "Grade: A";
} 

// ################ When to Use switch – Real-Life Use Case ################

// Example: Weather App Based on Day 

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Rainy";
        break;
    case "Tuesday":
        echo "Sunny";
        break;
    case "Wednesday":
        echo "Cloudy";
        break;
    case "Thursday":
        echo "Stormy";
        break;
    case "Friday":
        echo "Windy";
        break;
    default:
        echo "Unknown weather";
}

echo "<br>";


/*
Conclusion : 
Conditional statements are the foundation of decision-making in PHP:

if handles simple checks
if...else gives you a fallback
elseif adds multiple branches
switch makes value comparisons cleaner

These tools let you build real-world applications, like grading systems, authentication checks,
settings toggles, etc.
*/

?>