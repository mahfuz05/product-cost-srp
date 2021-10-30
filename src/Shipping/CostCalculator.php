<?php

declare(strict_types=1);

namespace App\Shipping;

use App\Entity\Product;
use App\Shipping\CostCalculator\CalculatorInterface;

class CostCalculator
{
    /**
     * @var array<string, CalculatorInterface>
     */
    private array $calculators;

    /**
     * @param array<string, CalculatorInterface> $calculators
     */
    public function __construct(array $calculators)
    {
        $this->calculators = $calculators;
    }

    public function calculate(string $shippingMethod, Product $product): float
    {
        return $this->calculators[$shippingMethod]->getCost($product);
    }
}
