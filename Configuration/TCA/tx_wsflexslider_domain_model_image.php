<?php
defined('TYPO3') || die();

return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,description,',
        'typeicon_classes' => [
            'default' => 'ext-wsflexslider-image'
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, fal_image',
    ],
    'types' => [
        '1' => [
            'showitem' => 'hidden, title, sys_language_uid,
				description,
				textposition, styleclass, link, fal_image,
		
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime, endtime'
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'exclude' => true,
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0
                    ]
                ],
                'foreign_table' => 'tx_wsflexslider_domain_model_image',
                'foreign_table_where' => 'AND tx_wsflexslider_domain_model_image.pid=###CURRENT_PID### AND tx_wsflexslider_domain_model_image.sys_language_uid IN (-1,0)',
                'default' => 0
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ]
        ],
        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'exclude' => true,
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0
            ]
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'l10n_mode' => 'prefixLangTitle',
            'l10n_cat' => 'text',
            'exclude' => 0,
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 6,
                'enableRichtext' => true,
            ],
        ],
        'textposition' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.textposition',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.textposition_left',
                        "left"
                    ],
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.textposition_right',
                        "right"
                    ]
                ],
            ],
        ],
        'styleclass' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.styleclass',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.styleclass_style1',
                        "style1"
                    ],
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.styleclass_style2',
                        "style2"
                    ],
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.styleclass_style3',
                        "style3"
                    ],
                    [
                        'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.styleclass_style4',
                        "style4"
                    ]
                ],
            ],
        ],
        'link' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.link',
            'config' => [
                'type' => 'input',
                'renderType'=>'inputLink',
                'softref' => 'typolink,typolink_tag,images,url',
            ],
        ],
        'fal_image' => [
            'exclude' => 0,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:ws_flexslider/Resources/Private/Language/locallang_db.xlf:tx_wsflexslider_domain_model_image.image',
            'config' => array(
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ),
            ],
        'content_uid' => [
            'label' => 'CC',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                //'foreign_table_where' => ...,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
    ],
];

