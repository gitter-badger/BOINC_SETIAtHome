<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

$hook['post_controller_constructor'][] = array (
	'class' => 'Common',
	'function' => 'DisplayHeader',
	'filename' => 'common.php',
	'filepath' => 'hooks',
	'params' => array ()
);

$hook['post_controller'] = array (
	'class' => 'Common',
	'function' => 'DisplayFooter',
	'filename' => 'common.php',
	'filepath' => 'hooks',
	'params' => array ()
);