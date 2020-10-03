
<html>
<head>
    <title>calculate</title>
</head>
<body>
  <?php
  require ("h.php");
  
   ?>

<form>
    <div>Name of student:</div>
    <input type="text" name="name"/>
    <div>Marks in Each Subject:</div>
    <div>Subject 1:</div>
    <input type="number" name="m1"/>
    <div>Subject 2:</div>
    <input type="number" name="m2"/>
    <div>Subject 3:</div>
    <input type="number" name="m3"/>
    <div>Subject 4:</div>
    <input type="number" name="m4"/>
    <div>Subject 5:</div>
    <input type="number" name="m5"/>



  <div><br><input type="submit" value="calculate"></div><br>

</form>

<?php

if (isset($_GET['m1']) && isset($_GET['m2'])&& isset($_GET['m3'])&& isset($_GET['m4'])&& isset($_GET['m5']) && isset($_GET['name'])) {

    $m1 = $_GET['m1'];
    $m2 = $_GET['m2'];
    $m3 = $_GET['m3'];
    $m4 = $_GET['m4'];
    $m5 = $_GET['m5'];
    $name = $_GET['name'];

    $add = $m1+$m2+$m3+$m4+$m5;
    $marks = 500;
    $per = $add/5;

    echo "student name is; ".$name."<br>";
    echo "Total marks obtained: " . $add."<br>";
    echo  " Total marks " . $marks."<br>";
    echo " Percentage " . $per."<br>";
    $result = mysqli_query($conn,"INSERT INTO class1(NAME, SUB1, SUB2, SUB3, SUB4, SUB5, TOTALO, TOTALM,PERCENT)
        VALUES ('$name','$m1','$m2','$m3','$m4','$m5','$add','$mark','$per')");





}



$conn->close();
?>


</body>
</html>
