<?php

return array
(
	'environment' => array
	(
		'debug'               => FALSE,
		'trim_blocks'         => FALSE,
		'charset'             => 'utf-8',
		'base_template_class' => 'Twig_Template',
		'cache'               => APPPATH.'cache/twig',
		'templates'           => APPPATH.'views/twig',
	),
	'extensions' => array
	(
		'Twig_Extension_Escaper',
		'Kohana_Twig_Extensions',
	),
	'auto_reload'    => TRUE,
	'suffix'         => '.html',
	'context_object' => TRUE,
);