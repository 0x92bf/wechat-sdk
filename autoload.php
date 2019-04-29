<?php
spl_autoload_register(function ($class) {
    if (false !== stripos($class, 'szj\WechatPhpSdk')) {
        require_once __DIR__.'/src/'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 4)).'.class.php';
    }
});
