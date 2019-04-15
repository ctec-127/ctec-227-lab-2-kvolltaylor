<?php

setcookie("username", "BettyW", time() - 3600);
setcookie("firstname", "Betty", time() - 3600);
setcookie("lastname", "White", time()  -3600);

setcookie("cookie[institution]","Clark", time() -3600);
setcookie("cookie[city]","Vancouver", time() -3600);
setcookie("cookie[state]","WA", time() -3600);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DLab No. 2 - Cookies: Monster</title>
</head>
<body>

<h1>Quick Link to Check for Any Cookies</h1>
    <ul>
        <li><a href="cookie_eat.php" title="check for cookies">cookie_eat.php</a></li>
    </ul>
    
</body>
</html>
