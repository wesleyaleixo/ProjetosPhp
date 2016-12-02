<?php
/**
 *
 * @author Wesley Aleixo
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    
    private $livro;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes(){
        
        echo "Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Páginas: " . $this->totPaginas;
        echo "<br> Sendo lido por " . $this->autor->getNome();
    }
    
    function __construct($livro, $autor, $totPaginas, $pagAtual, $leitor) {
        $this->livro = $livro;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->leitor = 0;
    }
    
    function getLivro() {
        return $this->livro;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setLivro($livro) {
        $this->livro = $livro;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        
        $this->aberto = true;
    }

    public function avancarPagina() {
        
        $this->pagAtual ++;
    }

    public function fechar() {
        
        $this->aberto = false;
    }

    public function folhear($p) {
        
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPagina() {
        
        $this->pagAtual --;
    }
}
