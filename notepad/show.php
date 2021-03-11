<?php
require 'database/QueryBuilder.php';

$id = $_GET['id'];

$db = new QueryBuilder;


$task = $db->getOne($id, 'notes');







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Show notes</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?= $task['Title'];?></h1>
            <p>
                <?= $task['content'];?>
            </p>
            <a href="/">Go Back</a>
        </div>
    </div>
</div>
</div>
</body>
</html>