<?php
require_once 'inc/header.php';
require_once "inc/functions.php";

try {
    $db = openDb();
    $sql = "select * from item";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    print json_encode($results);
    } catch (PDOExpection $pdoex) {
        returnError($pdoex);
    }