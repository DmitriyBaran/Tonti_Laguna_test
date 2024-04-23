<?php

class FileMessageSender implements MessageSenderInterface {
    private $filename;

    public function __construct(string $filename) {
        $this->filename = $filename;
    }

    public function sendMessage(string $message): void {
        file_put_contents($this->filename, $message . PHP_EOL, FILE_APPEND);
    }
}