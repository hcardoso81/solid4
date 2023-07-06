<?php

namespace App;

use App\ICanFloat;
use App\ICanPlay;

class WoodenDuck implements ICanFloat, ICanPlay
{
    public function float(): void
    {
        echo "the wodden duck is floating\n";
    }
    public function play(): void
    {
        $this->float();
    }
}
