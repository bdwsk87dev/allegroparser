<?php

require __DIR__ . '/../vendor/autoload.php';

use allegroParser\parser;

$html = parser::curlInit('https://simpsonsua.tv/sezon-33/3642-33-sezon-11-seriya.html');

echo "Hello!";

echo $html;