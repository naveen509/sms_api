<?php

// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account AccountSid and Auth Token from twilio.com/console
$AccountSid = 'ACa178d3b79f029a47bc65939116785dc6';
$AuthToken = '22ebfefc2f5a0b08188f507efa60c041';
$client = new Client($AccountSid, $AuthToken);

// Use the client to do fun stuff like send text messages!

// An array of users(receivers) containing Mobile Number & Name.
// +1 is code of country(US). And xxxxxxxxxx is user's mobile number.
$people = array(
	'+94713714708' => "Chirag"
	
);
foreach ($people as $number => $name) {
	$sms = $client->account->messages->create(
		$number,
		array(
			'from' => "+19706716195", //phone number from twilio.com
			'body' => "Message Body. -Automated Message, No-Reply"
		)
	); 
	echo "Sent message to $name <br><br>";
}
?>