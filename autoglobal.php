<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOGLOBAL</title>
    <style>
     <?php include "styles.css"; ?>
     </style>
     
</head>
<body>
    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 echo $_SERVER["SCRIPT_NAME"];
}

?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label>Get pathname</label>
  <button type="submit">Submit</button>

</form>
</body>
</html>