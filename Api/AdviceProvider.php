<?php

class AdviceProvider implements AdviceProviderInterface {

    const API_URL = "http://www.boredapi.com/api/activity";
    public function getAdvice(int $participants, string $type): array {
        $url = self::API_URL . "?participants=$participants&type=$type";
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}