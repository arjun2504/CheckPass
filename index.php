<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" method="post" action="validate1.php">
        <h2 class="form-signin-heading">Sign in</h2>
        <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus><br>
        <button type="submit" class="btn btn-primary" style="float: right">Sign in</button><br>
		<?php
		if(@$_GET['error'] == 1) {
			echo "<center>Invalid email</center>";
		}
	  ?>
      </form>

    </div>
  </body>
</html>
