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
    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/header web.png" alt="[IMG]">
        </header>
        
        <nav>
            <ul>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=category_tampil">Category</a>
                </li>
                <li>
                    <a href="index.php?page=post_tampil">Post</a>
                </li>
                <li>
                    <a href="index.php?page=photos_tampil">Photos</a>
                </li>
                <li>
                    <a href="index.php?page=album_tampil">Album</a>
                </li>
                <li>
                    <a href="login_logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        
        <section>

        </section>
            <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_dashboard.php";
                }

            ?>
        <footer>
            Copyright &copy; 2021
        </footer>
    </main>
    
</body>
</html>