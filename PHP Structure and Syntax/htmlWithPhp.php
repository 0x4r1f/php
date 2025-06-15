 <!-- Example 1: Display User Name Inside HTML -->
<?php 
    $name = "Carlos"; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p>Hello, <?php echo $name; ?>! Glad to see you.</p> <!-- Display User Name Inside HTML -->
</body>
</html>


 <!-- Example 2: Looping with for (One Fruit per <ul> ) -->
<?php
    $fruits = ["Apple", "Banana", "Mango"];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Fruit List</title>
</head>
<body>
    <h2>Fruits (using for loop)</h2>

    <?php for ($i = 0; $i < count($fruits); $i++) { ?>
        <ul><?php echo $fruits[$i]; ?></ul> <!-- One Fruit per <ul> -->
    <?php } ?> <!-- *** if you wanna end with just } .. you have to use <?php ?> ....... it's important ****  -->

</body>
</html>


<!-- Example 3: Looping with foreach -->
<?php
    $fruits = ["Football", "Cricket", "Chess"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fruit List</title>
</head>
<body>
    <h2>Games (using foreach loop)</h2>

    <?php foreach ($fruits as $fruit) { ?> <!-- Looping with foreach -->
        <ul><?php echo $fruit; ?></ul>
    <?php } ?>

</body>
</html>

<!-- Extra Tip (Better Practice) -->
<!-- Instead of using many <ul> , it’s common to keep one <ul> and use <li> inside it: -->

<ul>
    <?php foreach ($fruits as $fruit) { ?>
        <li><?php echo $fruit; ?></li>
    <?php } ?>
</ul>

<!-- Extra Tip (Better Practice) -->



<!-- 📌 Summary -->


<!-- 
Concept                             Explanation
---------------------------------------------------------
<?php ?>                            Used to write PHP inside HTML
----------------------------------------------------------------------------------
echo                                Used to print values
----------------------------------------------------------------------------------
for / foreach                       Loops to show multiple items
----------------------------------------------------------------------------------
Mixing                              You can mix as much PHP and HTML as needed
----------------------------------------------------------------------------------
 -->


