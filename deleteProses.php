<?php
if (isset($_GET['id'])) {
    include 'connection.php';
    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM pasien WHERE id = $id");
    if ($query) {
        header("location:dataDecrypt.php");
        die();
    } else {
        echo 'Message: Data Berhasil Dihapus';
    }
}
