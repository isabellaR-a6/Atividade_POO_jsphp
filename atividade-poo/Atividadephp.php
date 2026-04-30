<?php

class pessoas
{
    public $nome;
    public $funcao;

    private $salario;

    public function verSalario(){
        return $this->salario;
    }

    public function __construct($nome, $funcao, $salario = null)
    {
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->salario = $salario;
    }
}

class aluno extends pessoas{
    public function falar(){
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e eu não tenho salário";
    }
}

class professor extends pessoas{
    public function falar(){
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}

class Diretor extends pessoas{
    public function falar(){
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}

class Funcionário extends pessoas{
    public function falar(){
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}

$palloma = new aluno ("Palloma", "Aluno");
$mago = new professor ("Raul", "Professor", 10200);
$marcos = new Diretor ("Marcos Alves", "Diretor", 26200);
$bena = new Funcionário ("Tia Bena", "Funcionário", 3000);
$elisa = new Funcionário ("Elisa", "Funcionário", 8000);

$palloma->falar();
$mago->falar();
$marcos->falar();
$bena->falar();
$elisa->falar();

?>