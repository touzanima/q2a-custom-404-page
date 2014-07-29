<?php

/*
	Plugin Name: Custom 404 Page
	Plugin URI: https://github.com/amiyasahu/q2a-custom-404-page
	Plugin Description: Customized 404 page for Question2Answer site 
	Plugin Version: 1.1
	Plugin Date: 2014-07-25
	Plugin Author: Amiya Sahu 
	Plugin Author URI: http://amiyasahu.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.3.2
	Plugin Update Check URI: https://raw.githubusercontent.com/amiyasahu/q2a-custom-404-page/master/qa-plugin.php
*/
/*
	NOTE : This plugin is forked from https://github.com/ProThoughts/q2a-custom-404-page 
	Code Credits : ProThoughts 
*/
if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}
define('QA_404_FOLDER_NAME', basename(dirname(__FILE__)));

qa_register_plugin_layer('qa-custom-404-page-layer.php', 'Custom 404 Page');
qa_register_plugin_module('module', 'qa-custom-404-page-options.php', 'pt_qa_custom_404_page', 'Custom 404 Page Options');
	
/*
	Omit PHP closing tag to help avoid accidental output
*/
