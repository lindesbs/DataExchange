<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright � 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Stefan Lindecke 2012
 * @author     Stefan Lindecke <stefan@chektrion.de>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['system']['dataexchange_config'] = array
(
	'tables'	=> array('tl_dataexchange_config', 'tl_dataexchange_fields'),
	'icon'		=> 'system/modules/DataExchange/html/icon.png',
	'export'	=> array('DataExchange', 'exportTable')
);


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('DataExchange', 'loadDataContainerHook');


/**
 * Data Exchange providers
 */
$GLOBALS['DataExchangeProvider']['export']['csv'] = array('DataExchangeExportProvider_CSV', 'exportData');
