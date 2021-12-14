<?php 
echo "BIENVENUE\n";
echo "\nC'est une page php";
echo "\n1";

$db = new PDO(
    'mysql:host=bdd-mysql.mysql.database.azure.com;dbname=Bikes;charset=utf8',
    'jgoua@bdd-mysql',
    'P@ssword24330'
);

            $servername = 'localbdd-mysql.mysql.database.azure.comhost';
            $username = 'jgoua@bdd-mysql';
            $password = 'P@ssword24330';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            } else {
                echo 'Connexion réussie';
            }
            

// var_dump($recipes);


    
?>