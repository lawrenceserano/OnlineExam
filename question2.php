<?php 
	include 'connect.php';
	$id = $_GET['id'];
	$sql = mysql_query("select * from questionare where id = '$id'");
	$result = mysql_fetch_assoc($sql);

	echo json_encode(
		array(
			'question'=>$result['question'],
			'choiceA'=>$result['choiceA'],
			'choiceB'=>$result['choiceB'],
			'choiceC'=>$result['choiceC'],
			'choiceD'=>$result['choiceD']
			)
		);
 ?>