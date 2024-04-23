<?php

class ConsoleMessageSender implements MessageSenderInterface {
    public function sendMessage(string $message): void {
        echo $message . PHP_EOL;
    }
}