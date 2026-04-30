class pessoas {
    #salario
    constructor (nome, funcao, salario){
        this.nome = nome;
        this.funcao = funcao;
        this.#salario = salario;
    };

    verSalario = () => this.#salario;
}

class aluno extends pessoas{
    falar = () => console.log (`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} mas não tenho salário`);
}

class Professor extends pessoas{
    falar = () => console.log (`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.salario}`);
}

class Diretor extends pessoas{
    falar = () => console.log (`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.salario}`);
}

class Funcionário extends pessoas{
    falar = () => console.log (`Olá meu nome é ${this.nome} e eu sou um ${this.funcao} e meu salário é ${this.salario}`);
}

const palloma = new aluno ("Palloma", "aluno", 167);
const mago = new Professor ("Raul", "Professor", 10.200);
const marcos = new Diretor ("Marcos Alves", "Diretor", 26.000);
const bena = new Funcionário ("Tia Bena", "Funcionário", 2.000);
const elisa = new Funcionário("Elisa", "Funcionário", 8.000);

palloma.falar();
mago.falar();
marcos.falar();
bena.falar();
elisa.falar();


