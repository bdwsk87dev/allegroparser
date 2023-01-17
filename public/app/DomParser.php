<?php

namespace allegroParser;

use DOMDocument;
use HTMLDomParser;

class DomParser
{

    public static function parserInit(string $html) : array{

        $dom = HTMLDomParser\DomFactory::load($html);
        $subcategoriesBlock = $dom->findOne("div[data-role='Categories']");

        echo $subcategoriesBlock;
        echo "<br>_OK!";
        die();

        return ['subcategories'];
    }

    public static function GetSubcategories(string $menuBlock): array
    {
        return [];
    }
}