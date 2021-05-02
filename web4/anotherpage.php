<?php

    $user = ['name' => 'spaceinvader', 'email' => 'test@test.com',];

    $user = serialize($user);

    setcookie('auth', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['auth']);

    echo $user['name'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Still Logged In</title>
</head>
<body>
    <br>
    You are still logged in...
</body>
</html>