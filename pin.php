<html>
<head><title>PIN Generator</title></head>

<body>
<h1>PIN Number Generator</h1>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

  include './diceware.class.php';
  $length = (empty($_POST['length'])) ? 4 : $_POST['length'];
  $count = (empty($_POST['count'])) ? 1 : $_POST['count'];
  $dw = new Diceware();
?>
<ul>
<?php
  for($i=0; $i<$count; $i++) {
    echo "<ul>".implode("",$dw->get_number($length))."</ul>";
  }
?>
</ul>

<form action="index.php" method="post">
<p>Length: <input type="number" name="length" value="<?php echo $length;?>" /></p>
<p>Number: <input type="number" name="count" value="<?php echo $count;?>" /></p>
<p><input type="submit" value="Generate" /></p>
</form>
<div>
<p>
<a href="index.php">Passphrase</a> | <a href="pin.php">PIN</a>
</p>
</div>
</body>
</html>
