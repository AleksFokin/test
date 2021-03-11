<?php 

 


// PDO 

$pdo = new PDO('mysql:host=localhost; dbname=test', 'test', 'test');
$sql = "INSERT INTO notes (title, content) VALUES (:title, :content)";

$statement = $pdo->prepare($sql);


$statement->execute($_POST);

header("Location: /"); exit;
?>