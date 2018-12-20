<?php
class Aulas extends model {

    public function getAulas($id_modulo){
        $lista = array();

        $sql = "SELECT * FROM aulas WHERE id_modulo = :id ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id_modulo);
        $sql->execute();

        if($sql->rowCount() > 0){
            $lista = $sql->fetchAll();
        }

        return $lista;
    }

}