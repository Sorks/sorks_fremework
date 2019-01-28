<?php

namespace app\index\controller;

use s\Config;
use s\Db;
use s\Env;

class Index
{
    public function index()
    {
        var_dump(Config::get('database'));
    }
}