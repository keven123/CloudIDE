<html>
<head>
	<meta charset="utf-8" />
	<title>Redirecting...</title>
</head>
<body>
<?php
	function failure_notice($str) {
		echo "<div class=\"failure\">" . $str . "</div>";
		echo "<script>setInterval(\"window.location.href='../login.php'\",2000)</script>";
	}
	if (!isset($_REQUEST["username"]) || $_REQUEST["username"]=="") {
		failure_notice("Please Enter Username");
	}
	if (!isset($_REQUEST["password"]) || $_REQUEST["password"]=="") {
		failure_notice("Please Enter Password");
	}
?>
</body>
</html>