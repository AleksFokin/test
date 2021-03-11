<?php 
require 'database/QueryBuilder.php';
$db = new QueryBuilder;

$id = $_GET['id'];




$db->delTask($id);

header('Location: /'); exit;


?>