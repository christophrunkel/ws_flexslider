<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Flexslider',
    'description' => 'jQuery Flexslider slideshow script',
    'category' => 'plugin',
    'author' => 'Sven Wappler / Christoph Runkel',
    'author_email' => 'typo3YYYY@wappler.systems',
    'author_company' => 'WapplerSystems',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '13.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'WapplerSystems\\WsFlexslider\\' => 'Classes/',
        ],
    ],
];
