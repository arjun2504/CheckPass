<?php
	include_once "db.php";
	session_start();
	$email = $_SESSION['email'];
	$id = $_GET['id'];
	$pid1 = mysql_fetch_array(mysql_query("SELECT photoid1 FROM users WHERE email = '$email'"));
	//$photos = mysql_query("SELECT * FROM photos WHERE user_id = (SELECT id FROM users WHERE email = '$email' AND photoid1 = $picid)");
	
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

    <title>Sign in verification : Step 2 of 2</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<script src="js/jquery-1.11.0.min.js"></script>
<script>
function SubmitIfReady() {
    if ($('.hvr:checked').length == 3) { // specify the number you want
        $('#lastf').submit();
    }
}
$("input[type='checkbox']").on("mousedown", function () {
    $(this).css('background','red');
}).on("mouseup", function () {
    $(this).css('background','white');
});
</script>
  </head>

  <body>
  <?php
  	if($pid1[0] == $id) {
	$_SESSION['pid1'] = $pid1[0];
  ?>
    <div id="wrap">
      <div class="container">
	   <p class="navbar-text navbar-right">Signed in as <a class="navbar-link"><?php echo $email; ?></a> - <a class="navbar-link" href="logout.php">Log out</a></p>
        <div class="page-header">
          <h1>Please sign in</h1>
        </div>
        <p class="lead">Choose appropriate points from the picture.</p>
        <p>From the image below, choose 3 points.</p>
		<?php $picture = mysql_fetch_array(mysql_query("SELECT filename FROM photos WHERE id = $pid1[0]")); ?>
		
		
		<div class="contain">
		<div class="bgimg" style="width: 646px; height: 655px; background: url('<?php echo 'photos/'.$picture['filename']; ?>')">
		<div class="boxes">
		<form action="final.php" method="post" id="lastf">
		<?php
			$count = 0;
			while($count <= 890) {
			$count++;
		?>
		<input type="checkbox" class="hvr" name="point[]" value="<?php echo $count; ?>" style="margin-top: -10px" onclick="SubmitIfReady();">
		<?php } ?>
		</form>
		</div>
		</div>	
	<br>
		</div>
		
		
      </div>
    </div>
	<?php } else { ?>
	<div class="page-header">
          <h1>You are not a real person. Redirecting...</h1>
		  <?php
			session_destroy();
			header("Location: index.php");
			exit();
		?>
    </div>
<?php } ?>
    <div id="footer">
      <div class="container">
        <p class="text-muted">&copy; 2014 CheckPass</p>
      </div>
    </div>
  </body>
</html>
