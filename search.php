<?php $homeLoc = "/"; $isDocked = true;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" href="./scss/core.css">
	<link rel="stylesheet" href="./scss/pricing.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Hobo: Subscription Plans</title>
	<style>
		body{
			background-color: #1d1e1f;
			color: white;
		}
		main a{
            color: white;
			text-decoration: none;
		}
        main a:hover{
            color: #95ff7d;
        }
        input[type="search"]{
            margin-top: 25px;
            height: 45px;
            width: 100%;
            font-size: larger;
            text-align: center;
        }

        input[type="search"]::placeholder{
            font-size: larger;
            text-align: center;
        }
	</style>
</head>
<body>
<?php require_once"./partial/navigation.partial.php"; ?>
<main class="content">
	<form class="form" method="post" name="search">
		<input type="search" name="search-data" placeholder=" Search" id="srch">
	</form><br>
    <div id="test"></div>
    <output id="output">
    
    </output>
</main>
<script>
    $("#srch").keyup(function () {
        let formdata = {"search-data": $(this).val()};
        $.ajax({type: "POST",url: "./search-data.php",data: formdata, dataType: "text", success: function(result){
                $("#output").html(result);
            }});
    })
</script>
<script src="../js/navigation.js"></script>
</body>
</html>