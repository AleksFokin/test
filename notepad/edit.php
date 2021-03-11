<?php 
$pdo = new PDO('mysql:host=localhost; dbname=test', 'test', 'test');


$statement = $pdo->prepare("SELECT * FROM notes WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Edit notes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Edit notes</h1>
            <form action="update.php?id=<?= $task['id'];?>" method="post">

                <div class="form-group mb-3">
                    <input type="text" name="title" class="form-control" value="<?= $task['Title'];?>">
                </div>

                <div class="form-group mb-3">
                    <textarea name="content" class="form-control"><?= $task['content'];?></textarea>
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>

</body>
</html>