<?php

	if (isset($_POST['submit'])){
		$message = $_POST['message'];
		$mailTo = "roadtrip_nooyens@hotmail.com";
		$subject = "Postkaart ontvangen!"
		
		mail($mailTo, $subject, $message);
		header("Location: contact.html?cardsend");
	}
	
?>