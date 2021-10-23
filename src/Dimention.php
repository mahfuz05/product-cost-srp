<?php

declare(strict_types=1);

namespace App;

class Dimention
{
    private $width;
    private $height;
    private $length;


    function __construct(float $width = 1, float $height = 1, float $length = 1)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function getDimention(): float
    {

        return $this->width * $this->height * $this->length;
    }
}
