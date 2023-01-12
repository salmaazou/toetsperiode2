<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        
    } else {
        echo "Er is een interne server-error, neem contact op met de beheerder";
    }

} catch(PDOException $e) {
    echo $e->getMessage();
}


 
$sql = "INSERT INTO DureAuto (Id
                            ,Merk
                            ,Model
                            ,Topsnelheid
                            ,Prijs)
        VALUES              (NULL
                            ,:merk
                            ,:model
                            ,:topsnelheid
                            ,:prijs);";

$statement = $pdo->prepare($sql);

$statement->bindValue(':merk', $_POST['merk'], PDO::PARAM_STR);
$statement->bindValue(':model', $_POST['model'], PDO::PARAM_STR);
$statement->bindValue(':topsnelheid', $_POST['topsnelheid'], PDO::PARAM_STR);
$statement->bindValue(':prijs', $_POST['prijs'], PDO::PARAM_STR);


$result = $statement->execute();

if ($result) {
    echo "Er is een nieuw record gemaakt in de database.";
    header('Refresh:2; url=read.php');
} else {
    echo "Er is geen nieuw record gemaakt.";
    header('Refresh:2; url=read.php');
}
 