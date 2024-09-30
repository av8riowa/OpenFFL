<?php
include_once '../config/database.php';

class ADRecord {
    private $conn;
    private $table_name = "ad_records";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table_name . " (serial_number, manufacturer, model, date_acquired) 
                  VALUES (:serial_number, :manufacturer, :model, :date_acquired)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':serial_number', $data['serial_number']);
        $stmt->bindParam(':manufacturer', $data['manufacturer']);
        $stmt->bindParam(':model', $data['model']);
        $stmt->bindParam(':date_acquired', $data['date_acquired']);
        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

