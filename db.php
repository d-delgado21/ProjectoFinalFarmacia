<?php

class Db
{
    private static $instance = NULL;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public static function getConnect()
    {
        try {
            if (!isset(self::$instance)) {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=farmacia",
                    "root",
                    ""
                );
            }
            return self::$instance;
        } catch (PDOException $e) {
            echo "Falló la conexión: " . $e->getMessage();
        }
    }
}
?>

<?php
$servername = "localhost";
$database = "farmacia";
$username = "root";
$password = "";
$conexion = mysqli_connect($servername,$username,$password,$database);
?>
