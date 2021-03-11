<?php

class QueryBuilder
{
       public $pdo;

    function __construct() {
        $this->$pdo = new PDO('mysql:host=localhost; dbname=test', 'test', 'test');

    }    
    function getAll($table) {
        
        $sql = "SELECT * FROM $table";
        $statement = $this->$pdo->prepare($sql);
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }

    function getOne($id, $table) {
        $statement = $this->$pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    
    function UpdateOne($data, $table) {
        
        $sql = "UPDATE $table SET title=:title, content=:content WHERE id=:id";
        
        $statement = $this->$pdo->prepare($sql);
        
        $statement->execute($data);

               
    }

    function delTask($id) {
        
        $statement = $this->$pdo->prepare("DELETE FROM notes WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        }



}




?>