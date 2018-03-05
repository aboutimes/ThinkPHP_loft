<?php
namespace app\index\controller;
use app\common\controller\User as commonUser;
/**
*   
*/
class User extends commonUser
{
  public function show($value='')
  {
    return $this->myName('book');
  }
}