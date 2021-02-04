<?php 
require_once 'Lutador.php';
class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Métodos
    public function marcarLuta($lutador1,$lutador2){
        if (($lutador1->getCategoria() == $lutador2->getCategoria()) and ($lutador1 != $lutador2)){
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
            echo "Luta aprovada!";
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "Luta inválida!";
        }

    }
    public function lutar(){
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $this->vencedor = rand(0,2);
            switch ($this->vencedor){

                case 0: //empate
                    echo "<p>-----------------------------</p>";
                    echo "<br>Empate";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // ganhou desafiado
                    echo "<p>-----------------------------</p>";
                    echo"<br>Vencedor: ". $this->getDesafiado()->getNome();
                    echo"<br>Perdedor: ". $this->getDesafiante()->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // ganhou desafiante
                    echo "<p>-----------------------------</p>";
                    echo "<br>Vencedor: ". $this->getDesafiado()->getNome();
                    echo "<br>Perdedor: ". $this->getDesafiante()->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;

            }
        }

    }

    // Setters
    
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }

    // Getters

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }
}