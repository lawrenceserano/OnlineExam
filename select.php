<?php
	include 'connect.php';
	$uname = $_POST['uname'];
	$pass = sha1($_POST['pass']);
	$query = mysql_query("SELECT * from examinee Where email = '$uname' and password = '$pass' ");
	$result = mysql_num_rows($query);
	if($result > 0){
		echo "<script>alert('You may now start your examination...');window.location.href='question.php'</script>";
	}else{
		echo "<script>alert('Invalid username or password..');window.location.href='reg.php'</script>";
	}

?>
