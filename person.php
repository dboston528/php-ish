<?php
include 'includes/person.inc.php'
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>untitled</title>
  </head>
  <body>
<?php
    $person1 = new Person();
    $person1-> setName('DeAndre', 'Brown', '30');
    echo $person1->name;
    echo $person1->eyecolor;
    echo $person1->age;
    echo $person1
?>
  </body>
</html>
