<?php

/*
 * This file is part of JQueryInContaoBackendBundle.

 * @package   JQueryInContaoBackendBundle
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2020
 * @website	  https://github.com/marcel-mathias-nolte
 * @license   LGPL-3.0-or-later
 */

if (TL_MODE == 'BE') {
	if (!is_array($GLOBALS['TL_JAVASCRIPT'])) {
		$GLOBALS['TL_JAVASCRIPT'] = array();
	}
array_unshift($GLOBALS['TL_JAVASCRIPT'], 'bundles/jqueryincontaobackend/jquery.noconflict.js');
$jquery_src = \Contao\Controller::addAssetsUrlTo('assets/jquery/js/jquery.min.js');
array_unshift($GLOBALS['TL_JAVASCRIPT'], $jquery_src);
}