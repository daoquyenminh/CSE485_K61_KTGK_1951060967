<?php

include('config/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM db_donvi where madv = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('Location: admin.php');
    } else {
        echo "Error";
    }
}

?>