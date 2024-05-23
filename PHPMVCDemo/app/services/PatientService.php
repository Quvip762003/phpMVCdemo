<?php

// require_once APP_ROOT . '/app/models/Patient.php';
require_once '/xampp/htdocs/PHPMVCDemo/app/models/Patient.php';
require_once '/xampp/htdocs/PHPMVCDemo/app/libs/DBConnection.php';
class PatientService
{

    public function getAllPatients()
    {
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM patients";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row['id'], $row['name'], $row['gender']);
                    $patients[] = $patient;
                }

                return $patients;
            }
        }
    }
    public function getOnePatient($id){
        $patient = [];
        $dbConnection = new DBConnection();
        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM patients WHERE id = '$id' ";
                $stmt = $conn->query($sql);
                $row = $stmt->fetch();
                $pat = new Patient($row['id'], $row['name'], $row['gender']);
                $patient[]=  $pat;
                
                return $patient;
            }
        }
    }

    public function AddPatient($name, $gender)
    {
        $dbConnection = new DBConnection();
        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sqlInsert = "INSERT INTO patients (name,gender) VALUES ('$name','$gender') ";
                $querryInsert = $conn->prepare($sqlInsert);
                $querryInsert->execute();
            }
        }
    }

    public function EditPatient($name, $gender, $id){
        $dbConnection = new DBConnection();
        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sqlUpdate = "UPDATE patients SET name = '$name', gender = '$gender' WHERE id = '$id'  ";
                $querryInsert = $conn->prepare($sqlUpdate);
                $querryInsert->execute();
            }
        }
    }
}
