<?php 

require 'database/QueryBuilder.php';
$db = new QueryBuilder;

$data =[
    'id' => $_GET['id'],
    'title' =>  $_POST['title'],
    'content' => $_POST['content']
];

$db->UpdateOne($data, 'notes');




header('Location: /'); exit;





?>