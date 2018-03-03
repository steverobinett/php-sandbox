<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/softColors.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sandbox</title>
</head>
<body>
  <h2>Sandbox</h2>

<?php

// Note that this is a relative path
require('php/MenuItem.php');
//Class example

$m = new MenuItem('Steve Burger', 'A bit greasy, but ...', 5.25);
// echo 'In the menu item '.$m->itemName.'<br/>';
// echo 'In the menu item '.$m->itemDescr.'<br/>';
// echo 'In the menu item '.$m->itemPrice.'<br/>';

echo 'In the menu item '.$m->getName().'<br/>';
echo 'In the menu item '.$m->getDescr().'<br/>';
echo 'In the menu item '.$m->getPrice().'<br/>';

 ?>

  </table>

</body>
</html>
