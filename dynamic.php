<html>
<head>
	<title>SMS Api</title>
</head>

<body>
	<a href="dynamic.php">Go to Home</a>
	<br/><br/>

	<form action="dynamic.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Client Phone number</td>
				<td><input type="text" name="client_no"></td>
			</tr>
			<tr> 
				<td>Msg</td>
				<td><input type="text" name="msg"></td>
			</tr>
		
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	  require __DIR__ . '/vendor/autoload.php';
	  use Twilio\Rest\Client;

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		// $client_no = $_POST['client_no'];
		// $msg = $_POST['msg'];

		 $client_no='+94713714708';
		 $msg='Hey im from workdash!';
		
      
        
        $sid = 'ACa178d3b79f029a47bc65939116785dc6';
        $token = '22ebfefc2f5a0b08188f507efa60c041';
        $client = new Client($sid, $token);
        
        // Use the client to do fun stuff like send text messages!
        $message=$client->messages->create(
            // the number you'd like to send the message to
            $client_no,
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+19706716195',
                // the body of the text message you'd like to send
                'body' => $msg
            ]
        );
        
        if($message){
            echo 'msg sent';
        
        }else{
            echo 'msg not sent';
        }



	}
	?>
</body>
</html>