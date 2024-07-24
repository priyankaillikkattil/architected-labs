<?php

namespace src\Models;

class DeliveryRule {
    public float $minAmount;
    public float $cost;

    public function __construct(float $minAmount, float $cost) {
        $this->minAmount = $minAmount;
        $this->cost = $cost;
    }
}
