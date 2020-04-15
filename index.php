<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Corporate Services</title>
    <body>
        <div id="main" class="content">
            <p>Username:<input type="text"></input></p>
            <p>Password:<input type="password"></input></p>
        </div>
        <div class="footer">
            <?php
                $IP = $_SERVER["REMOTE_ADDR"];
                $host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
            ?>
            <p class="ipinfo">Client connection from: <?php echo $IP; ?></p>
        </div>
    </body>
</html>
