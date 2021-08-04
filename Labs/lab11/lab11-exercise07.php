<html>

<head>
  <title>Exercise 8-7</title>
</head>

<body>
  <h1>Simple Calendar using Loops</h1>
  <?php
  // Calcualte month
  $month = date('m');
  ?>

  <table border="1">
    <tr><?php echo $month; ?></tr>
    <tr>
      <th>Sun</th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>

    </tr>
    <?php

    //Calculating number of days in the current month
    $maxDays = date('t');

    //Calculating starting day
    $dayOne = date("w", mktime(0, 0, 0, date("n"), 1, date("Y"))) - 1;

    $day = 0;

    while ($day <= ($maxDays + $dayOne)) {
      //when we need a new row go ahead.
      //Checking for completion of week
      if (($day + 1) % 7 == 0) {
        //Printing current day
        echo "<td>" . ($day - $dayOne) . "</td>";

        //Moving to next row
        echo "</tr><tr>";
      } else {

        //Skipping first few days till starting day of month
        if ($day <= $dayOne) {
          echo "<td>&nbsp;</td>";
        } else {
          //Printing days
          echo "<td>" . ($day - $dayOne) . "</td>";
        }
      }

      //Incrementing days
      $day = $day + 1;
    }
    ?>

  </table>
</body>

</html>