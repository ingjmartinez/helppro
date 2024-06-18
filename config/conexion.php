<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3380;dbname=helppro","root","");
                return $conectar;
            } catch (Exception $e) {
                print "!Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }        
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }


        public static function ruta(){
            return "http://localhost:90/Helppro/";
            return "http://10.0.0.5:90/Helppro/";
        }

    }
?>