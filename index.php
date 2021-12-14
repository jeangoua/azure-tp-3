<?php 

$db = new PDO(
    'mysql:host=bdd-mysql.mysql.database.azure.com;dbname=Bikes;charset=utf8',
    'jgoua@bdd-mysql',
    'P@ssword24330'
);

$recipesStatement = $db->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
var_dump($recipes);
foreach ($recipes as $recipe) {
    echo $recipe;
}

    echo "BIENVENUE\n";
    echo "C'est une page php";
?>