<?php

declare(strict_types=1);

namespace App\Shipping\CostCalculator;

use App\Entity\Product;
use App\Math\Utils;

class FedexCalculator implements CalculatorInterface
{
    private Utils $mathUtils;

    public function __construct(Utils $mathUtils)
    {
        $this->mathUtils = $mathUtils;
    }

    public function getCost(Product $product): float
    {
        return $this->mathUtils->calculateVolume($product->getDimension()) * 1 +
            $product->getWeight()->getValue() * 2.3
        ;
    }
}