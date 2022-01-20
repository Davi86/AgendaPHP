<?php

    namespace Classes;

    use Models\ModelConexao;

    class ClassEvents extends ModelConexao {
        #Trazer ods dados de eventos do banco
        public function getEvents(){
            $b=$this->conectaDB()->prepare("select * from events");
            $b->execute();
            $f=$b->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($f);
        }
    }

?>
