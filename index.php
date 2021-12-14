<?php 
echo "BIENVENUE\n";
echo "\nC'est une page php";
echo "\n3";

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
            
            $req = $conn->mysql_query("SELECT * FROM Ebike");
            while($data = mysql_fetch_assoc($req)){
                // on affiche les informations de l'enregistrement en cours
                echo '<b>'.$data['id'].' '.$data['name'].'</b> ('.$data['price'].')';
                }
            var_dump($result);
// var_dump($recipes);


    
?>