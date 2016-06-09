<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_netcbakerlist_domain_model_addresses'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_netcbakerlist_domain_model_addresses']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'l10n_diffsource, hidden, title, description, name, vorname, adresse, plz, ort, email, www_link, tel, fax, glutenfrei, region',
	),
	'types' => array(
		'1' => array('showitem' => ';;;;1-1-1, l10n_diffsource, hidden;;1, title, description, name, vorname, adresse, plz, ort, email, www_link, tel, fax, glutenfrei, region, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		// 'sys_language_uid' => array(
		// 	'exclude' => 1,
		// 	'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
		// 	'config' => array(
		// 		'type' => 'select',
		// 		'foreign_table' => 'sys_language',
		// 		'foreign_table_where' => 'ORDER BY sys_language.title',
		// 		'items' => array(
		// 			array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
		// 			array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
		// 		),
		// 	),
		// ),
		// 'l10n_parent' => array(
		// 	'displayCond' => 'FIELD:sys_language_uid:>:0',
		// 	'exclude' => 1,
		// 	'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
		// 	'config' => array(
		// 		'type' => 'select',
		// 		'items' => array(
		// 			array('', 0),
		// 		),
		// 		'foreign_table' => 'tx_netcbakerlist_domain_model_addresses',
		// 		'foreign_table_where' => 'AND tx_netcbakerlist_domain_model_addresses.pid=###CURRENT_PID### AND tx_netcbakerlist_domain_model_addresses.sys_language_uid IN (-1,0)',
		// 	),
		// ),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'vorname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.vorname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'adresse' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.adresse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
			// 'config' => array(
			// 	'type' => 'text',
			// 	'cols' => 40,
			// 	'rows' => 15,
			// 	'eval' => 'trim'
			// )
		),
		'plz' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.plz',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ort' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'www_link' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.www_link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
			// 'config' => array(
			// 	'type' => 'text',
			// 	'cols' => 40,
			// 	'rows' => 15,
			// 	'eval' => 'trim'
			// )
		),
		'tel' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'glutenfrei' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang_db.xlf:tx_netcbakerlist_domain_model_addresses.glutenfrei',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'region' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang.xlf:tx_netcbakerlist_domain_model_addresses.region',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);
