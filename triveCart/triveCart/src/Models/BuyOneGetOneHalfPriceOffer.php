<?php

namespace src\Models;
require_once ('Offer.php');
class BuyOneGetOneHalfPriceOffer implements Offer {
    private string $productCode;

    public function __construct(string $productCode) {
        $this->productCode = $productCode;
    }

    public function apply(array $products): float {
        $discount = 0.0;
        $count = 0;

        foreach ($products as $product) {
            if ($product->code === $this->productCode) {
                $count++;
                if ($count % 2 == 0) {
                    $discount += $product->price * 0.5;
                }
            }
        }

        return $discount;
    }
}
