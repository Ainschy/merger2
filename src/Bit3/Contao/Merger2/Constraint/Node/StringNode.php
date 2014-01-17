<?php

/**
 * Merger² - Module Merger for Contao Open Source CMS
 *
 * Copyright (C) 2013 bit3 UG
 *
 * @package merger2
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license LGPL-3.0+
 */

namespace Bit3\Contao\Merger2\Constraint\Node;

class StringNode implements NodeInterface
{
	/**
	 * @var string
	 */
	protected $value;

	function __construct($value)
	{
		$this->name = $value;
	}

	/**
	 * @return string
	 */
	public function getValue()
	{
		return $this->name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function evaluate()
	{
		return $this->name; // TODO read variable
	}
}