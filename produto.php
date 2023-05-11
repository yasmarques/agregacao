<?php 

    class produto {

        var $descricao;
        double $quantidade;
        double $valor;

        function Imprime(){
            print 'Descrição: ' . $this->descricao . "<br>";
            print 'Qted: ' . $this->quantidade . "<br><br>"
        }

    }

?>