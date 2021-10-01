<?php declare(strict_types=1);
namespace src\factory;

use src\Factory;
use src\FactoryClassInterface;
use src\molestia\Molestia;
use src\molestia\ValoresMolestia;
use src\PruebaScl90R as SrcPruebaScl90R;

class PruebaScl90R implements FactoryClassInterface
{
    public function crear(array $array): SrcPruebaScl90R
    {
        $factory = new Factory();

        $frases = $factory->crear('src\factory\Frases', $array);

        $molestia = new Molestia($frases, new ValoresMolestia());

        return new SrcPruebaScl90R($frases, $molestia);
    }
}
