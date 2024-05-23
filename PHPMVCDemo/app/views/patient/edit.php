<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit patient</title>
    <link rel="stylesheet" href="../../../../framework/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../../../framework/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php
    require '/xampp/htdocs/PHPMVCDemo/app/services/PatientService.php';
    $patientService = new PatientService();
    $patient = $patientService->getOnePatient($_REQUEST['id']);
    $id = $_REQUEST['id'];

    ?>

    <?php foreach ($patient as $pat) { ?>
        <div class="container shadow p-3 mb-3 mt-3 rounded">
            <h3 class="text-center text-uppercase text-success mt-3 mb-3 ">Edit Patient</h3>
            <form action="http://localhost/PHPMVCDemo/public/index.php" method="get">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="" value="<?= $pat->getFullName(); ?>" />
                    <label for="Name">Name</label>
                </div>
                <input type="text" name="id" value="<?= $id; ?>" style="display: none;">
                <input style="display: none;" type="text" id="gendercheck" value="<?= $pat->getGender() ?>">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="Nam" value="1" />
                    <label class="form-check-label" for="">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="Nu" value="0" />
                    <label class="form-check-label" for="">Nữ</label>
                </div>
                <div class="d-grid ">
                    <input type="submit" name="action" value="EDIT" class="btn btn-outline-success ">
                </div>

            </form>

        </div>
    <?php } ?>
</body>

</html>