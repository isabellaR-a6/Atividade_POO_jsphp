# README – Exercícios de Programação Orientada a Objetos (POO) em JavaScript e PHP

Este repositório contém exercícios básicos de **Programação Orientada a Objetos (POO)** em JavaScript e PHP.
Cada arquivo demonstra um conceito importante usado no desenvolvimento de sistemas.

---

# Estrutura dos Arquivos

## 1. `Atividadejs.js`

### Conceitos: Classes, Herança e Encapsulamento

Este arquivo demonstra o uso de classes com herança e atributos privados em JavaScript.

---

### Código explicado:

```js
class pessoas {
    #salario;

    constructor(nome, funcao, salario) {
        this.nome = nome;
        this.funcao = funcao;
        this.#salario = salario;
    }

    verSalario() {
        return this.#salario;
    }
}
```

---

### Herança:

```js
class aluno extends pessoas {
    falar() {
        console.log(`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} mas não tenho salário`);
    }
}

class Professor extends pessoas {
    falar() {
        console.log(`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.verSalario()}`);
    }
}

class Diretor extends pessoas {
    falar() {
        console.log(`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.verSalario()}`);
    }
}

class Funcionario extends pessoas {
    falar() {
        console.log(`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.verSalario()}`);
    }
}
```

---

### Objetos criados:

```js
const palloma = new aluno("Palloma", "Aluno");
const mago = new Professor("Raul", "Professor", 10200);
const marcos = new Diretor("Marcos Alves", "Diretor", 26200);
const bena = new Funcionario("Tia Bena", "Funcionário", 3000);
const elisa = new Funcionario("Elisa", "Funcionário", 8000);

palloma.falar();
mago.falar();
marcos.falar();
bena.falar();
elisa.falar();
```

---

### Saída esperada:

```bash
Olá meu nome é Palloma e eu sou um Aluno mas não tenho salário
Olá meu nome é Raul e eu sou um Professor e meu salário é 10200
Olá meu nome é Marcos Alves e eu sou um Diretor e meu salário é 26200
Olá meu nome é Tia Bena e eu sou um Funcionário e meu salário é 3000
Olá meu nome é Elisa e eu sou um Funcionário e meu salário é 8000
```

---

## 2. `Atividadephp.php`

### Conceitos: Classes, Herança e Encapsulamento

Este arquivo apresenta os mesmos conceitos utilizando PHP.

---

### Código explicado:

```php
class pessoas
{
    public $nome;
    public $funcao;

    private $salario;

    public function __construct($nome, $funcao, $salario = null)
    {
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->salario = $salario;
    }

    public function verSalario()
    {
        return $this->salario;
    }
}
```

---

### Herança:

```php
class aluno extends pessoas {
    public function falar() {
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e eu não tenho salário";
    }
}

class professor extends pessoas {
    public function falar() {
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}

class Diretor extends pessoas {
    public function falar() {
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}

class Funcionario extends pessoas {
    public function falar() {
        echo "Olá meu nome é {$this->nome} e eu sou um {$this->funcao} e meu salário é {$this->verSalario()}";
    }
}
```

---

### Objetos criados:

```php
$palloma = new aluno("Palloma", "Aluno");
$mago = new professor("Raul", "Professor", 10200);
$marcos = new Diretor("Marcos Alves", "Diretor", 26200);
$bena = new Funcionario("Tia Bena", "Funcionário", 3000);
$elisa = new Funcionario("Elisa", "Funcionário", 8000);

$palloma->falar();
echo PHP_EOL;
$mago->falar();
echo PHP_EOL;
$marcos->falar();
echo PHP_EOL;
$bena->falar();
echo PHP_EOL;
$elisa->falar();
```

---

### Saída esperada:

```bash
Olá meu nome é Palloma e eu sou um Aluno e eu não tenho salário
Olá meu nome é Raul e eu sou um Professor e meu salário é 10200
Olá meu nome é Marcos Alves e eu sou um Diretor e meu salário é 26200
Olá meu nome é Tia Bena e eu sou um Funcionário e meu salário é 3000
Olá meu nome é Elisa e eu sou um Funcionário e meu salário é 8000
```

---

# Conceitos de POO Utilizados

| Conceito       | Explicação                     |
| -------------- | ------------------------------ |
| Classe         | Molde para criar objetos       |
| Objeto         | Instância de uma classe        |
| Herança        | Reutilização de código         |
| Encapsulamento | Proteção de atributos privados |

---

# Tecnologias Utilizadas

* JavaScript
* PHP
* Programação Orientada a Objetos (POO)

---

# Autor

Exercícios desenvolvidos para estudo de Programação Orientada a Objetos.
