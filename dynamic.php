<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic website</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
  echo $_POST["opt"];
  switch($_POST["opt"]){
 case "home":
  include "home.php";
   break;
 case "content":
  include "content.php";
  break;  
 case "footer":
    include "footer.php";
    break;
default:
echo "ok";
}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="som">Select something:</label>
    <select  name="opt" id="som">
  <option value="home">Home</option>
  <option value="content">Content</option>
  <option value="footer">Footer</option>
 <input type="submit" name="submit"/>
</select>
</form>
</body>
</html>