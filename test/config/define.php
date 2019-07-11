<?php

use \Swoft\App;

// Constants
!defined('DS') && define('DS', DIRECTORY_SEPARATOR);
// 系统名称
!defined('APP_NAME') && define('APP_NAME', 'swoft');
// 基础根目录
!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__, 1));

// 注册别名
$aliases = [
    '@root'       => BASE_PATH,
    '@app'        => '@root/app',
    '@runtime'    => '@root/runtime',
    '@configs'    => '@root/config',
    '@resources'  => '@root/resources',
    '@beans'      => '@configs/beans',
    '@properties' => '@configs/properties',
    '@commands'   => '@app/Commands',
    '@console'    => '@beans/console.php',
];
App::setAliases($aliases);
