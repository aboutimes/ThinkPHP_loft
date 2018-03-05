<?php
  namespace app\admin\controller;
  use app\common\controller\Index as commonIndex;

  class Index
  {
    public function index()
    {
        return 'admin hello world';
    }
    public function common()
    {
      $a = new commonIndex();
      return $a->index();
    }
  }
