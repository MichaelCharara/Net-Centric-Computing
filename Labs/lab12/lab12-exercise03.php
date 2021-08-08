<html lang="en">

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Exercise 12-3 Sorting Arrays</title>

      <!-- Latest compiled and minified Bootstrap Core CSS -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style type="text/css">
            table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
            }

            td,
            th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
            }

            tr:nth-child(even) {
                  background-color: #dddddd;
            }
      </style>
</head>

<body>
      <header>
      </header>

      <div class="jumbotron container" style="margin-bottom:0; background: lightgray;">
            <h1 class="text-center" style="font-size: 80px;">Division Leaderboard</h1>
            <h4 style="margin-left: 15%;">Sports League</p>
      </div>

      <div class="container" style="margin-bottom:0; margin-top: 0;">
            <table>
                  <th>Name</th>
                  <th>Score</th>
                  <?php

                  $players = array(
                        "Jhan Belig" => 189,
                        "Yemenev Baltroy" => 367,
                        "Ilroy Malvi" => 210,
                        "James John" => 121,
                        "Walton Ling" => 368,
                        "Mitch Moore" => 382,
                        "Urslaw Whig" => 422,
                        "Leo M. Toalde" => 192,
                        "Richard Bee" => 281,
                        "Travis Wise" => 182
                  );
                  echo "<pre>";
                  //print_r($players);
                  asort($players);
                  $players = array_reverse($players);
                  foreach ($players as $key => $value) {
                        echo "<tr>";
                        echo "<td>" . ++$key . "</td>\n<td>" . $value . "</td>";
                        echo "</tr>";
                  }


                  ?>
            </table>
      </div><br>
</body>

</html>