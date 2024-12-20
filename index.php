<?php

use MeBurgstaller\Weihnachten\Rentier;
require 'vendor/autoload.php';

$rentier = new Rentier();
echo $rentier->gruessen();