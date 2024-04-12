<?php
    include '../../include/connection.php';

    $query = "SELECT * FROM posts";
    $stmt = $pdo->query($query);
?>