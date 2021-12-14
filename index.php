<?php 
try
   {
      // On se connecte à MySQL
      $mysqlClient = new PDO('mysql:host=bdd-mysql.mysql.database.azure.com;dbname=bikes;charset=utf8', 'jgoua', 'P@assword24330');
   }
   catch(Exception $e)
   {
      // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
   }

   echo 'Connexion reussie';
   // Si tout va bien, on peut continuer

   // On récupère tout le contenu de la table utilisateur
   $sqlQuery = 'SELECT * FROM bike';
   $userStatement = $mysqlClient->prepare($sqlQuery);
   $userStatement->execute();
   $user = $userStatement->fetchAll();

   // On affiche chaque recette une à une
   foreach ($user as $recipe) {
      echo $recipe['name'];
   }
?>