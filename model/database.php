<?php
    $dsn = 'mysql:host=sql.njit.edu;dbname=dg94';
    $username = 'dg94';
    $password = 'Qugvi42q';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
