<?php
namespace CodeNetti\Projetos\ClassesModel;
class Funcionario extends Pessoa
{
private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function validaNomeFuncionario(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }



    public function getNome(): string
    {
        return $this->cargo;
    }
    public function setNome(string $nome): void
    {
        $this-> validaNome($this->nome);
        $this->cargo = $nome;
    }





}

