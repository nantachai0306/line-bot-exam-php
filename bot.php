<?php

require "vendor/autoload.php";

$access_token = 'C0jYgehR6Baz7bFAvDfO3L671u5Gdk5ms5mUZ5aes7M29+hxXhLoRRYrWDSO6IedYdll3tzLIvZMhIK4cOc5LrSBVMkcZzoYS4AwSg13+B5K42GU5eC4y7sh7N9vNbTTs+MpSsA3pM2I7pbsFOlV1QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '04340bfadf47123a7d1712a11b650dd6';

$idPush = 'ue38ab2c1c699ad1c8174ba463b5b8e'

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

$response = $bot->pushMessage($idPush, $textMessageBuilder);


echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
