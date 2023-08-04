<?php
/**
 * SE HA AGREGADO 2 FUNCTION PARA MEDIDAS DE SEGURIDAD BRO
 * NO SE TOCAN NI SE EXTIENDEN NINGUNA DE LAS 2 SOLO QUEDA ASI
 */
class Database {
    private static $hostname = "localhost";
    private static $dbname = "blog";
    private static $username = "root";
    private static $password = "";
    protected static $conn;

    // Método privado para evitar instanciar esta clase
    private function __construct() {}

    // Conexión a la base de datos utilizando PDO
    public static function getConnection() {
        if (self::$conn === null) {
            try {
                $dsn = "mysql:host=" . self::$hostname . ";dbname=" . self::$dbname . ";charset=utf8mb4";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                self::$conn = new PDO($dsn, self::$username, self::$password, $options);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$conn;
    }

    // Método privado para evitar la clonación de esta clase
    private function __clone() {}
}