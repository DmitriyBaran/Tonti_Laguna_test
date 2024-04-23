<?php

require_once 'Interfaces/AdviceProviderInterface.php';
require_once 'Api/AdviceProvider.php';
require_once 'Interfaces/MessageSenderInterface.php';
require_once 'Services/ConsoleMessageSender.php';
require_once 'Services/FileMessageSender.php';

$participants = (int)$argv[1];
$type = $argv[2];
$sender = $argv[3];

if (!in_array($sender, ["file", "console"])) {
    echo "Invalid arguments\n";
    exit();
}

$adviceProvider = new AdviceProvider();
$advice = $adviceProvider->getAdvice($participants, $type);

if ($sender === "console") {
    $messageSender = new ConsoleMessageSender();
} else {
    $messageSender = new FileMessageSender('advice.txt');
}


if (isset($advice['error'])) {
    echo $advice['error'];
    exit();
}
$messageSender->sendMessage("Advice: " . $advice['activity']);