<?php
namespace ClassesModel;
class Pessoa
{
    protected String $nome;

    private $Cpf;

    public function __construct(string $nome, CPF $Cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->Cpf = $Cpf;
    }

    public function validaNome(string $nomeFunconario)
    {
        if (strlen($nomeFunconario) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function validaNomeFuncionario(string $nomeFunconario)
    {
        if (strlen($nomeFunconario) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    public function validaNomeTitular(string $nomeFunconario)
    {
        if (strlen($nomeFunconario) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }



    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): float
    {
        return $this->Cpf;
    }


    public function setCpf(float $Cpf): void
    {
        $this->Cpf = $Cpf;
    }









}