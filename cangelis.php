<?php

$pdf = new CanGelis\PDF\PDF('/usr/bin/wkhtmltopdf');

echo $pdf->loadHTML('<b>Hello World</b>')->get();

echo $pdf->loadURL('http://www.laravel.com')->grayscale()->pageSize('A3')->orientation('Landscape')->get();

echo $pdf->loadHTMLFile('/home/can/index.html')->lowquality()->pageSize('A2')->get();