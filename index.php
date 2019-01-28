<?php

namespace s;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);

require __DIR__.'/vendor/sorks/library/s/Loading.php';

// 注册自动加载
Loading::register();

// 执行框架应用
Container::get()->run();