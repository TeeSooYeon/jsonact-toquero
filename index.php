<?php
	$conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com","admin","root1234","db_1820921") or die(mysqli_error($conn));

	$sql = "SELECT * FROM tbl_viruses";
	$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
	
	while($record = mysqli_fetch_assoc($query)){
		extract($record);
	<?php
		$arr = array('vname'=> $v_name ,'vdesc'=> $v_desc,'vcure'=> $v_cure);
		
		
		$obj = json_encode($arr);
	
	?>
		$disp = {"virus":$obj};
		print $obj->{'virus'};
	}
	
?>
