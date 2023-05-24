<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM wallet WHERE id = $id";
        $conn->query($sql);
    }
    header('location:admin.php');
    exit;
?>