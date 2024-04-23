<?php

interface MessageSenderInterface {
    public function sendMessage(string $message): void;
}