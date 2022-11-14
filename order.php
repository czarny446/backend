<!doctype html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Podsumowanie zamówienia</title>
</head>
<body>
 <?php
  $paczki = $_POST['paczki'];
  $grzebienie = $_POST['grzebienie'];
  $suma = 2 * $paczki + 4.50 * $grzebienie;
 
  echo<<<END
   <h2>Podsumowanie zamówienia</h2>;
   <table border="1" cellpadding="10" cellspacing="0">
   <tr>
    <td>Pączek (2 PLN/szt)</td> <td>$paczki</td>
   </tr>
  <tr>
    <td>Grzebień (4.50 PLN/szt)</td> <td>$grzebienie</td>
   </tr>
   <tr>
    <td>SUMA (PLN)</td> <td>$suma</td>
   </tr>
   </table>
   <br>
   <a href="index.php">Powrót do strony</a>
  
  END;
 ?>
</body>
</html>
