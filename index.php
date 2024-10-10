<?php

require 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// 1ª forma
// $html = "<h1>Hola!</h1>";
// $html .= "<p>Adios!</p>";
// $html2pdf->writeHTML($html);
// $html2pdf->output('pdf_creado.pdf');

// 2ª forma
// entre ob_start() y ob_get_clean() guarda todo
ob_start();

require 'plantilla.php';

$html = ob_get_clean();
$html2pdf->writeHTML($html);
// $html2pdf->output(__DIR__ . '/' . '/pdf_creado.pdf', 'FI');

