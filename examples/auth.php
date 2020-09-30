<?php

require '../vendor/autoload.php';

use Alipay\EasySDK\Kernel\Factory as MiniProgram;

$config = require 'config.php';
if (empty($config)) {
    echo 'config is empty';
    exit;
}

/**
 * 
 * @var MiniProgram $miniProgram
 */
MiniProgram::setOptions($config);
$auth = MiniProgram::base()->oauth();
$ret = $auth->getToken('xxx');

// code2session
//$ret = $miniProgram->auth->session('');

var_dump($ret);
