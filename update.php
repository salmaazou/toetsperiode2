<?php

require('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo =  new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de database";
    } else {
        echo "Interne server-error";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);

    exit();
}


$sql = "SELECT Id
              ,Merk
              ,Model
              ,Topsnelheid
              ,Prijs
        FROM DureAuto
        WHERE Id = :Id";

$statement = $pdo->prepare($sql);


$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);


$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD</title>
</head>
<body>
    <h1>Luxury</h1>
    
    <form action="update.php" method="post">

        <label for="merk">Merk:</label><br>
        <input type="text" name="merk" id="merk" value="<?= $result->Merk; ?>"><br>
        <br>
        <label for="model">Model:</label><br>
        <input type="text" name="model" id="model" value="<?= $result->Model; ?>"><br>
        <br>
        <label for="topsnelheid">Topsnelheid:</label><br>
        <input type="number" name="topsnelheid" id="lastname" value="<?= $result->Topsnelheid; ?>"><br>
        <br>
        <label for="prijs">Prijs:</label><br>
        <input type="text" name="prijs" id="prijs" value="<?= $result->Prijs; ?>"><br>
        <br>
        <input type="submit" value="Verstuur!">        

    </form>
</body>
</html>