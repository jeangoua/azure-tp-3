<?php 

$db = new PDO(
    'mysql:host=bdd-mysql.mysql.database.azure.com;dbname=Bikes;charset=utf8',
    'jgoua@bdd-mysql',
    'P@ssword24330'
);

$recipesStatement = $db->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

foreach ($recipes as $recipe) {
    echo $recipe;
}
<<<<<<< HEAD
=======

>>>>>>> e08cf5e639a5704814e23202a36caffbdf9c35a0

    echo "BIENVENUE\n";
    echo "C'est une page php";
?>