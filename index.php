<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form name="form" action="login.php" method="POST">
        <h1>LOGIN</h1>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label >User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label >password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>