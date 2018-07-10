<?php

use Xervice\Core\CoreConfig;
use Xervice\DataProvider\DataProviderConfig;
use Xervice\Development\DevelopmentConfig;

$config[CoreConfig::PROJECT_LAYER_NAMESPACE] = 'Nexus';

$config[DevelopmentConfig::GENERATED_PATH] = dirname(__DIR__) . '/_Generated/Ide';
$config[DataProviderConfig::DATA_PROVIDER_GENERATED_PATH] = dirname(__DIR__) . '/_Generated';
$config[DataProviderConfig::DATA_PROVIDER_PATHS] = [
    dirname(__DIR__) . '/src/Nexus/*/Schema/',
    dirname(__DIR__) . '/vendor/xervice/*/src/Xervice/*/Schema/',
    dirname(__DIR__) . '/vendor/nexusnetsoftgmbh/*/src/*/*/Schema/'
];