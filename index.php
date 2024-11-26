
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
      body {
            background-color: rgba(0, 0, 0, 0.8);
            display: flexbox;
            margin: 10px;          

          }
          section{
            border: 1px;
            border-radius: 2ex;
            max-width: 200px;
            background-color: rgba(0, 200, 0, 0.8);
            margin: 20px;
            text-align: center;
        }
        .sub{
            border-radius: 3ex;
            background-color: rgba(200, 30, 0);
            margin: 20;
        }
   </style>
</head>
<body>   
    <section>
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
      <input Class="sub" type="submit" value="Izvadīt rezultātu"><br><br>
    </section>
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

  echo "<section>";
  echo "Spēlētājs: <br>" . $name . "<br>";
  echo "Rezultāts 1: <br>" . $score1 . "<br>";
  echo "Rezultāts 2: <br>".  $score2 . "<br>";
  echo "Rezultāts 3: <br>" . $score3 . "<br>";
  echo "Vidējais rezultāts: <br>" . $ave . "<br>";
  echo "Augstākais rezultāts: <br>" . $max . "<br>";
  echo "</section>";
}else{
  echo "<section>";
  echo "Lūdzu ievadiet datus";
  echo "</section>";
}
// Izvadīt rezultātus

?>
