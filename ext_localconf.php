<?php
		// register system service
	// t3lib_extMgm::addService($_EXTKEY,  'auth' /* sv type */,  'tx_Authenticator_Services_Auth' /* sv key */,
/*
				array(

					'title' => 'User authentication with Google Authenticator',
					'description' => 'Authentication with username/password/onetimepassword.',

					'subtype' => 'getUserBE,authUserBE,getUserFE,authUserFE,getGroupsFE',

					'available' => FALSE,
					'priority' => 40,
					'quality' => 50,

					'os' => '',
					'exec' => '',

					'classFile' => t3lib_extMgm::extPath($_EXTKEY).'Classes/Services/Auth.php',
					'className' => 'tx_Authenticator_Services_Auth',
				)
			);
*/

// Add hooks to the backend login form
// Useless, if RSA is enabled
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginFormHook'][$_EXTKEY] = 'Tx\Authenticator\Hooks\LoginFormHook->getLoginFormTag';
//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/index.php']['loginScriptHook'][$_EXTKEY] = 'Tx\Authenticator\Hooks\LoginFormHook->getLoginScripts';

// Register hook for user auth, use post user lookup as next possible hook AFTER user authentication
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['postUserLookUp'][] = 'Tx\Authenticator\Hooks\UserAuthHook->postUserLookUp';