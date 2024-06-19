<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try { 
                //localhost
                /* $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3380;dbname=helppro","root",""); */
                //Producion
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=helppro","u359284306_helppro","Banjersing@01");
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
            //local
            /* return "http://localhost:90/Helppro/"; */
            //Producion
            return "https://helppro.tech//";
            
        }

    }
?>