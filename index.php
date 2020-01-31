<?php
$json = file_get_contents('http://json-activity-toquero.herokuapp.com/jsonact-toquero/rss.php');
$data = json_decode($json,true);
$list = $data['virus'];

?>
<!DOCTYPE html>
<html>
<?php
foreach($list as $info){
?>
		<h3>Virus Name:</h3><?php echo $info['v_name'];?>
		<ul>
			<li> Description: <?php echo $info['v_desc']; ?> </li>
			<li> Cure: <?php echo $info['v_cure']; ?> </li>
		</ul>
	</body>
</html>
<?php
}
?>
