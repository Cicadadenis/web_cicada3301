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
 File: fullsite.php
-----------------------------------------------------
 Use: WYSIWYG for website news
=====================================================
*/

if( !defined( 'DATALIFEENGINE' ) ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../../' );
	die( "Hacking attempt!" );
}

$fullarea = <<<HTML
    <div class="wseditor"><textarea id="full_story" name="full_story" class="wysiwygeditor" style="width:98%;height:200px;">{$row['full_story']}</textarea></div>
HTML;

?>