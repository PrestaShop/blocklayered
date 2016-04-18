<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_1_3($object)
{
    return $object->registerHook('productSearchProvider');
}