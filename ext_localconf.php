<?php
/**
 * Contexts WURFL extension configuration.
 *
 * PHP version 5
 *
 * @category   Contexts
 * @package    WURFL
 * @subpackage Configuration
 * @author     Rico Sonntag <rico.sonntag@netresearch.de>
 */

defined('TYPO3_MODE') or die('Access denied.');

// Register the import task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
	['Tx_Contexts_Wurfl_Service_ImportTask'] = array(
		'extension'   => $_EXTKEY,
		'title'       => 'LLL:EXT:' . $_EXTKEY
			. '/Resources/Private/Language/locallang_mod.xml:importTask.name',
		'description' => 'LLL:EXT:' . $_EXTKEY
			. '/Resources/Private/Language/locallang_mod.xml:importTask.description'
	);

if (TYPO3_MODE !== 'BE') {
	// We load that file in ext_tables.php for the backend
	require_once t3lib_extMgm::extPath($_EXTKEY) . 'ext_contexts.php';
}

?>
