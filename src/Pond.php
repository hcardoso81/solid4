<?php

namespace App;

use App\ICanPlay;

class Pond

{
    public function sendToPlay(ICanPlay $duck): void
    {
        $duck->play();
    }
}
