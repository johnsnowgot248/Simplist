<?php
return[
    '/' => [
        'target' => 'Main.HomeController.Index',
        'gverb'=> 'GET',
        'middleware'=>''

    ],
    '/Aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''

    ],
    '/aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''

    ],
    '/Panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'gverb'=> 'POST',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'gverb'=> 'POST',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/NotFound' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'middleware'=>''
    ],
    '/Content' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/content' => [
        'target'=>'Helper.ErrorController.NotFound',
        'gverb'=> 'GET',
        'pverb'=> '',
        'middleware'=>''
    ],
    '/login' => [
        'target'=>'Panel.UserController.Login',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ],
    '/Login' => [
        'target'=>'Panel.UserController.Login',
        'gverb'=> 'GET',
        'pverb'=> 'POST',
        'middleware'=>''
    ]
];