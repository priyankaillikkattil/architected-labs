<?php

namespace src\Models;

interface Offer {
    public function apply(array $products): float;
}
