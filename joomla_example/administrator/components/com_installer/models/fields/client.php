<?php
/**
 * @version		$Id: client.php 22338 2011-11-04 17:24:53Z github_bot $
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License, see LICENSE.php
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.form.formfield');

/**
 * Form Field Place class.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_installer
 * @since		1.6
 */
class JFormFieldClient extends JFormField
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'Client';

	/**
	 * Method to get the field input.
	 *
	 * @return	string		The field input.
	 * @since	1.6
	 */
	protected function getInput()
	{
		$onchange	= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';
		$options = array();
		foreach ($this->element->children() as $option) {
			$options[] = JHtml::_('select.option', $option->attributes('value'), JText::_(trim($option->data())));
		}
		$options[] = JHtml::_('select.option', '0', JText::sprintf('JSITE'));
		$options[] = JHtml::_('select.option', '1', JText::sprintf('JADMINISTRATOR'));
		$return = JHtml::_('select.genericlist', $options, $this->name, $onchange, 'value', 'text', $this->value, $this->id);
		return $return;
	}
}
