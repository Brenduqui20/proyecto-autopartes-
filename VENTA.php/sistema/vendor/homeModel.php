<?php
class homeModel extends Mysql{
    public function _construct();
    {
        parent::_construct();
    }

    public function serUser(string $nombre, int $edad)

    $query_insert="INSERT into usuario(nombre, edad) values (?, ?)";
    $arrData-array($nombre, $edad);
    $request_insert=$this->insert($query_insert, $arrData)

}