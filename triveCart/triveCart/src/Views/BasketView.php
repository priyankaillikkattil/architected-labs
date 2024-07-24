<?php

namespace src\Views;

class BasketView {
    public function render(float $total): void {
        echo "Total cost: $" . number_format($total, 2);
    }
}
