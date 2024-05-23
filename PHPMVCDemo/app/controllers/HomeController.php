<?php

// require_once APP_ROOT . '/app/services/PatientService.php';
require_once '/xampp/htdocs/PHPMVCDemo/app/services/PatientService.php';

class HomeController
{
    public function index()
    {
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        include APP_ROOT . '/app/views/home/index.php';
    }

    public function addController($name,$gender)
    {
        // require APP_ROOT . '/app/views/patient/add.php';
        $patientService = new PatientService();
        $patientService->AddPatient($name, $gender);
        header("Location:"."http://localhost/PHPMVCDemo/public/");
    }

    public function editController($name, $gender, $id){
        $patientService = new PatientService();
        $patientService->EditPatient($name, $gender, $id);
        header("Location:"."http://localhost/PHPMVCDemo/public/");
    }   
}
