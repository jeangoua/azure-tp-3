<?php 
ini_set('error_reporting', 1);
ini_set('display_error', 1);

echo "BIENVENUE\n";
echo "\nC'est une page php";
echo "\n1";

$user = 'jgoua@bdd-mysql';
$password = 'P@assword24330';
try {
    $db = new PDO(
        'mysql:host=bdd-mysql.mysql.database.azure.com;dbname=bikes;charset=utf8',
        $user,
        $password
    );
    
    foreach($db->exec('SELECT * FROM Ebike') as $row) {
        echo $row['name'];
    }
    
} catch(PDOexeption $e) {
    //echo $e->getmessage();
}

?>