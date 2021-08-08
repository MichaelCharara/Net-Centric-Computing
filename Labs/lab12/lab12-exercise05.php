<?php

/*
   $content holds a 2D array with keys being menu names and values being an array
   with a subtitle, and content
*/
/* This is your given array */
$content = array(
   "Home ." => array("Home Page", "This page is the home page"),
   "Page2 ." => array("The second page", "second page content here"),
   "Page3 ." => array("The third page", "third page content here"),
   "Page4 ." => array("The fourth page", "Fourth page content here")
);


$justContent = array_values($content);

/* For priting content of given array, Index[0] is for "Home Page","the second page" etc whereas Index[1] is for their data i.e "This Page is the home page" for "Home page". for priting output, you can use isset() function which will check the variable is NULL or not by priting output*/
if (isset($_GET['page'])) {
   echo $justContent[$_GET['page'] - 1][1];
}

/* This is used fot active class */
$pageCount = 1;
if (isset($_GET['page'])) {
   foreach ($content as $key => $elements) {
      echo "<li ";
      if ($pageCount == $_GET['page'])
         echo "class='nav-link active'";
      else
         echo "";

      echo "><a href='?page=$pageCount'>$key</a></li>";
      $pageCount++;
   }
}

?>
<html lang="en">

<head>
   <!-- using bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <!-- Priting data Pages name i.e Home page,second page etc on title section. as I have discuss earlier, Index[0] of $justContent will Print Pages name, and Index[1] will print their data. -->
   <title>
      <?php
      if (isset($_GET['page'])) {
         echo $justContent[$_GET['page'] - 1][0];
      }
      ?>
   </title>
</head>

<body>

   <header>
      <h1>Demonstrating $_GET usage</h1>
   </header>

   <ul class="nav nav-pills">

      <?php

      /* I have addtionally add One more section which will print same output. this is starting of page( ie lab12-exercise05.php) when user clicks on anu url, They will see pages data additionally they have two options of url which will generate smae output  */
      $pageCount = 1;
      foreach ($content as $key => $elements) {
         echo "<li><a href='?page=$pageCount'>$key</a></li>";
         $pageCount++;
      }

      ?>
   </ul>

</body>

</html>