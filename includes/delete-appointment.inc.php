<?php
    include_once 'dbh.inc.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM appointment WHERE id_pendaftaran = $id;";

    mysqli_query($conn, $sql);
    header("location: ../admin/monster-html/appointment-page.php");
    exit();
?>