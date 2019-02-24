<?php
	include 'lib/User.php';
	$user = new User();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$comment = $_POST['comment'];
		$sendmessage = $user->sendmessage($name, $email, $website, $comment);
	}

?>