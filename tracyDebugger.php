<?php

require_once 'vendor/autoload.php';

use Tracy\Debugger;

Debugger::enable();

$frutas = ['naranja', 'peras', 'manzanas'];

Debugger::barDump($frutas);

echo '<h1>Debugger</h1>';

// try {
//     throw new Exception("Error gordo!", 1);
// } catch (\Exception $e) {
//     Debugger::log($e);
// }
