<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login Page - Tutorial</title>
  </head>
  <body>
    <div class="container my-5">
        <h2 class="text-muted">Login Tutorial</h2>
        <div class="form-group">
            <form action="backend.php" method="post">
                <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""><br>
                <button class="btn btn-success" name="login">Login!</button>
            </form>
        </div>
    </div>
  </body>
</html>