<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projetos Php</title>
    </head>
    <body>
        <?php
             
              require_once 'Pessoa.php';
              require_once 'Livro.php';
              
              $p[0] = new Pessoa("Pedro", 22, "M");
              $p[0] = new Pessoa("Maria", 31, "F");
              
              $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                
              $l[0]->detalhes();
        
//            require_once 'Lutador.php';
//            require_once 'Luta.php';
//            
//            $l = array();
//            
//            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
//            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
//            
//            $UEC01 = new Luta();
//            $UEC01->marcarLuta($l[0], $l[1]);
//            $UEC01->lutar();
//            $l[0]->status();
//            $l[1]->status();
            
            //$l[0]->perdeLuta();
            //$l[0]->apresentar();
            //$l[0]->status();            
        ?>
    </body>
</html>
