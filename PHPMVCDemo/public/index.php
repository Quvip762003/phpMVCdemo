<?php

require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBConnection.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'home') {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}
// else if($controller == 'patient'){
//     require_once APP_ROOT.'/app/controllers/HomeController.php';
//     $patientController = new HomeController();
//     $patientController->index();
// }
else {
    echo "nothing";
    // require_once APP_ROOT.'/app/controllers/HomeController.php';
    // $homeController = new HomeController();
    // $homeController->addController($name, $gender);
}
switch ($action){
    case 'ADD':
        require_once APP_ROOT . '/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $name = $_GET['Name'];
        $gender = $_GET['Gender'];
        $homeController->addController($name, $gender);
    case 'EDIT':
        require_once APP_ROOT . '/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $id = $_REQUEST['id'];
        $name = $_GET['Name'];
        $gender = $_GET['Gender'];
        $homeController->editController($name, $gender, $id);


}

