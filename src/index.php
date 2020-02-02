<?php

try {
    $user = 'user';
    $pass = 'test';
    $dbh = new PDO('mysql:host=mysqldb:3306', $user, $pass);

    foreach($dbh->query('show databases') as $row) {
        echo '<xmp>';
        print_r($row);
        echo '</xmp>';
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

phpinfo();