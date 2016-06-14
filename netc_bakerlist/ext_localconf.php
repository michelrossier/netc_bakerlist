<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Netcbakerlist.' . $_EXTKEY,
	'Netcbakerlist',
	array(
		'Addresses' => 'list, belist, show, import',
		
	),
	// non-cacheable actions
	array(
		'Addresses' => 'list, belist, show, import',
		
	)
);
