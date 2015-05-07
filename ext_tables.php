<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,                    // Extension Key
    'Configuration/TypoScript',  // Path to setup.txt and constants.txt
    'Example Package'            // Title in the selector box
);