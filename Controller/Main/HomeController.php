<?php

namespace Controller\Main;


use Model\Repository\MainFunction\UserRepository;
use Route\Show\View;

class HomeController
{
    private $Username;

    public function __construct()
    {
        $this->Username=new UserRepository();
    }
    public function Index()
    {
        $Item= $this->Username->Find(1);
        $Viewbag="SIMPLIST";
        View::Process("Main.Home.Index",compact('Item'));
    }
    public function Aboutus()
    {
        View::Process("Main.Home.Aboutus");
    }
}