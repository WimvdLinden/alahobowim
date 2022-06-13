<?php $homeLoc = "./"; $isDocked = true; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="./scss/core.css">
    <link rel="stylesheet" href="./scss/pricing.css">
    <title>Hobo: acount setings</title>
</head>
<body>
<?php require_once"./partial/navigation.partial.php"; if (!$_SESSION["logged"]) header("Location: ../login"); ?>
<main class="content">

    <style>
        /* CSS */
        :root {
            --primary: #141414;
            --light: #f3f3f3;
            --dark: #686868;
        }

        html,
        body {
            width: 100vw;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: var(--primary);
            color: var(--light);
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            line-height: 1.4;
        }

        img {
            max-width: 100%;
        }

        h1 {
            padding-top: 60px;
        }

        .wrapper {
            margin: 0;
            padding: 0;
        }

        /* HEADER */
        header {
            padding: 20px 20px 0 20px;
            position: fixed;
            top: 0;
            display: grid;
            grid-gap: 5px;
            grid-template-columns: 1fr 4fr 1fr;
            grid-template-areas: "nt mn mn sb . . . ";
            background-color: var(--primary);
            width: 100%;
            margin-bottom: 0px;
        }

        .hoboLogo {
            grid-area: nt;
            object-fit: cover;
            width: 100px;
            max-height: 100%;

            padding-left: 30px;
            padding-top: 0px;
        }

        .hoboLogo img {
            height: 35px;
        }

        #logo {
            color: #008000;
            margin: 0;
            padding: 0;
        }

        .main-nav {
            grid-area: mn;
            padding: 0 30px 0 20px;
        }

        .main-nav a {
            color: var(--light);
            text-decoration: none;
            margin: 5px;
        }

        .main-nav a:hover {
            color: var(--dark);
        }

        .sub-nav {
            grid-area: sb;
            padding: 0 40px 0 40px;
        }

        .sub-nav a {
            color: var(--light);
            text-decoration: none;
            margin: 5px;
        }

        .sub-nav a:hover {
            color: var(--dark);
        }

        /* MAIN CONTIANER */
        .main-container {
            padding: 50px;
        }

        .box {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(6, minmax(100px, 1fr));
        }

        .box a {
            transition: transform 0.3s;
        }

        .box a:hover {
            transition: transform 0.3s;
            -ms-transform: scale(1.4);
            -webkit-transform: scale(1.4);
            transform: scale(1.4);
        }

        .box img {
            border-radius: 2px;
        }

        /* LINKS */
        .link {
            padding: 50px;
        }

        .sub-links ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(4, 1fr);
        }

        .sub-links a {
            color: var(--dark);
            text-decoration: none;
        }

        .sub-links a:hover {
            color: var(--dark);
            text-decoration: underline;
        }

        .logos a {
            padding: 10px;
        }

        .logo {
            color: var(--dark);
        }

        /* FOOTER */
        footer {
            padding: 20px;
            text-align: center;
            color: var(--dark);
            margin: 10px;
        }

        /* MEDIA QUERIES */

        @media (max-width: 900px) {
            header {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(4, minmax(100px, 1fr));
            }
        }

        @media (max-width: 700px) {
            header {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(3, minmax(100px, 1fr));
            }

            .sub-links ul {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 500px) {
            .wrapper {
                font-size: 15px;
            }

            header {
                margin: 0;
                padding: 20px 0 0 0;
                position: static;
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                grid-template-areas:
      "nt"
      "mn"
      "sb";
                text-align: center;
            }

            .hoboLogo {
                max-width: 100%;
                margin: auto;
                padding-right: 20px;
            }

            .main-nav {
                display: grid;
                grid-gap: 0px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
            }

            h1 {
                text-align: center;
                font-size: 18px;
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
            }

            .box a:hover {
                transition: transform 0.3s;
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1.2);
            }

            .logos {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(2, 1fr);
                text-align: center;
            }

            .sub-links ul {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(1, 1fr);
                text-align: center;
                font-size: 15px;
            }
        }

    </style>



    <div class="wrapper">

        <!-- HEADER -->
        <header>
            <div class="hoboLogo">
                <a id="logo" href="index.php"><img  src="img/hobo-transparent.png" alt="Logo Image"></a>
            </div>

        </header>
        <!-- END dit is van wimOF HEADER -->

        <!-- MAIN CONTAINER -->
        <section class="main-container" >
            <div class="location" id="home">
                <h1 id="home">Mijn favorieten</h1>
                <div class="box">
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p1.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p2.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p3.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p4.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p5.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p6.PNG?raw=true" alt=""></a>

                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p7.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p8.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p9.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p10.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p11.PNG?raw=true" alt=""></a>
                    <a href=""><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/p12.PNG?raw=true" alt=""></a>
                </div>
            </div>


            <!-- LIwvlNKS -->
            <section class="link">
                <div class="logos">
                    <a href="https://www.facebook.com/NetflixNederland"><i class="fab fa-facebook-square fa-2x logo"></i></a>
                    <a href="https://www.instagram.com/NetflixNL/"><i class="fab fa-instagram fa-2x logo"></i></a>
                    <a href="https://twitter.com/NetflixNL"><i class="fab fa-twitter fa-2x logo"></i></a>
                    <a href="https://www.youtube.com/user/netflixbenelux
"><i class="fab fa-youtube fa-2x logo"></i></a>
                </div>
            </section>
        </section>
    </div>

