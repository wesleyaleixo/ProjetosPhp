<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projetos Php</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            
            $l = array();
            
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            
            $l[0]->perdeLuta();
            $l[0]->apresentar();
            $l[0]->status();            
        ?>
    </body>
</html>
