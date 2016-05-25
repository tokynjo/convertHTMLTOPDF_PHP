<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
$html="<h1 style='color:red'>ty le izy</h1>";
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$file=$dompdf->output();
file_put_contents("file.pdf", $file);
?>
