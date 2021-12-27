<?php include 'server.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <h1>Welcome User</h1>
        <a href="login.php?logout='1'" style="color: red;">logout</a>

        <button><a href='./payment.php'>Make Payment</a></button>
    </div>
    <style>
        #container {
            width: 400px;
            margin: 0 auto;
        }
    </style>
</body>

</html>