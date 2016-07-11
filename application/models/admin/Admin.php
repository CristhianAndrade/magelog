<?php

// application/models/admin/User.php
 
abstract class Application_Model_Admin_Admin
{
	protected static $_admin_session;


	public function getId(){

	}


	public static function checkSession(){
        
  		if(self::getSession() == NULL || !isset(self::getSession()->user)){
  			return false;
  		}
  		else if(isset(self::getSession()->user) && is_numeric(self::getSession()->user->getId())){
  			return true;
  		}
	}

	public static function getSession(){

		return self::$_admin_session = new Zend_Session_Namespace('admin_session');

	}


}