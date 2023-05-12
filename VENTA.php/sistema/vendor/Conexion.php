<?php
class conexion{

    private \PDO $conect;

    public function _construct()
    {
        $connectionString= "mysql_host=".DB_HOST."dbname="-DBNAME.";.DB_CHARSET.";
        try{
            $this-> conect =new PDO($connectionString, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPT);


            //MENSAJE DE CONEXIÓN EXITOSA
        }catch (PDOException $e){
            $this->conect ='Error de conexión';
            echo "Error: " .$e->getMessage();
        }
    }
}
public function conect(){
    return $this->conect;
}

}
?>
