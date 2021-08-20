<?php
class Home
{
    public $smarty;
    public function __construct()
    {
       $this->smarty=new Smarty();
    }

    public function Inicio()
    {
       $this->smarty->assign('title','login');
       $this->smarty->display('Home.tpl');
        
    }
}
?>
