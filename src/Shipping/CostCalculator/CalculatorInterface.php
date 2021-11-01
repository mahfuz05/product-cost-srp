<?php

declare(strict_types=1);

namespace App\Shipping\CostCalculator;

use App\Entity\Product;

interface CalculatorInterface
{
    #public function supports(Product $product): bool;
    public function getCost(Product $product): float;
}
