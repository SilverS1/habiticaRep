<?php

namespace ListBundle\Model;

use ListBundle\AbstractList\AbstractList;

class HabitList extends AbstractList
{

	/**
	* @var string 
	*/
	private $name = "Habits";

	/**
	* @var array 
	*/
	private $listItems = [];

	/**
	* @var array 
	*/
	private $navigationItems = [];

	public function __construct($listItems, $navigationItems)
	{
		$this->listItems = $listItems;
		$this->navigationItems = $navigationItems;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getListItems()
	{
		return $this->listItems;
	}

	public function getNavigationItems()
	{
		return $this->navigationItems;
	}

	public function addListItem()
	{

	}

	public function addMultipleListItems()
	{

	}

}




