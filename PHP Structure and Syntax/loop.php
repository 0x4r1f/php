<?php 

// ################ 1. for Loop ################

/*
********* Syntax: *********
---------------------------
for (initialization; condition; increment) {
 // code to be executed
}

*/

// Example:
for ($i = 1; $i <= 5; $i++) {
    echo "Student Roll: $i <br>";
}

echo "<br>";

// ################ 2. while Loop ################

/*
********* Syntax: *********
---------------------------
while (condition) {
 // code to be executed
}

*/

// Example:
$day = 1;
while ($day <= 3) {
    echo "Day $day: Waiting for assignment...<br>";
    $day++;
}

echo "<br>";

// ################ 3. do...while Loop ################

/*
********* Syntax: *********
---------------------------
do {
 // code to be executed
} while (condition);

*/

// Real-life Example: Student Grading System:
$attempt = 1;
do {
    echo "Login Attempt $attempt<br>";
    $attempt++;
} while ($attempt <= 3);

echo "<br>";

// ################ 4. foreach Loop ################

/*
********* Syntax: *********
---------------------------
foreach ($array as $value) {
 // code using $value
}

//Or with key-value:
foreach ($array as $key => $value) {
 // code using $key and $value
}

*/

// Example: Grade Letter to Remarks
$students = [
    "Rahim" => 85,
    "Karim" => 72,
    "Nusrat" => 91
];
foreach ($students as $name => $mark) {
    echo "$name got $mark marks.<br>";
}


echo "<br>";

// ################ Control Statements in Loops ################

// break – exits the loop

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo $i . "<br>";
}
// Output: 1 2 3 4
echo "<br>";

// ################ continue – skips current iteration ################

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo $i . "<br>";
}
// Output: 1 2 4 5

echo "<br>";

/*
Summary Table : 
for => Known number of repetitions => Controlled counter 
while => Runs while condition is true => Condition first 
do...while => Runs at least once, then checks condition => Condition after first run 
foreach => Iterating arrays or objects  => Automatically 

*/


/*
Conclusion : 
Loops are essential for:

Generating lists
Calculating summaries
Performing actions repeatedly
Processing user input or database records
*/

?>