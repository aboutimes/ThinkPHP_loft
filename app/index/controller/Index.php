<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // return 'hello world';
        // dump(config());
        $config_a = ['a' => 'wee'];
        $config_b = ['a' => 'are'];
        $config_c = ['c' => 'are'];
        dump(array_merge($config_a, $config_b));
        dump(array_merge($config_a, $config_c));
    }
}