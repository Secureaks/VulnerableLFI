<?php
    ini_set('allow_url_fopen', 1);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vulnerable application - LFI/RFI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body>
    <h1>
        Vulnerable application - LFI/RFI
    </h1>
    <div>
        <a href="?page=home.php">Home</a>
        <a href="?page=about.php">About</a>
        <a href="?page=contact.php">Contact</a>
    </div>
    <div style="color: red; font-size: 22px;word-wrap: anywhere; margin: 20px 0; text-align: center;">
        DISCLAIMER: This application is vulnerable to Local File Inclusion (LFI) and Remote File Inclusion (RFI) attacks. Do not use it in a production environment.
    </div>
    <div>
        <?php
            $pageRequested = $_GET['page'] ?? 'home.php';
            $page = file_exists('../includes/' . $pageRequested) ? $pageRequested : 'home.php';
            include('../includes/' . $page);
        ?>
    </div>

    <footer>
        <p>
            &copy; 2024 Secureaks - Vulnerable application - LFI/RFI
        </p>
    </footer>

</body>
</html>