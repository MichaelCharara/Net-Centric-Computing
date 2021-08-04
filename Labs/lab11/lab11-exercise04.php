<html>

<head>
   <title>Exercise 8-4</title>
</head>

<body>
   <h1>Age calculator</h1>
   <?php
   $anniversary = mktime(0, 0, 0, 06, 27, 2021); //Jun 27, 2021 00:00:00
   $today = time(); // current time in seconds since 1970.
   $secondsSince = $today - $anniversary;
   $daysSince = $secondsSince / 86400;
   $monthsSince = $daysSince / 30.436875;
   $yearsSince = $monthsSince / 12;
   ?>

   <?php
   echo "<p>Time elapsed since " . date("M d, Y", $anniversary) . ":</p>";
   ?>

   <ul>
      <li><?php echo $secondsSince; ?> seconds, or </li>
      <li><?php echo $daysSince ?> days, or </li>
      <li><?php echo $monthsSince ?> months, or </li>
      <li><?php echo $yearsSince ?> years</li>
   </ul>
</body>

</html>