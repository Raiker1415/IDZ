<?php

//    echo($_POST['email']);

//    echo($_POST['password']);

include('db_connect.php');

$query = "SELECT * FROM users WHERE email = :email AND password = :password";

$email = strval($_POST['email']);
$password = strval($_POST['password']);

try {

    $statement = $pdo->prepare($query);
    $statement->bindValue(':password', $password, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if($result){

        session_start();

        $_SESSION['name'] = $result[0]['username'];
        $_SESSION['password'] = $result[0]['password'];
        $_SESSION['email'] = $result[0]['email'];;

        if($email == 'admin@gmail.com'){
            header("Location: admin_cabinet.php");
        }else{
            header("Location: user_cabinet.php");
        }
        exit;
    } else {
        header("Location: error.php");
    }

} catch (PDOException $error) {
    die("Помилка при виконанні запиту: " . $error->getMessage());
}

?>