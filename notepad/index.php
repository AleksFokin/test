<?php

require 'database/QueryBuilder.php';
$db = new QueryBuilder;

$tasks = $db->getAll('notes');
//var_dump($tasks);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Notepad</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12"><h1>All Tasks</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                <?php  foreach($tasks as $task ):    ?>
            
                
                        <tr>
                            
                                <td><?= $task['id']; ?></td>
                                <td><?= $task['Title']; ?></td>
                                
                                <td>
                                    <a href="show.php?id=<?=$task['id'];?>">   <div class="btn btn-info">show</div></a>
                                    <a href="edit.php?id=<?=$task['id'];?>">  <div class="btn btn-warning">edit</div></a>
                                    <a onclick="return confirm('are you sure?');" href="delete.php?id=<?=$task['id'];?>">  <div class="btn btn-danger">delete</div></a>
                                </td>


                        </tr>

                    <?php endforeach;    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>