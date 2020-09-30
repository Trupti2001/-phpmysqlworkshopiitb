<!DOCTYPE html>
<html>
<head>
    <title>tringle</title>
</head>
<body>


<form>
    <div>SIDE 1:</div>
    <input type="number" name="s1"/>
    <div>SIDE 2:</div>
    <input type="number" name="s2"/>
    <div>SIDE 3:</div>
    <input type="number" name="s3"/>

  <div><br><input type="submit" value="cheack"></div><br>

</form>

<?php
if (isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3']))
  {

    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];

   if ($s1==$s2 && $s2==$s3)

    {
      echo "the tringle is equilateral";
    }
    else if ($s1==$s2 || $s1==$s3 || $s2==$s3)
    {
      echo "the triangle is iscoceles";
    }

    else if ($s1*$s1==($s2*$s2+$s3*$s3) || $s2*$s2==($s1*$s1+$s3*$s3) || $s3*$s3==($s2*$s2+$s1*$s1))
    {
      echo "the triangle is right angle";
    }
    else if ($s1!=$s2 && $s2!=$s3 && $s3!=$s1)
    {
      echo "the triangle is scalene";
    }

}
?>
</body>
</html>
