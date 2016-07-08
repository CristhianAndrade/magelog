<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initSomeservice()
	{
	    $someservice = 'frontend/';
	    Zend_Registry::set('path_include', $someservice); 
	}

}
