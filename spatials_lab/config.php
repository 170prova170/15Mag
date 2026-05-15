<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "spatials_lab_db"
);

if (!$conn) {
    die("Errore: " . mysqli_connect_error());
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>