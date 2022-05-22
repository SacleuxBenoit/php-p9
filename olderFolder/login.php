<?php

session_start();

if ($_POST) {
    // le tableau $_POST contient des données

    // vérification de l'existence de la clé 'password' dans le tableau $_POST
    if (isset($_POST['password'])) {
        // la clé 'password' existe

        if ($_POST['password'] == '123') {
            // le mot de passe est correct

            // on déclare que l'utilisateur est authentifié
            $_SESSION['authenticated'] = true;

            // redirection temporaire
            $url = '/private-page.php';
            header("Location: {$url}", 302);
            exit();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login.php" method="post">
        <input type="text" name="password" placeholder="password">
        <button type="submit">OK</button>
    </form>
</body>
</html>