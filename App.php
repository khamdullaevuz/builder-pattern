<?php

class App
{
    public static Builder $builder;

    public static function init()
    {
        if(!isset(self::$builder)) {
            self::$builder = new Builder();
        }
    }
}