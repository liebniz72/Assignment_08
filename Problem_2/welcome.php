<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
		echo "<h1>Welcome, " . substr($email, 0, strpos($email, '@')) . "!</h1>";
	} else {
		echo "<h1>Welcome!</h1>";
	}
	?>
</body>
</html>
