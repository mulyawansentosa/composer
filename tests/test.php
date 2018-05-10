<?php

// Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Greetings;
use Coba\Coba;
use Lagi\Lagiaja;
use Apa;

echo Greetings::sayHelloWorld();
$isi = new Coba();
echo $isi->muncul();

$lagi = new Lagiaja();
echo $lagi->lagikali();

$apa = new Apa();
echo $apa->aja();