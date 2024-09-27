<?php
defined('TYPO3') || die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'tx_wsflexslider_images' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang.xml:tx_wsflexslider_domain_model_flexslider.images',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_wsflexslider_domain_model_image',
            'foreign_field' => 'content_uid',
            'foreign_label' => 'title',
            'foreign_sortby' => 'sorting',
            'maxitems' => '100',
            'appearance' => [
                #'collapseAll' => 0, // Auskommentieren, da es sonst immer als true interpretiert wird
                'expandSingle' => true,
                'newRecordLinkAddTitle' => 1,
                'newRecordLinkPosition' => 'both',
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
            ],
            'behaviour' => [
                'localizationMode' => 'select',
            ],
        ]
    ],
]);



call_user_func(
    function ($extKey) {
        $extKey = "ws_flexslider";
        // Build extension name vars - used for plugin registration, flexforms and similar
        $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($extKey);
        $pluginSignature = strtolower($extensionName) . '_pi1';
        
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            $extKey,
            'Pi1',
            'WS Flexslider'
            );
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript',
            'Flexslider');
        
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wsflexslider_domain_model_image');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_wsflexslider_domain_model_image',
            'EXT:ws_flexslider/Resources/Private/Language/locallang_csh_image.xlf');
        
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'tx_wsflexslider_images,pi_flexform';
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature,
            'FILE:EXT:' . $extKey . '/Configuration/FlexForm/Flexslider.xml');
        
        
    },
    'ws_flexslider'
    );
