<?php

require __DIR__ . '/../vendor/autoload.php';
use allegroParser\parser;
use allegroParser\DomParser;
$url = 'https://allegro.pl/uzytkownik/Grand_Trade';
// $html = parser::curlInit($url);
DomParser::parserInit('<div data-role="Categories"><a>this is the link!!</a></div>');
echo "It's work!!!";