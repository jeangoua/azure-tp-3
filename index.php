<?php 
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
    echo $e->getmessage();
}

?>