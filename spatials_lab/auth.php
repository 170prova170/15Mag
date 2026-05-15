<?php
include 'config.php';

// REGISTRAZIONE
if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];

    $query = "INSERT INTO utenti (username, email, password, nome, cognome) VALUES ('$user', '$email', '$pass', '$nome', '$cognome')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: login.php?msg=success");
    } else {
        echo "Errore: " . mysqli_error($conn);
    }
}

// LOGIN
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM utenti WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_utente'] = $row['id_utente'];
        $_SESSION['username'] = $row['username'];
        
        header("Location: index.php");
    } else {
        header("Location: login.php?error=1");
    }
}

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
}
?>