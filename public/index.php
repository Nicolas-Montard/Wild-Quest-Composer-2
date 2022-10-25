<?php


require __DIR__.'/../vendor/autoload.php';
use App\Hello;
//  require_once __DIR__.'/../src/Hello.php';

$hello = new Hello;

 echo $hello->Talk();