<?php if (!isset($errorMsg)) { $errorMsg = "400 Bad Request"; $errorReason = "Error website wasn't initialized!"; }?>
<html>
<head>
    <title><?php echo $errorMsg ?></title>
    <link rel="stylesheet" href="<?php echo __DIR__ ?>/scss/core.css">
</head>
<body>
<div class="center"><p><?php echo $errorMsg ?></p></div>
</body>
</html>