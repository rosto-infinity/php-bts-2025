<?php
 include  'layouts/header.php';
?>
  <h1> Les Variable en PHP</h1>

 

  
  <?php
  $age=25;
  echo is_int($age); // true
  echo '<br>';
  echo is_float($age); // false
  echo '<br>';
  echo is_string($age); // false
  $nom = 'lulu' ;
echo '<b>Bonjour</b>';
echo '|Bonjour';
  echo "<p>Bonjour, je m'appelle $nom et j'ai $age ans.</p>";
  echo '<p>Bonjour, je m\'appelle ' . $nom . ' et j\'ai ' . $age . ' ans.</p>';

echo isset($nom);
empty($nom);
  ?>

<?php
 include 'layouts/footer.php';
?>