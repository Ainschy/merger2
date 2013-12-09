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

class GroupNode implements NodeInterface
{
	/**
	 * @var NodeInterface
	 */
	protected $child;

	function __construct(NodeInterface $child)
	{
		$this->child = $child;
	}

	/**
	 * @return NodeInterface
	 */
	public function getChild()
	{
		return $this->child;
	}

	/**
	 * {@inheritdoc}
	 */
	public function evaluate()
	{
		return $this->child && $this->child->evaluate();
	}
}
