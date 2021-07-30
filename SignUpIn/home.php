<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <style type="text/css">
    a{
    color: white !important;
    margin-top: -200px !important;
    }
    h1{
    color: white;
    margin-top: 200px;
    text-align: center;
    text-transform: uppercase;
    }
    </style>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <a class="float-right" href="logout.php">LOG OUT</a>
        <h1>Welcome <?php echo $_SESSION['username'];?> </h1>
    </div>

</body>
</html>
