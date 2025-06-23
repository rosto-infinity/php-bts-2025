<?php
 include 'layouts/header.php';
?>
  
  <h1> Les types de données en PHP</h1>

  <?php
        //Les types de données en PHP
    /*
    ********   1. Types scalaires (simples) ****
    * 
    */
    // a. Entier (int)
    $nbr1 = 12;

    echo "<pre>";
    echo(var_dump($nbr1));
    echo "</pre>";

    //b. -Nombre à virgule flottante (float/double)

    $prix = 19.99;

    echo "<pre>";
    echo(var_dump($prix));
    echo "</pre>";

    // c. Chaîne de caractères (string)

    $name = "Owen";

    echo "<pre>";
    echo(var_dump($name));
    echo "</pre>";

    //d. -Booléen (bool| boolean)
    $disponible = true;  //ou  $disponible =false

    echo "<pre>";
    echo(var_dump($disponible));
    echo "</pre>";

    /*
    ********   1. -Types composés ****
    * 
    */

    //a. -Tableau (array)
    //---  indexé (0,1,2...)
    $colors = ["green", "yellow", "red"];
    echo "<pre>";
    echo(var_dump($colors));
    echo "</pre>";

    $fruits =[
        '🍎', 
        '🍌',
        '🍇', 
        '🍓', 
        '🍍', 
        '🥭', 
        '🍉'  
    ];

    echo "<pre>";
    echo(var_dump($fruits));
    echo "</pre>";

    //-Tableau associatif
    $person =[
      "name" => "Myra",
      "date" => 10,
      "admin" => true
    ];
    echo "<pre>";
    echo(var_dump($person));
    echo "</pre>";
  ?>

<?php
include 'layouts/footer.php';
?>