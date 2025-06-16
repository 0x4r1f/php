<?php 

//############### File Create  ###############
echo "############### File Create  ############### <br>";

$file = 'example.txt';
$content = "This is my first file text content";

// file_put_contents($file,$content);

if(file_put_contents($file,$content)){
    echo "File created successfully";
}else{
    echo "Failed";
}

//############### File Read  ###############
echo "<br><br> ############### File Read  ############### <br>";

$file = 'read.txt';

$content = file_get_contents($file);

echo $content;


//############### Write to a file  ###############
echo "<br><br> ############### Write to a file  ############### <br>";

$file = 'write.txt';

$content = "1. This is my first file text content ";

$writeContent = file_put_contents($file,$content);

$newContent = "2. This is my first file text content .";

$writeContent = file_put_contents($file,$newContent,FILE_APPEND);

echo $content;//It's not work.. for file read. 

echo "<br><br>";

echo nl2br(file_get_contents('write.txt')); // nl2br means <br>

echo "<br><br>";


// Others way to read file . 

$file = 'write.txt';

if (file_exists($file)) {
    $content = file_get_contents($file);
    echo nl2br($content); 
} else {
    echo "File not found!";
}

?>