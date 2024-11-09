<?php 

class UserController
{
    public $modelUser;
    public function __construct()
    {
        $this->modelUser = new User();
    }


}