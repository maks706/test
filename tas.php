<?php
$db=mysqli_connect('localhost','root','','firstsproject');
$output="";
if(isset($_POST['submit']) && !empty($_POST['word'])){
	$word=$_POST['word'];
	$query="select * from register where login='$word'";
	$result=mysqli_query($db,$query) or die("sdff");
	if(mysqli_num_rows($result)>0){
		$output="You should check in one some of those fields below.";
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<?php echo $output;?>
		<input type="text" placeholder="text" name="word">
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>