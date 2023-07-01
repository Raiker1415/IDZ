<?php

//    echo($_POST['email']);

//    echo($_POST['password']);

include('db_connect.php');

$query = "SELECT * FROM users WHERE 1";

//$email = strval($_POST['email']);
//$password = strval($_POST['password']);

try {

    $statement = $pdo->prepare($query);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if($result){

        foreach($result as $row){
            echo ('<tr>');
            echo ('<th>' . $row['username'] . '</th>');
            echo ('<th>' . $row['password'] . '</th>');
            echo ('<th>' . $row['email'] . '</th>');
            echo ('<th><input type=button value="edit" class="' . $row['email'] . ' " onclick=Edit(this)></th>');
            if($row['email'] != "admin@gmail.com")
                echo ('<th><input type=button value="x" class="' . $row['email'] . ' " onclick=Delete(this)></th>');
            echo ('</tr>');
        }

    } else {
        header("Location: error.php");
    }

} catch (PDOException $error) {
    die("Помилка при виконанні запиту: " . $error->getMessage());
}

?>