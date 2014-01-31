<?php
	include_once "db.php";
	session_start();
	$email = $_SESSION['email'];
	$photos = mysql_query("SELECT * FROM photos WHERE user_id = (SELECT id FROM users WHERE email = '$email')");
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
	  <p class="navbar-text navbar-right">Signed in as <a class="navbar-link"><?php echo $email; ?></a> - <a class="navbar-link" href="logout.php">Log out</a></p>
        <div class="page-header">
          <h1>Please sign in</h1>
        </div>
        <p class="lead">Please choose an image from the below collection.</p>
        <p>Images below are arranged in random including our images. Pick your picture to sign in.</p>
		
			  <div class="row">
<?php
	while($pic = mysql_fetch_array($photos)) {
?>
  <div class="col-xs-6 col-md-3" style="width: 150px; height: 130px;">
    <a href="<?php echo 'sstep.php?id='.$pic['id']; ?>" class="thumbnail">
      <img src="<?php echo 'photos/'.$pic['filename']; ?>" alt="...">
    </a>
  </div>
 <?php } ?>
</div>
		
		
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">&copy; 2014 CheckPass</p>
      </div>
    </div>
  </body>
</html>
