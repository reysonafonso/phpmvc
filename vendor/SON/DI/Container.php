<?php

namespace SON\DI;

class Container
{

    public static function getClass($name)
    {
        $str_class = "\\App\\Models\\".ucfirst($name);
        $class = new $str_class(\App\Init::getDb());
        return $class;
    }

} 