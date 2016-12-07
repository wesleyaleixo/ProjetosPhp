<?php
/**
 *
 * @author Wesley Aleixo
 */
require_once 'Pessoa.php';
class Aluno extends Pessoa {
   
    private $matricula;
    private $cusro;
    
    public function cancelarMatricula(){
        
        echo "<p>Matricula será cancelada</p>";
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCusro() {
        return $this->cusro;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCusro($cusro) {
        $this->cusro = $cusro;
    }
}
