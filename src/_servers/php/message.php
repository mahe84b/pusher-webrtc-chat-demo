<?php
require_once("config.php");
require __DIR__ . '/vendor/autoload.php';


// TODO: Check for valid POST data

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
$pusher->trigger($_POST["channel"], "message", $_POST["message"], $_POST["socketId"], true);

header("Status: 200");
?>