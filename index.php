<?php 
echo "BIENVENUE\n";
echo "\nC'est une page php";
echo "\n2";

            $servername = 'bdd-mysql.mysql.database.azure.com';
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
            
            $result = $conn->query("SELECT * FROM Ebike");
            var_dump($result);
// var_dump($recipes);


    
?>