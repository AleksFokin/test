<?php 

$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost; dbname=test', 'test', 'test');
$statement = $pdo->prepare("DELETE FROM notes WHERE id=:id");
$statement->bindParam(":id", $id);
$statement->execute();
//$task = $statement->fetch(PDO::FETCH_ASSOC);

header('Location: /'); exit;


?>