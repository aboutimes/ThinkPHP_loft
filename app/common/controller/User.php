<?php
  namespace app\common\controller;
  /**
  * 
  */
  class User
  {
    public function myName($value='')
    {
      return "your name is {$value}";
    }
  }