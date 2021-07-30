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
    <title></title>
</head>
<body>
    <div class="container">
        <div class="login_box">
            <div class="row">
                <div class="col-md-6 login_left">
                    <h2>Log In Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">LOG IN</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 login_right">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control text-info" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control text-info" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
