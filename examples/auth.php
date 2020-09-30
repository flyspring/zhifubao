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
$miniProgram = new MiniProgram($config);

// code2session
$ret = $miniProgram->auth->session('');

var_dump($ret);
