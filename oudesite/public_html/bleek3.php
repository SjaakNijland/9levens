<?php
	// VALUES FROM THE FORM
	$contactpersoon		= $_POST['contactpersoon'];
	$adres	= $_POST['adres'];
	$postcode		= $_POST['postcode'];
	$telefoon		= $_POST['telefoon'];
	$fax	= $_POST['fax'];
	$email		= $_POST['email'];
	$message	= $_POST['vragenopmerkingen'];

	// ERROR & SECURITY CHECKS
	if ( ( !$email ) ||
		 ( strlen($_POST['email']) > 200 ) ||
	     ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
       ) 
	{ 
		print "Error: Invalid E-Mail Address"; 
		exit; 
	} 
	if ( ( !$contactpersoon ) ||
		 ( strlen($contactpersoon) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $contactpersoon) ) 
	   )
	{ 
		print "Error: Invalid Name"; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Error: No Message"; 
		exit; 
	} 

	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $name  <$email>\n";
	$recipient	= "boskatten@9levens.nl";
	$subject	= "Email via 9levens";
	$message = 
"Contact gegevens:\n
Contactpersoon: $contactpersoon\n
Adres: $adres\n
postcode: $postcode\n
Telefoon: $telefoon\n
Fax: $fax\n
Email: $email\n
Vragen/opmerkingen: \n" . wordwrap($message, 1024);


	// SEND THE EMAIL TO YOU
	//mail($recipient, $subject, stripslashes($msg), $headers);
	mail($recipient, $subject, $message, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: http://www.9levens.nl/deutsch/danke.html");
?>
