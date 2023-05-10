<?php

########################################################################
# Extension Manager/Repository config file for ext "base_zip".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'ZIP Library',
    'description' => 'A library to download ZIP files. ZipStream-PHP',
    'category' => 'misc',
    'version' => '3.0.2',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Jonatan Männchen, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
