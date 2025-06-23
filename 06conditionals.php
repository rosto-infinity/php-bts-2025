<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours php</title>
</head>
<body>
  <a href="index.php">Cours-php-bts 2025</a> <br> <br>
  
  <h1> Conditionnelles et opérateurs ternaires</h1>

 
  <?php
  // Exemple de conditionnelle simple
  $age = 100; // Vous pouvez changer cette valeur pour tester
$salary = 250000; // Vous pouvez changer cette valeur pour tester
  // age =[18, 65]
     
 if($age >= 18 && $age <= 65) {
     echo "Vous êtes en âge de travailler <br>.";
 } else {
     echo "Vous n'êtes pas en âge de travailler.<br>";
 }

 if ($age >= 18) {
     echo "Vous êtes majeur. <br>";
 } 

 //Ternaire
  $message = ($age >= 18) ?? "Vous êtes majeur." ;

  echo $age < 22 ? ($age < 16 ? 'Too young' : 'Young') : 'Old';
echo $message . "<br>";
 

  // Exemple de conditionnelle avec elseif
  if ($age < 18) {
      echo "Vous êtes mineur.<br>";
  } elseif ($age >= 18 && $age < 65) {
      echo "Vous êtes majeur et en âge de travailler.<br>";
  } else {
      echo "Vous êtes senior.<br>";
  }

  // Exemple de conditionnelle imbriquée
  if ($age < 18) {
      echo "Vous êtes mineur.<br>";
  } else {
      if ($age < 65) {
          echo "Vous êtes majeur et en âge de travailler.<br>";
      } else {
          echo "Vous êtes senior.<br>";
      }
  }


$userRole = 'editor';
 
if ($userRole === 'admin') {
    echo 'You have full access.<br>';
} elseif ($userRole === 'editor') {
    echo 'You can edit content.<br>';
} elseif ($userRole === 'user') {
    echo 'You can view posts and comment.<br>';
} else {
    echo 'Unknown role.<br>';
}







  echo $message . "<br>";
 ?>
</body>
</html>