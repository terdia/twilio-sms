<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\SmsSender;
use Twilio\Rest\Client;

$sid          = 'your_twilio_sid';
$token        = 'your_twilio_token';
$twilioNumber = 'your_twilio_number';

$twilioClient = new Client($sid, $token);
$sender       = new SmsSender($twilioClient);

$to      = '+4993883832';
$payload = [
    'from' => $twilioNumber,
    'body' => 'Thank you for registering, this is your unique code: ' . uniqid('hsjs', true),
];

$sender($to, $payload);

echo 'SMS sent successfully.';
