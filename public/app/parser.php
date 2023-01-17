<?php

namespace allegroParser;

class parser
{
    public static function curlInit(string $url) : string
    {
        $output = curl_init(); //подключаем culr
        curl_setopt($output, CURLOPT_URL, $url); //отправляем адрес страницы
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $out = curl_exec($output); //помещаем html-контент в строку
        curl_close($output); //закрываем подключение
        return $out; //здесь контент всех трех страниц
    }
}