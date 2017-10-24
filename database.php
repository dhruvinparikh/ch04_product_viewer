<?php
    /*$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'mgs_user';
    $password = 'pa55word';*/

    $dsn = 'mysql:host=##SQLHostName;dbname=##SQLDatabaseName##';
    $username = '##SQLUsername##';
    $password = '##SQLPassword##';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>