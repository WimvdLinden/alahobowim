<?php $homeLoc = "./"; $isDocked = true;
$continueLoc = isset($_GET["redirects"]) ? base64_decode($_GET["redirects"]) : "./";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="scss/core.css">
    <link rel="stylesheet" href="scss/settings.css">
    <title>Hobo: acount setings</title>
</head>
<body>
<?php require_once "./partial/navigation.partial.php"; if (!$_SESSION["logged"]) header("Location: ../login");?>
<main class="content">
    <div class="text"> <h2>Kies je profiel</h2> </div>
    <div class="flex-container">
        <div class="container">
            <img src="https://tenor.com/view/wongrande-gif-24458192.gif" alt="Avatar" class="image" style="width:100%">
            <a href="<?php echo $continueLoc ?>?profile=0"><div class="middle">
                    <div class="text">Kies</div>
                </div></a>
        </div>
        <div class="container">
            <img src="https://tenor.com/view/wongrande-gif-24458192.gif" alt="Avatar" class="image" style="width:100%">
            <a href="<?php echo $continueLoc ?>?profile=1"><div class="middle">
                    <div class="text">Kies</div>
                </div></a>
        </div>
        <div class="container">
            <img src="https://tenor.com/view/wongrande-gif-24458192.gif" alt="Avatar" class="image" style="width:100%">
            <a href="<?php echo $continueLoc ?>?profile=2"><div class="middle">
                <div class="text">Kies</div>
            </div></a>
        </div>
        <div class="container" style="background-color: #2a2a2a">
            <div class="image" style="padding-top: 20px; color: white;"><i class="far fa-10x fa-plus-circle"></i></div>
            <a href="https://youtu.be/ds0lC7k21pg" target="_blank"><div class="middle">
                <div class="text">Profiel Aanmaken</div>
            </div></a>
        </div>
    </div>
</main>
<script src="js/navigation.js"></script>
</body>
</html>