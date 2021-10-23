<?php

declare(strict_types=1);

namespace App;


class Product
{

    public Dimention $dimention;
    public Weight $weight;

    function __construct(Dimention $dimention, Weight $weight)
    {
        $this->dimention = $dimention;
        $this->weight = $weight;
    }
}
