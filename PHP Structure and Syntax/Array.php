<?php 

//############### Indexed array ###############
echo "############### Indexed array ############### <br>";

$fruits = ["Apple","Banana","Orange","Cherry"];

print_r($fruits); //print_r for print array .

echo "<br><br>";

echo $fruits[1]; // print using index number .

echo "<br><br>";

foreach($fruits as $anyName) {
    echo $anyName."<br>";
}


//############### Associative array  ###############
echo "<br><br> ############### Associative array  ############### <br>";

$personalInfo = [
    "name" => "Sobuj",
    "age" => 30,
    "address" => "Dhaka"
];

echo $personalInfo["address"];

echo "<br><br>";

foreach($personalInfo as $key => $value){
    echo "$key: $value <br>";
}

echo "<br><br>";

foreach($personalInfo as $key => $value){
    echo ": $value <br>"; //only value print 
}


//############### Multidimensional Array  ###############
echo "<br><br> ############### Multidimensional Array  ############### <br>";

$students = [
    ["name" => "Ashique","email" => ["a1@gmail.com","a2@gmail.com"],"phone" => "1235789"],
    ["name" => "Farhan","email" => "f@gmail.com","phone" => "09876543"],
    ["name" => "Jabed","email" => "j@gmail.com","phone" => "447890833"]
];

echo $students[1] ["email"];

echo "<br><br>"; 

echo "Name: " . $students[1]["name"] . ", Email: " . $students[1]["email"];

echo "<br><br>";

echo $students[0] ["email"][1];

//############### Another Way Array  ###############
echo "<br><br> ############### Another Way Array  ############### <br>";

$anotherWay = array("one", "two", "three");
print_r($anotherWay);

//############### JSON ###############
echo "<br><br> ############### JSON ############### <br>";

$personalInfo = [
    "name" => "Sobuj",
    "age" => 30,
    "address" => "Dhaka"
];

$jsonData = json_encode($personalInfo);

echo $jsonData;

echo "<br><br>";

$json = '{"name":"Sobuj","age":30,"address":"Dhaka"}';

$arrayConvert = json_decode($json);

print_r($arrayConvert); // echo cann't print array .

echo "<br><br>";

?>