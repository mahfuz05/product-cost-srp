<?php

declare(strict_types=1);

namespace App;

interface CostCalculatorInterface
{
    public function getCost(): float;
}
