<?php

namespace src\Models;

class Basket {
    private array $products         = [];
    private array $deliveryRules    = [];
    private array $offers           = [];
    public function __construct(array $deliveryRules, array $offers) {
        $this->deliveryRules = $deliveryRules;
        $this->offers        = $offers;
    }

    public function add(Product $product): void {
        $this->products[] = $product;
    }

    public function total(): float {
            $total = array_reduce($this->products, function ($carry, $product) {
                return $carry + $product->price;
            }, 0.0);

            echo "Product Total: $$total\n";

            foreach ($this->offers as $offer) {
                $discount = $offer->apply($this->products);
                echo "Discount Applied: $$discount\n";
                $total -= $discount;
            }

            $deliveryCost = $this->calculateDeliveryCost($total);
            echo "Delivery Cost: $$deliveryCost\n";

            return $total + $deliveryCost;
        }




    private function calculateDeliveryCost(float $total): float {
        foreach ($this->deliveryRules as $rule) {
            if ($total < $rule->minAmount) {
                return $rule->cost;
            }
        }
        return 0.0;
    }
}
