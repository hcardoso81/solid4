<?php

namespace App;

use App\ICanFloat;
use App\ICanQuack;
use App\ICanPlay;

class Duck implements ICanFloat, ICanQuack, ICanPlay
{
    public function float(): void
    {
        echo "The duck is floating\n";
    }

    public function quack(): void
    {
        echo "The duck is quacking\n";
    }

    public function play(): void
    {
        $this->float();
        $this->quack();
    }
}
