<?php
/**
 * @version		$Id: contactemailmessage.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	Contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.form.formrule');

class JFormRuleContactEmailMessage extends JFormRule
{
	public function test(& $element, $value, $group = null, & $input = null, & $form = null)
	{
		$params = JComponentHelper::getParams('com_contact');
		$banned = $params->get('banned_text');

		foreach(explode(';', $banned) as $item){
			if (JString::stristr($item, $value) !== false)
					return false;
		}

		return true;
	}
}
