<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Netcbakerlist',
	'Netc Bakerlist'
);

/* bakerlist - Flexform setting  */
$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . 'netcbakerlist';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Bakerlist.xml');

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Netcbakerlist.' . $_EXTKEY,
		'web',	 // Make module a submodule of 'web'
		'netcbakerlistfile',	// Submodule key
		'',						// Position
		array(
			'Addresses' => 'belist, show, import',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_netcbakerlistfile.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Netc Bakerlist');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_netcbakerlist_domain_model_addresses', 'EXT:netc_bakerlist/Resources/Private/Language/locallang_csh_tx_netcbakerlist_domain_model_addresses.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_netcbakerlist_domain_model_addresses');
$GLOBALS['TCA']['tx_netcbakerlist_domain_model_addresses'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:netc_bakerlist/Resources/Private/Language/locallang_db.xlf:tx_netcbakerlist_domain_model_addresses',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,name,vorname,adresse,plz,ort,email,www_link,tel,fax,glutenfrei,region,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Addresses.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_netcbakerlist_domain_model_addresses.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    $_EXTKEY,
    'tx_netcbakerlist_domain_model_addresses'
);
