<?php

namespace App\Model\Entity;

class Client
{
  /**
   * @var integer
   */
  private $id;

  /**
   * @var string
   */
  private $nome;

  /**
   * @var date
   */
  private $dataNascimento;

  /**
   * @var integer
   */
  private $cpf;

  /**
   * @var integer
   */
  private $rg;

  /**
   * @var integer
   */
  private $telefone;

  /**
   * @var date
   */
  private $dataAtualizacao;

  /**
   * @var date
   */
  private $dataCriacao;

  /**
   * @var date
   */
  private $dataRemovido;


  /**
   * @return string
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * @param string $nome
   * @return 
   */
  public function setNome($nome)
  {
    $this->nome = $nome;
    return $this;
  }

  /**
   * @return string
   */
  public function getDataNascimento()
  {
    return $this->dataNascimento;
  }

  /**
   * @param string $dataNascimento
   * @return 
   */
  public function setDataNascimento($dataNascimento)
  {
    $this->dataNascimento = $dataNascimento;
    return $this;
  }

  /**
   * @return string
   */
  public function getCpf()
  {
    return $this->cpf;
  }

  /**
   * @param string $Cpf
   * @return 
   */
  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
    return $this;
  }

  /**
   * @return string
   */
  public function getRg()
  {
    return $this->rg;
  }

  /**
   * @param string $rg
   * @return 
   */
  public function setRg($rg)
  {
    $this->rg = $rg;
    return $this;
  }

  /**
   * @return string
   */
  public function getTelefone()
  {
    return $this->telefone;
  }

  /**
   * @param string $telefone
   * @return 
   */
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
    return $this;
  }

  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $id
   * @return 
   */
  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getDataAtualizacao()
  {
    return $this->dataAtualizacao;
  }

  /**
   * @param string $dataAtualizacao
   * @return 
   */
  public function setDataAtualizacao($dataAtualizacao)
  {
    $this->dataAtualizacao = $dataAtualizacao;
    return $this;
  }

  /**
   * @return string
   */
  public function getDataCriacao()
  {
    return $this->dataCriacao;
  }

  /**
   * @param string $ddataCriacao
   * @return 
   */
  public function setDataCriacao($dataCriacao)
  {
    $this->dataCriacao = $dataCriacao;
    return $this;
  }

  /**
   * @return string
   */
  public function getDataRemovido()
  {
    return $this->dataRemovido;
  }

  /**
   * @param string $dataRemovido
   * @return 
   */
  public function setDataRemovido($dataRemovido)
  {
    $this->dataRemovido = $dataRemovido;
    return $this;
  }
}
