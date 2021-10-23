<?php

declare(strict_types=1);

namespace App;

class FedexCalculator implements CostCalculatorInterface
{

    private Product $product;

    function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getCost(): float
    {
        return $this->product->dimention->getDimention() * 1 +
            $this->product->weight->getWeight() * 2.3;
    }
}
