<?php
class Osztaly
{   
    private $connection;
    
    public function __construct() 
    {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getAll(){
        $sql="SELECT * FROM haztartasi_gepek"; 
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    function create($machinedata){
        $sql = "INSERT INTO haztartasi_gepek(gep,gyarto,sorozat,megjelenes,smart_funkcio)
        VALUES (?,?,?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $gep = $machinedata['gep'];
        $gyarto = $machinedata['gyarto'];
        $sorozat = $machinedata['sorozat'];
        $megjelenes = $machinedata['megjelenes'];
        $smart_funkcio = $machinedata['smart_funkcio'];
        $stmt->bind_param("ssssd", $gep, $gyarto, $sorozat, $megjelenes, $smart_funkcio);
        $stmt->execute();
    }

}
?>