














<?php 
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$sid = 'ACa178d3b79f029a47bc65939116785dc6';
$token = '22ebfefc2f5a0b08188f507efa60c041';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message=$client->messages->create(
    // the number you'd like to send the message to
    '+94713714708',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19706716195',
        // the body of the text message you'd like to send
        'body' => 'Hey im from workdash!'
    ]
);

if($message){
    echo 'msg sent';

}else{
    echo 'msg not sent';
}
 


?>