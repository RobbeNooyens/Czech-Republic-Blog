<?php

	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];
		
		$mailTo = "roadtrip_nooyens@hotmail.com";
		$headers = "From: ".$mailFrom;
		$txt = $name." schreef:"."\n\n".$message;
		
		mail($mailTo, $subject, $txt, $headers);
		header("Location: contact.html?mailsend");
	}
	
?>