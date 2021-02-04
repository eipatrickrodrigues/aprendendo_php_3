<?php 

class Lutador {

    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos
    public function apresentar(){
        echo "<p>-----------------------------</p>";
        echo "<br>Lutador: ".$this->getNome();
        echo "<br>Origem: ".$this->getNacionalidade();
        echo "<br>Idade: ".$this->getIdade();
        echo "<br>Altura: ".$this->getAltura();
        echo "<br>Pesando: ".$this->getPeso()." kg";
        echo "<br>Vit: ".$this->getVitorias()."/ Der: ".$this->getDerrotas()."/ Emp: ".$this->getEmpates();
    }
    public function status(){
        echo "<p>-----------------------------</p>";
        echo $this->getNome(). "Vit: ".$this->getVitorias()."/ Der: ".$this->getDerrotas()."/ Emp: ".$this->getEmpates();
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    // Método construtor

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) 
    {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);    
        $this->setEmpates($empates);
    }

    // Setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function setCategoria()
    {   
        if($this->peso <= 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso<=70.3){
            $this->categoria = "Peso leve";
        }elseif($this->peso<=83.9){
            $this->categoria = "Peso médio";
        }elseif($this->peso<=120.2){
            $this->categoria = "Peso pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    } 
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    // getters

    public function getNome()
    {
        return $this->nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getPeso()
    {
        return $this->peso;
    } 
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getVitorias()
    {
        return $this->vitorias;
    } 
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }











}