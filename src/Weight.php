<?php

declare(strict_types=1);

namespace App;


class Weight
{
    const KIlOGRAM = 1;
    const POUND = 2;
    const POUND_KG_CONVERT = 2.20462262;
    private $unit;
    private $value;

    function __construct(int $unit = 1, float $value = 1)
    {
        $this->unit = $unit;
        $this->value = $value;
    }

    public function getWeight(int $unit = 1): float
    {

        if ($unit === $this->unit)
            return $this->value;

        if ($unit === self::KIlOGRAM)   
            return $this->value / self::POUND_KG_CONVERT;

        if ($unit === self::POUND)
            return $this->value * self::POUND_KG_CONVERT;
    }
}
