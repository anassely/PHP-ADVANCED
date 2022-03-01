<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anass</title>
</head>
<body>

<center>
 <form name="invoer" action="advanced-2.php" method="post">
    <option>color-text</option>
    <select name="color-text" id="color-text">
    <?php $color = array ("Brown", "Blue", "Green", "Black", "Pink", "Red");
    foreach($color as $color){
        echo "<option value = $color> $color</option>"; } 
 ?>


 </select>
 <option>background-color</option>
 <select name="background-color" id="background-color">
     <?php $color = array(" Green", "Red", "Brown", "Black", "Blue", "Pink"); 
     foreach($color as $background-color){
         echo "<option value = $background-color>$background-color</option>";
     }
     ?>
 </select>  
    <div>
    <option>table-padding (px)</option>
  <input type="text" name="padding">
    </div>
   </div>
    <div> <input type="submit" name="submit" value="verstuur">
         </div>

    <div>
   <option>rechthoek (px)</option>
  <input type="text" name="zkname">
   </div>
 <form>
</center>
</body>
</html>