<?php 

class Endereco
{
    private string $Estado;
    private string $Cidade;
    private string $Bairro;
    private string $Rua;
    private string $Numero;

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->Estado;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->Cidade;
    }

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->Bairro;
    }

    /**
     * @return string
     */
    public function getRua(): string
    {
        return $this->Rua;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->Numero;
    }


    public function __construct( string $Estado, string $Cidade,  string $Bairro,  string $Rua, string $Numero) {

        $this->Estado = $Estado;
        $this->Cidade = $Cidade;
        $this->Bairro = $Bairro;
        $this->Rua = $Rua;
        $this->Numero = $Numero;
    }

   public function __toString()
   {
       return $this->Estado . ',' . $this-> Cidade . ',' . $this->Bairro . ',' . $this-> Rua . ',' . $this->Numero;

   }
   

}


