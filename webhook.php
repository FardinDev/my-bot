<?php
include 'FbBot.php';

$tokken = $_REQUEST['hub_verify_token'];
$hubVerifyToken = 'mybot';
$challange = $_REQUEST['hub_challenge'];
$accessToken = 'EAAFKk79bqkYBANTcEbgDrbNmNd5lIaOG9bw1uDsmh7qDdwZCWamgRSg7ijszZCUZAe7ICG17YwDcEGDVvBb0ENtMd94xBkT1dpZAS9ZBxTysP0heClbbr7wCueibZBGGSvCRzWzmMPIjZCz7NOu3CZAkZCzty6HuxTm4QqobsuZBqe228a3PLMPRLDRLXUW9fVvygZD';
$input = json_decode(file_get_contents('php://input'), true);
file_put_contents("check.json", json_encode($input));

die();
$bot = new FbBot();
$bot->setHubVerifyToken($hubVerifyToken);
$bot->setaccessToken($accessToken);
$bot->verifyTokken($tokken, $challange);
$message = $bot->readMessage($input);
$botmessage = $bot->sendMessage($message);