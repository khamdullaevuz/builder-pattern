<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

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

App::init();

echo App::$builder
    ->make('car')
    ->color('red')
    ->wheels(4)
    ->get();