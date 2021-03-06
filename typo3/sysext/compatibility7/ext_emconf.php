<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Compatibility Mode for TYPO3 CMS 7.x',
    'description' => 'Provides an additional backwards-compatibility layer with legacy functionality for sites that haven\'t fully migrated to v8 yet.',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 CMS Team',
    'author_email' => '',
    'author_company' => '',
    'version' => '8.4.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.4.0-8.4.99',
            'indexed_search'
        ],
        'conflicts' => [
            'compatibility6' => '0.0.0',
        ],
        'suggests' => [],
    ],
];
