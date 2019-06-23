<?php
	if (isset($_POST['sbumit'])) {
		$first_name = $_POST['first_name'];
		$email = $_POST['email_address'];
		$comments = $_POST['comments'];

		$mailTo = "clarkej91@yahoo.com"
		$headers = "From: ".$email;
		$txt = "You have received from an email from ".$first_name.".\n\n".$comments;

		mail($mailTo, $comments, $txt, $headers);
		header("Location: index.html?mailsend");
	}
?>
