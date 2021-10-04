<?php
    echo rtrim('asas,', ',');
    $data = [
        'title' => 'title1',
        'content' => 'asas10'
    ];
    var_dump(array_keys($data));

    echo implode(',', array_keys($data));

"SELECT * FROM tasks";
"INSERT INTO tasks (title, content) VALUES ('t2','c2')";
"UPDATE tasks WHERE id='5' SET title='t5'";
"DELETE FROM tasks WHERE id='5'";
?>