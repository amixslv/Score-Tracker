
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>   
        <h2>Datu ievade</h2>
        <form action="index.php" method="post">
        <label>Spēlētāja vārds: </label><br>
        <input type="text" name="vārds"><br>
        <label>Rezultāts 1: </label><br>
        <input type="text" name="rez1"><br>
        <label>Rezultāts 2: </label><br>
        <input type="text" name="rez2"><br>
        <label>Rezultāts 3: </label><br>
        <input type="text" name="rez3"><br><br>
        <input type="submit" value="Izvadīt rezultātu"><br><br>
      <!-- // Ievades forma -->
</body>
</html>
<?php
if (isset($_POST["vārds"]) && isset($_POST["rez1"]) && isset($_POST["rez2"]) && isset($_POST["rez3"])) {
  $name = $_POST["vārds"];
  $score1 = $_POST["rez1"];
  $score2 = $_POST["rez2"];
  $score3 = $_POST["rez3"];
  // Mainīgie
  $ave = ($score1 + $score2 + $score3) / 3;
  // Vidējā vērtība
  $max = max($score1, $score2, $score3);
  // Maksimālā vērtība
  echo "Spēlētājs: " . $name . "<br>";
  echo "Rezultāts 1: " . $score1 . "<br>";
  echo "Rezultāts 2: " . $score2 . "<br>";
  echo "Rezultāts 3: " . $score3 . "<br>";
  echo "Vidējais rezultāts: " . $ave . "<br>";
  echo "Augstākais rezultāts: " . $max . "<br>";
}else{
  echo "Lūdzu ievadiet datus";
}
// Izvades rezultāti
?>
