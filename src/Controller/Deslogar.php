<?php

namespace Alura\Cursos\Controller;

class Deslogar implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {   
        session_destroy(); // outra forma é usando unset($_SESSION[‘logado’]);
       header('Location: /login');
       
       
    }

}