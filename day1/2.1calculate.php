<!DOCTYPE html>
<html>
<head>
    <title>calculate</title>
</head>
<body>

<form>
    <div>Number 1:</div>
    <input type="number" name="num1"/>
    <div>Number 2:</div>
    <input type="number" name="num2"/>

  <div><br><input type="submit" value="calculate"></div><br>

</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $add = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

    echo $num1 . " + " . $num2 . " = " . $add."<br>";
    echo $num1 . " - " . $num2 . " = " . $sub."<br>";
    echo $num1 . " * " . $num2 . " = " . $mul."<br>";
    echo $num1 . " / " . $num2 . " = " . $div."<br>";
}
?>

</body>
</html>
