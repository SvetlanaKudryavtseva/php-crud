<?php


try{
    // 1. Connect to database
    $pdo = new PDO( 'mysql:host=127.0.0.1:3308;dbname=test',
                    'root',
                    '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    // die(json_encode(array('outcome' => true)));

    // 2. Prepare a statement
    $sql = 'SELECT * FROM tasks';
    $statement = $pdo->prepare($sql);

    // 3. Выполнить запрос - вернет true // false
    $result = $statement->execute();
    var_dump($result);
    // 4. Получить все запросы. В каком виде? В виде ассоциативного массива.
    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <title>PHP-CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Tasks</h1>
                <a href="create.php" class="btn btn-success">Add Task</a>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tasks as $task):?>
                            <tr>
                                <td><?= $task['id'];?></td>
                                <td><?= $task['title'];?></td>
                                <td><?= $task['content'];?></td>
                                <td>
                                    <a href="show.html" class="btn btn-general">Show</a>
                                    <a href="edit.html" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>

</html>