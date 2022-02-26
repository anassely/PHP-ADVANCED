<!DOCTYPE html>
<html>
<body>

<?php

$student  = array(
    "voornaam"    => "ao",
    "achternaam"  => "jack",
    "klas"        => "9A",
    "Leeftijd"    => 18,
    "Woonplaats"  => "Amstelveen"
  );

  foreach($student as $keys => $value){
    echo"$keys => $value";
    echo"<br>";
}
?>
</body>
</html>