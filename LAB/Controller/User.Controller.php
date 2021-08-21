<?php

Class User
{ 
    public $usuario;
    public $smarty;
    public function __construct()
    { 
       $this->usuario=new Usuario();
       $this->smarty=new Smarty();
    }

    public function BuscarUsuario()
    { 
        $user=$__POST['user'];
        $pass=$__POST['pass'];
        $u=$this->usuario->BuscarUsuario($user,$pass);

        if($u->num_rows==1)
        { 
            echo "user ok";
        }
        else if ($u->num_rows>1)
        { 
            $this->smarty->assign('title','login');
            $this->smarty->display('Home.tpl');
        }
        else
        { 
            $this->smarty->assign('title','login');
            $this->smarty->display('Home.tpl');
        }
    }

}

?>