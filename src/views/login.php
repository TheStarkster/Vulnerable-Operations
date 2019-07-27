<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './masters/headers.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Login</title>
</head>
<body>
  <form action="../controllers/login.php" method="post">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <center>
        <h5 class="card-title">Enter Your Credentials</h5>
        <input type="text" name="username" placeholder="Username" class="form-control">
        <input type="password" name="password" placeholder="*******" class="form-control">
        <input type="submit" name="login" value="Login" class="btn btn-primary">
      </center>
    </div>
  </div>
  </form>
</body>
</html>