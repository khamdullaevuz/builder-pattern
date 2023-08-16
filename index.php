<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

App::init();

echo App::$builder
    ->make('car')
    ->color('red')
    ->wheels(4)
    ->get();