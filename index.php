<?php

namespace s;

use s\facade\App;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', rtrim($_SERVER['DOCUMENT_ROOT'], '/').'/');

require __DIR__.'/vendor/sorks/library/s/Loading.php';

// 注册自动加载
Loading::register();

App::run();