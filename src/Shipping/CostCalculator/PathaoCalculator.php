<?php

declare(strict_types=1);

namespace App\Shipping\CostCalculator;

use App\Entity\Product;

class PathaoCalculator implements CalculatorInterface
{
    public function getCost(Product $product): float
    {
        return $product->getSeller()->getDistrict() === 'Dhaka' ? 100 : 150;
    }
}
