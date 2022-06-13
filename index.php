<?php $homeLoc = "./"; $isDocked = true; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="scss/core.css">
    <link rel="stylesheet" href="scss/blurpage.css">
    <title></title>
    <style>
        .flex-parent {
            display: flex;
            justify-content: left;
            align-items: center;
            overflow-x: scroll;
        }

        .box {
            margin: 0 20px 0;
        }
        .box img{
            width: 25vh;
        }
        h3{
            margin-left: 20px;
        }
    </style>
    <noscript>
        <style>
            /**
			* Reinstate scrolling for non-JS clients
			*/
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>
</head>
<body>
    <?php require_once"partial/navigation.partial.php"; ?>
    <?php if (!$_SESSION["logged"]){ // Logged out. Sign up/in page ?>
    <header class="bg-image">
        <showup>
    </header>
    <main class="content">
        <img src="./img/hobo-transparent.png" class="fixed-logo"><br>
        <section class="center">
            <button class="button" onclick="location.href='./login';">Log in</button>
            <button class="button" onclick="location.href='./subscription';">Maak een account</button>
        </section>
    </main>
    <?php } else { // Logged in page ?>
        <?php require_once "partial/home.php" ?>
    <?php } ?>
    <script src="js/navigation.js"></script>
</body>
</html>