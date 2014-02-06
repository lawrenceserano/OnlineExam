<?php
	include 'connect.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = sha1($_POST['pass']);
	$query = mysql_query("INSERT INTO examinee(fname,lname ,email,password) VALUES 
		('$fname','$lname','$uname','$pass')");
	if($query){
		echo "<script>alert('You have your account!!!');window.location.href='reg.php'</script>";
	}else{
		echo "error";
	}
?>