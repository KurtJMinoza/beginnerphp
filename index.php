<?php
  function calculator() {
    $result = " ";
    if(isset($_POST["calculate"])) {
      $num1 = $_POST["value1"];
      $num2 = $_POST["value2"];
      $operation = $_POST["operators"];

      switch($operation) {
        case "addition":
          return $num1 + $num2;
        case "subtraction":
          return $num1 - $num2;
        case "multiplication":
          return $num1 * $num2;
        case "divide":
          return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
        default:
          return "Invalid operation";
      }
      return "";
   }
 }

 $result = calculator();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>PHP Simple Calculator</h1>
  <form action="" method="post">
    <input type="text" name="value1" placeholder="number 1">
    <input type="text" name="value2" placeholder="number 2">

    <select name="operators">
      <option value="addition">add</option>
      <option value="subtraction">subtract</option>
      <option value="multiplication">mult</option>
      <option value="divide">divide</option>
    </select>
    <input type="submit" name="calculate">
    <span><?php echo $result; ?></span>
  </form>
  
</body>
</html>