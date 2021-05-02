<?php

    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE). ' cookies saved<br>';
    } else {
        echo 'There are no cookies saved<br>';
    }
       if(isset($_COOKIE['auth'])){
        echo 'User '. $_COOKIE['auth'] . ' is set<br>';
        
    } else {
        echo 'User is not set<br>';
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>