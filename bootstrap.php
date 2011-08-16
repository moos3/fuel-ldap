<?php

Autoloader::add_core_namespace('Ldap');
Autoloader::add_classes(array(
	'Ldap\\Ldap' => __DIR__.'/classes/ldap.php',
	'Ldap\\Auth_Ldap' => __DIR__.'/classes/auth_ldap.php'
));