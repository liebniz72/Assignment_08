<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Check if both fields are filled
	if (empty($email) || empty($password)) {
		echo "Please enter your email and password.";
	} else {
		// Check if login credentials are valid
		if ($email === "example@example.com" && $password === "password123") {
			// Login successful, redirect to welcome page
			header("Location: welcome.php?email=" . $email);
			exit();
		} else {
			// Invalid login credentials, display error message
			echo "Invalid email or password.";
		}
	}
}
?>
