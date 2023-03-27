<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];

		// Validate the form data
		$errors = array();
		if (empty($first_name)) {
			$errors[] = "First name is required";
		}
		if (empty($last_name)) {
			$errors[] = "Last name is required";
		}
		if (empty($email)) {
			$errors[] = "Email address is required";
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Invalid email address format";
		}
		if (empty($password)) {
			$errors[] = "Password is required";
		}
		if ($password != $confirm_password) {
			$errors[] = "Passwords do not match";
		}

		// If there are no errors, display a confirmation message
		if (empty($errors)) {
			echo "Thank you for registering!";
			exit;
		}
	}
?>
