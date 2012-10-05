<?php
/***************************************************************
*  Copyright notice
*
*  (c)  2005-2008 Daniel Bruen (dbruen@saltation.de)  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Module extension (addition to function menu) 'Make new extension' for the 'synthesis' extension.
 *
 * @author	Daniel Bruen <dbruen@saltation.de>
 * @author	Ingmar Schlecht <ingmar@typo3.org>
 */



require_once(PATH_t3lib.'class.t3lib_extobjbase.php');
require_once(t3lib_extMgm::extPath('synthesis').'class.tx_synthesis_wizard.php');

class tx_synthesis_modfunc1 extends t3lib_extobjbase {

	/**
	 * Main method of modfunc1
	 */
	function main()	{
		$synthesis = $this->initKickstarter();
		$content = $synthesis->mgm_wizard();

		return '</form>'.$this->pObj->doc->section('Kickstarter wizard',$content,0,1).'<form>';
	}

	/**
	 * Initializing the Kickstarter
	 *
	 * @return	Instance of synthesis
	 */
	function initKickstarter() {
		$synthesis = t3lib_div::makeInstance('tx_synthesis_wizard');
		$synthesis->color = array($this->pObj->doc->bgColor5,$this->pObj->doc->bgColor4,$this->pObj->doc->bgColor);
		$synthesis->siteBackPath = $this->pObj->doc->backPath.'../';
		$synthesis->pObj = &$this->pObj;
		$synthesis->EMmode = 1;

		return $synthesis;
	}
}


class tx_synthesis_modfunc2 extends tx_synthesis_modfunc1 {

	/**
	 * Main method of modfunc2
	 *
	 */
	function main()	{
		$synthesis = $this->initKickstarter();
		if(!$synthesis->modData['wizArray_ser']) {
			$synthesis->modData['wizArray_ser'] = base64_encode($this->getWizardFormDat());
		}
		$content = $synthesis->mgm_wizard();

		return '</form>'.$this->pObj->doc->section('Kickstarter wizard',$content,0,1).'<form>';
	}

	/**
	 * fetch form data from file (doc/wizard_form.dat) if it is present
	 *
	 * @return	Formdata if the file was found, otherwise an empty string
	 */
	function getWizardFormDat() {
		list($list,$cat)=$this->pObj->getInstalledExtensions();
		$absPath = $this->pObj->getExtPath($this->pObj->CMD['showExt'],$list[$this->pObj->CMD['showExt']]['type']);

		return @is_file($absPath.'doc/wizard_form.dat') ? t3lib_div::getUrl($absPath.'doc/wizard_form.dat') : '';
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/synthesis/modfunc1/class.tx_synthesis_modfunc1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/synthesis/modfunc1/class.tx_synthesis_modfunc1.php']);
}

?>