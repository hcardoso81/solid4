<?php

namespace App;
//obsoleto, ya que no puedo forzar a un pato de madera a hacer quack.
//No uso herencia para que el estanque no dependa de solo de Ducks. Cualquiera que puede jugar en el estanque, por ejemplo una rana..
interface IDuck
{
    public function float(): void;
    public function quack(): void;
}
