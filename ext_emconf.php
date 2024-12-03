<?php

########################################################################
# Extension Manager/Repository config file for ext "base_zip".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'ZIP Library',
    'description' => 'A library to download ZIP files. ZipStream-PHP',
    'category' => 'misc',
    'version' => '3.1.1',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Jonatan Männchen, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
