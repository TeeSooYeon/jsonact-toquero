<?php
$json = file_get_contents('http://json-activity-toquero.herokuapp.com/rss.php');
$data = json_decode($json,true);
$list = $data['virus'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Json Activity by Hans</title>
	</head>
<?php
foreach($list as $info){
?>
		<h3>Virus Name:</h3><?php echo $info['v_name'];?>
		<ul>
			<li><h4> Description:</h4> <?php echo $info['v_desc']; ?> </li>
			<li><h4> Cure:</h4> <?php echo $info['v_cure']; ?> </li>
		</ul>
	</body>
</html>
<?php
}
?>
