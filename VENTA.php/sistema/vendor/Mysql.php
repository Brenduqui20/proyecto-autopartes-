<?php

class Mysql extends conexion{
    private $conexion;
    private $strquery;
    private $arrvalues;

    function _construct(){
        $this->conexion=new Conexión ();
        $this->conexion= $this->conexion->conect();
    }
 //insetar registro
public function insert (string $query, array $arrayvalues)
{
    $this->strquery=$query;
    $this->arrValues=$arrvalues;

$insert =$this->conexion->prepare($this->strquery);
$resInsert=$insert->execute($this->arrValues);
if($resInsert){
    $lasInsert=$this ->conexion->lastInsertID();
}else{
    $lasInsert=0;
}
return $lasInsert;
}

public function select(string $query)
{
    $this->strquery=$query;
    $result=$this->$this->conexion->prepare($this->strquery);
    $result=$execute ();
    $data= $result ->fetch(PDO:: FECH_ASSOC);
    return $data;
}

public function select_all(string $query)
{
    $this->stryquery=$query;
    $result = $this->conexion ->prepare($this->stryquery);
     $result->execute();
     $data=$result->fetchall (PDO::)
}
}
?>