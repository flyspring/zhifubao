<?php

require '../vendor/autoload.php';

use Alipay\EasySDK\Kernel\Factory as MiniProgram;
use Alipay\EasySDK\Kernel\Config;
use Alipay\EasySDK\Kernel\Util\ResponseChecker;

$config = require 'config.php';
if (empty($config)) {
    echo 'config is empty';
    exit;
}

/**
 * 
 * @var MiniProgram $miniProgram
 */
$conf = new Config($config);
MiniProgram::setOptions($conf);
$auth = MiniProgram::base()->oauth();
$ret = $auth->getToken('xxx');

$responseChecker = new ResponseChecker();
if ($responseChecker->success($ret)) {
    echo 'ok';
} else {
    echo $ret->msg . $ret->subMsg;
}

// code2session
//$ret = $miniProgram->auth->session('');

var_dump($ret);
