<?php
include 'includes/parentclass.inc.php';
include 'includes/newclass.inc.php';
include 'includes/area.inc.php';
$oject = new NewClass;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Practicing</title>
  </head>
  <body>
<?php 
$four = array(3, 4, 3, 4);

$three = array('first' => 2, 'second' => 3, 'third' => 6);



$shape = new Shape($four);
echo '$shape has a perimeter of '.$shape->perimeter();



$rectangle = new Rectangle($three);

echo "$rectangle has an perimeter of ".$rectangle->perimeter();



$rectangle = new Rectangle($four);

echo "$rectangle has an area of ".$rectangle->area();



$square = new Square($four);

echo "$square has an area of ".$square->area();



$triangle = new Triangle($three);

echo '$triangle has a perimeter of '.$triangle->perimeter();



echo 'the name of $triangle is "'.$triangle->name.'" and the ('.$triangle->side_count.') sides are : ';



?>
  </body>
</html>
