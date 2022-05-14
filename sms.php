<?php
        include 'php-in/textlocal.class.php';
				//require('textlocal.class.php');
				
				$textlocal = new Textlocal(false, false,'NDI1YTY2Njc0ZDczNTk0ZDY5NDM2OTZhNDg3NjcxNzg=' );
                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array("8788125817");
				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello Sameer This is your OTP: ";
				$response = $textlocal->sendSms($numbers, $message, $sender);
				echo $response;
				
?>