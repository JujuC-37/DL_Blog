<?php
    require_once("./config.php");

    class DataBase {
        const DB_ADRESS = "mysql:host=" . SERVEUR_NAME . ";dbname=" . DB_NAME;

        // --------------- attributes/methods class ----------------
        private static $instance = null;

        public static function connectDB() {
            if(self::$instance === null) {
                try {
                    self::$instance = new DataBase();
                }
                catch (PDOException $err) {
                    echo $err->getCode();
                    echo $err->getMessage();
                    exit();
                }
            }
            return self::$instance;
        }

        // ---------------------- attributes -----------------------
        private $establishedConnection;

        // -------------------- public methods ---------------------
        public function __construct() {
            $this->establishedConnection = new PDO(self::DB_ADRESS, DB_USER, DB_PASSWORD);
        }

        public function getAllArticles() {
            $table = DB_TABLE_ARTICLES;
            $queryString = "SELECT * FROM $table WHERE 1";

            // ----- prepare -----
            try {
                $myQuery = $this->establishedConnection->prepare($queryString);
            }
            catch(PDOException $err) {
                echo $err->getCode();
                echo "<br>";
                echo $err->getMessage();
                exit();
            }
            if($myQuery == false) {
                echo "erreur lors de la préparation de la requête...";
                exit();                
            }

            // --- execute -----
            if(!$myQuery->execute()) {
                echo "erreur lors de l\'exécution de la requête...";
                exit();                
            }
            
            // ----- fetchall -----
            $response = $myQuery->fetchAll();

            if( count($response) > 0) {
                return $response;
            }
            else {
                echo "erreur lors de la récupération des données...";
                exit();
            }
        }

        // -------------------- private methods --------------------
    }


?>