<?php

return [

    // Slim framework settings
    'settings.displayErrorDetails' => true,

    // Twig
    'settings.twig' => [
        'path'     => __DIR__ . '/../templates',
        'settings' => [
            'cache' => false,
        ]
    ],
];
