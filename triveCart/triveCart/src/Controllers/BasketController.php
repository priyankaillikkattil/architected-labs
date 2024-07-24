<?php

namespace Controllers;
require_once ('../src/Models/Basket.php');
require_once ('../src/Models/DeliveryRule.php');
require_once ('../src/Models/Product.php');
require_once ('../src/Views/BasketView.php');
require_once ('../src/Models/BuyOneGetOneHalfPriceOffer.php');
require_once ('../src/Models/Offer.php');

use src\Models\Basket;
use src\Modelsodels\DeliveryRule;
use src\Models\Product;
use src\Views\BasketView;
use src\Models\BuyOneGetOneHalfPriceOffer;
use src\Models\Offer;
class BasketController {
    private Basket $basket;

    public function __construct() {
        $deliveryRules = [
            new \src\Models\DeliveryRule(50, 4.95),
            new \src\Models\DeliveryRule(90, 2.95),
            new \src\Models\DeliveryRule(PHP_INT_MAX, 0.0),
        ];

        $offers = [new \src\Models\BuyOneGetOneHalfPriceOffer('R01')];
        $this->basket = new \src\Models\Basket($deliveryRules, $offers);
    }

    public function addProducts(array $products) {
        foreach ($products as $product) {
            $newProduct = new Product($product['code'], $product['name'], $product['price']);
            $this->basket->add($newProduct);
        }
    }

    public function displayBasket() {
        echo "Total: $" . number_format($this->basket->total(), 2);
    }

    public function getTotal(): float {
        return $this->basket->total();
    }

}
