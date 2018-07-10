<?php
namespace app\index\controller;
use think\Config;
use think\Env;
use think\Controller;
use think\View;
use think\Db;

class Index
{
    public function index()
    {
        $test = 'ew';
        $test2 = ['name' => 'helloworld'];
        $b = Db::table('blog_article')->where('arc_id', 1)->find();
        print_r($b);

        return view('index',['test'=>$test,'test2' => $test2,'b' => $b]);
        // dump($_ENV);
        // $config_a = ['a' => 'wee'];
        // $config_b = ['a' => 'are'];
        // $config_c = ['c' => 'are'];
        // dump(array_merge($config_a, $config_b));
        // dump(array_merge($config_a, $config_c));
        // dump(Env::get('email'));

    }

}