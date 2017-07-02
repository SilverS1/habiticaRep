<?php 

namespace ListBundle\AbstractList;

abstract class AbstractList 
{
	/**
	* @var string 
	*/
	private $name;

	/**
	* @var array 
	*/
	private $listItems;

	/**
	* @var array 
	*/
	private $navigationItems;

	// think I'm doing all of these wrong, these should be handled in the entity. 

	abstract public function getName();

	abstract public function getListItems();

	abstract public function getNavigationItems();

	abstract public function addListItem();

	abstract public function addMultipleListItems();

}

