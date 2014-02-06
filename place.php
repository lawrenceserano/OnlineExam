<?php 
include 'connect.php';
include 'examDAO.php';
session_start();
$answer = $_SESSION['answer'];
@$id = $_SESSION['id'];
$result = examDAO::computeScore($answer);
$ans = $result * 10;
 ?>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<head>
		<title>Result</title>
	</head>
	<body id = "body">
		<div class = "well container" id = "back-end">
			<center><h1>Result</h1></center>
			<div class = "page-header"></div>

			<div id = "score"><h2>Score: <?=$ans?></h2></div>

			<div class = "page-header" id = "head"></div>

			<div><a href="logout.php"><button class = "btn btn-danger" id = "logout">Logout</button></a></div>
		</div>

	</body>
</html>