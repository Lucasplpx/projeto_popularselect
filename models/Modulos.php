<?php
class Modulos extends model {

    public function getList(){

        $lista = array();

        $sql = "SELECT * FROM modulos";
        $sql = $this->db->query($sql);

        if($sql->rowCount()){
            $lista = $sql->fetchAll();
        }

        return $lista;
    }


}