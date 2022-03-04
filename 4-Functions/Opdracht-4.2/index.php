<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
function rekenUit($nummer1, $nummer2, $nummer3){
    $antwoord = $nummer1 + $nummer2 + $nummer3;
    return $antwoord;
}

echo "als ik de getallen 7,1 en 3 bij elkaar optel, is de uitkomst" . $answer1 = rekenUit(7, 1, 3). "<br>";
echo "als ik de getallen 3,1 en 5 bij elkaar optel, is de uitkomst" . $answer2 = rekenUit(3, 1, 5). "<br>";
echo "als ik de getallen 24,41 en 88 bij elkaar optel, is de uitkomst" . $answer3 = rekenUit(24, 41, 88). "<br>";

?>
</body>