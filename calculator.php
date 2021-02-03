<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Body Size Calculator</title>
  </head>
  <body>

    <?php
echo "eingetragener Vorname: ". $_GET['vorname'];
?>

<form action="formular-m-anzeige.php" method="get" >

<p>Ihr Vorname:
<input type="text" name="vorname">
</p>

<p>
<input type="submit" value="absenden">
</p>

</form>

  </body>
</html>
