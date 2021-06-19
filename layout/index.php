<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="UTS PBWL Sistem Informasi">
    <meta name="author" content="Muhammad Zulpan Batubara">
    <meta name="keywords" content="UTS, PBWL, Sistem, Informasi, Photo, Album">
    <title>Web Photo Album</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/header web.png" alt="[IMG]">
        </header>
        
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>
            </ul>
        </nav>
        
        <section>

        </section>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
                }

            ?>
        <footer>
            Copyright &copy; Muhammad Zulpan Batubara 2021
        </footer>
    </main>
    
</body>
</html>