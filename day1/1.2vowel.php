<!DOCTYPE html>
<html>
<head>
    <title>vowel or consonet</title>
</head>
<body>

<form>
    <div>alphabet:</div>
    <input type="text" name="alpha"/>

  <div><br><input type="submit" value="answer"></div><br>

</form>
<?php
if (isset($_GET['alpha']))
{
  $alpha = $_GET['alpha'];


switch ($alpha) {
  case "a":
    echo "its VOWEL A";
    break;
  case "e":
    echo "its VOWEL E";
    break;
  case "i":
    echo "its VOWEL I";
    break;
  case "o":
      echo "its VOWEL O";
      break;
  case "u":
        echo "its VOWEL U";
        break;
  default:
    echo "ITS CONSONANT";
}
}
?>
</body>
</html>
