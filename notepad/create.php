<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Create notes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create notes</h1>
                <br>
                <form action="store.php" method="post">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="title" placeholder="title">
                </div>
</br>
                <div class="form-group mb-3">
                    <textarea name="content" class="form-control" placeholder='content'></textarea>
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>