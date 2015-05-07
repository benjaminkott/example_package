<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Example Package',
    'description' => '',
    'category' => 'templates',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Benjamin Kott',
    'author_email' => 'info@bk2k.info',
    'author_company' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.12-7.99.99',
            'css_styled_content' => '6.2.0-7.99.99',
        ),
        'conflicts' => array(
            'fluidpages' => '*',
            'themes' => '*',
        ),
    ),
);