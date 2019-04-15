<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab No. 2 - Cookies: Eat</title>
</head>
<body>
<?php

    echo '<h1>Three cookies:</h1>';
    if (isset($_COOKIE["username"])){
        echo 'The first cookie\'s value is '.$_COOKIE["username"].'<br>';
    } // end if
    if (isset($_COOKIE["firstname"])){
        echo 'The second cookie\'s value is '.$_COOKIE["firstname"].'<br>';
    } // end if
    if (isset($_COOKIE["username"])){
        echo 'The last cookie\'s value is '.$_COOKIE["lastname"].'<br>';
    } // end if

    echo '<h1>Array cookie:</h1>';
    if (isset($_COOKIE["cookie"])){
        foreach ($_COOKIE["cookie"] as $key=>$val) {
            echo $key.' is '.$val."<br>\n";
        } // end foreach
    } // end if

?>

<h1>Quick Link to Destroy Cookies</h1>
    <ul>
        <li><a href="cookie_monster.php" title="destroy the cookies">cookie_monster.php</a></li>
    </ul>

</body>
</html>

