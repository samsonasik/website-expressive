<?php
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\Config;

// Create a ServiceManager from service_manager config and register the merged config as a service
$config = include __DIR__ . '/config.php';
$sm = new ServiceManager(new Config($config['service_manager']));
$sm->setService('config', $config);

// Return the fully configured ServiceManager
return $sm;
