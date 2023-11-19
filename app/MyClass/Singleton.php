<?php

namespace App\MyClass;

class Singleton
{
    static $setting = null;
    public $dark = 0;

    protected function __construct()
    {
        //
    }

    public static function create()
    {
        if (!static::$setting) {
            static::$setting = new static;
        }
        return static::$setting;
    }
}
