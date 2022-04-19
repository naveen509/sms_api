<?php 
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACa178d3b79f029a47bc65939116785dc6';
$token = '2a04a205d1354714fad10806f3712a30';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message=$client->messages->create(
    // the number you'd like to send the message to
    '+94713714708',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19706716195',
        // the body of the text message you'd like to send
        'body' => 'Hey im frm WD'
    ]
);

if($message){
    echo 'msg sent';

}else{
    echo 'msg not sent';
}
 


?>
