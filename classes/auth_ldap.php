<?php

namespace Auth;

class Auth_Ldap extends \Auth_Login_Driver {
	
	public function __construct() {
		\LDAP::load();
		\LDAP::connect();
	}

	public function login(){
		if (LDAP::bind(true)){
			$result = \LDAP::authenticate($username,$password);
			if ($result){
			
			}else{
				throw new \Fuel_Exception('Username or Password is incorrect');
			}
		}else{
			throw new \Fuel_Exception('Failed to bind Authentication Server');
		}
	}
	
}