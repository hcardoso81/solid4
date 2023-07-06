<?php

namespace App;

use App\ICanPlay;

class Frog implements ICanPlay
{
    public function play(): void
    {
        echo "The Frog is playing\n";
    }
}
