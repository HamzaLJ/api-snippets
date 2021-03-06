<?php
// Download the **Next-Gen** twilio-php library from:
// twilio.com/docs/libraries/php#installation-nextgen

// Include dependencies from Composer's autoload (including Twilio library)
require_once '/path/to/vendor/autoload.php';

$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";  // Your Account SID from www.twilio.com/console
$token = "your_auth_token"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);

$$usage = $client->preview->wireless->devices(
  "DEb8eff34b248d066a31c4a953134e183e")->usage()->fetch();

echo $usage->period['start'], "\n";
echo $usage->period['end'], "\n";
echo $usage->dataCosts['total'], "\n";