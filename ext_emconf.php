<?php

########################################################################
# Extension Manager/Repository config file for ext "base_zip".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'ZIP Library',
    'description' => 'A library to download ZIP files. ZipStream-PHP',
    'category' => 'misc',
    'version' => '0.1.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Jonatan Männchen, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.1.99',
            'typo3' => '9.5.0-11.5.99',
            'base_enum' => '0.0.2-0.0.0'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
