<?php
class Conectar
{
    protected $dbh;
    public function conexion()
    {
       
        try {    

            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=vivago_reserves","root","");   
            $conectar->query("SET NAMES 'utf8'");
          
            return $conectar;
    
        } catch (Exception $e) {

            print "¡Error!: " . $e->getMessage() . "<br/>";
           die();  
            
        }
    }
}