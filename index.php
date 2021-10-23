<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\DHLCalculator;
use App\Dimention;
use App\FedexCalculator;
use App\Product;
use App\Weight;

$dimention = new Dimention(2, 3, 1);
$weight = new Weight(1, 2);

$product = new Product($dimention, $weight);

$dhl = new DHLCalculator($product);
$fedex = new FedexCalculator($product);

var_dump($dhl->getCost());
