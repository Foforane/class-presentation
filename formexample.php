<?php
echo $_SERVER["REQUEST_METHOD"];
#This for get Method
if ($_SERVER["REQUEST_METHOD"] == "GET"){
$name = $_GET["gName"];

echo "<h1>HI ".$name." this is what shows when you get data from a form and this is where you process your data</h1>";
echo "<h2>you called a get Method.</h2>";
}else if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $postName = $_POST["pName"] ;
  $contact = $_POST["pContact"];
echo "<h1>HI ".$postName." this is what shows when you post data from a form and this is where you process your data</h1>";
echo "<h2>you called a post Method.</h2>";
 if (validateData($postName,$contact)){
     echo "<h2>Your data is valid</h2>";
 }else{
    echo "<h2>Your data is not valid</h2>";
 }

    }

function validateData($Name,$Contact){
    $valid = true;
    if(empty($Name) || empty($Contact)){
        $valid = false;
    }
    if(strlen($Contact) != 10){$valid = false;} 
    return $valid; 


}
?>