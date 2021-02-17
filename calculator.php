<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Body Size Calculator</title>
  </head>
  <body>

    <?php

      $name = $_GET["name"];
      $bodysize_father = $_GET["bodysize_father"];
      $bodysize_mother = $_GET["bodysize_mother"];
      $gender = $_GET["gender"];
      $midsize = ($bodysize_father + $bodysize_mother)/2;
      $boy_size = $midsize+6;
      $girl_size = $midsize-6;


      if ($name && $bodysize_father && $bodysize_mother) {

        if ($gender == "male") {
          echo "You will be around $boy_size cm tall.";
        }
        elseif ($gender == "female") {
          echo "You will be around $girl_size cm tall.";
        }
        elseif ($gender == "other") {
          echo "You will be between around $girl_size cm and around $boy_size cm tall.";
        }

      } else {
        if (strlen($name) < 3) {
          echo "<br>";
          echo "less than 3 characters in a name aren't a name";
        }
        if (!$bodysize_father || $bodysize_mother) {
          echo "<br>";
          echo "is anything wrong with the bodysizes?";
        }
      }

    ?>

  </body>
</html>
