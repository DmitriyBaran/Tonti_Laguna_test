<?php

interface AdviceProviderInterface {
    public function getAdvice(int $participants, string $type): array;
}
