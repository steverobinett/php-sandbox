<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cafe Steve</title>
</head>
<body>
  <h2>Sandbox</h2>
  <div class='banner'>

    <?php
      $dateString = date('D M d h:i:s');
      echo "Welcome to the Cafe!</br>";
      $menuFile = fopen("data/specials.txt", "r");

      // priming read
      $menu = fgetcsv($menuFile);
    ?>
  </div>
  <?php
    echo "<p>The date/time is $dateString </p>";
  ?>

  <table id="menu">
    <tr>
      <th>Day</th><th>Special</th><th>Price</th>
    </tr>
   <?php
      while(!feof($menuFile))     {
        echo '<tr>';
        for($i=0; $i<sizeof($menu); $i++) {
            if ($i == 2){
                echo '<td>'.'$ '.money_format('%.2n', $menu[$i]).'</td>';
            }
            else{
                echo '<td>'.$menu[$i].'</td>';
            }
        }
        echo '</tr>';

        // Get next rec and load in array
        $menu = fgetcsv($menuFile);

     }

     echo date_default_timezone_get();
   ?>

  </table>
  <div class="foot">
    <p>Steve's Cafe is happy to offer free wi-fi </p>

  </div>
</body>
</html>
