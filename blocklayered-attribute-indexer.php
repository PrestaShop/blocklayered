<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
Context::getContext()->controller = 'AdminController';
include(dirname(__FILE__).'/../../init.php');

if (substr(Tools::encrypt('blocklayered/index'),0,10) != Tools::getValue('token') || !Module::isInstalled('blocklayered'))
	die('Bad token');

/** @var BlockLayered $blockLayered */
$blockLayered = Module::getInstanceByName('blocklayered');
echo $blockLayered->indexAttribute();