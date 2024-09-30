<?php
include_once '../models/A&DRecord.php';

class ADController {
    private $adRecord;

    public function __construct() {
        $this->adRecord = new ADRecord();
    }

    public function addRecord($data) {
        if ($this->adRecord->create($data)) {
            echo "A&D record added.";
        } else {
            echo "Error adding A&D record.";
        }
    }

    public function viewRecords() {
        return $this->adRecord->getAll();
    }
}
?>

