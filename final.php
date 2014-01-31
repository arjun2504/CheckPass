<?php
	include_once "db.php";
	session_start();
	$email = $_SESSION['email'];
	$pid1 = $_SESSION['pid1'];
	if(isset($_POST['point'])) {
		$points = $_POST['point'];
	}
	$photoidx = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE email ='$email' AND photoid1 = $pid1"));
	$count = 0;
	foreach($points as $i) {
		$count++;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Sign in verification : Step 1 of 2</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>
    <div id="wrap">
      <div class="container">
        <div class="page-header">
		<?php
			if($count == 3 && $photoidx['p1'] == $points[0] && $photoidx['p2'] == $points[1] && $photoidx['p3'] == $points[2] && $pid1 == $photoidx['photoid1']) {
		?>
          <h1>You have successfully logged in.</h1>
        </div>
        <p class="lead">Login tests passed.</p>
        <p>Beginning transaction...</p>
		
		<?php } else { ?>
		<h1>Login Failed!</h1>
        </div>
        <p class="lead"><span class="glyphicon glyphicon-thumbs-down"></span> Sorry!</p>
        <p>Transaction failed.</p>
		<?php } ?>
		
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">&copy; 2014 CheckPass</p>
      </div>
    </div>
  </body>
</html>
