<?php
/*
=====================================================
 Cicada 3301 - by Cicada Media Group
-----------------------------------------------------
 https://github.com/cicadadenis/
-----------------------------------------------------
 Copyright (c) 2022-2022 Cicada Media Group
=====================================================
 This code is protected by copyright
=====================================================
*/

@ob_start ();
@ob_implicit_flush (0);

@error_reporting ( E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE );
@ini_set ( 'error_reporting', E_ALL ^ E_WARNING ^ E_DEPRECATED ^ E_NOTICE );

@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );

define ( 'DATALIFEENGINE', true );
define ( 'ROOT_DIR', dirname ( __FILE__ ) );
define ( 'ENGINE_DIR', ROOT_DIR . '/engine' );

require_once (ENGINE_DIR . '/classes/plugins.class.php');
require_once (DLEPlugins::Check(ROOT_DIR . '/engine/init.php'));

?>