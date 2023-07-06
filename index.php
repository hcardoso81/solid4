<?php
require_once("vendor/autoload.php");

use  App\Pond;
use App\Duck;
use App\WoodenDuck;
use App\Frog;

$pond = new Pond();
$pond->sendToPlay(new Duck());
$pond->sendToPlay(new WoodenDuck());
$pond->sendToPlay(new Frog());
