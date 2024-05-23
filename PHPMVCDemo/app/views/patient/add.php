<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="../../../../framework/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container shadow p-3 mb-3 rounded  ">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3 ">Add Patient</h3>

        <form action="http://localhost/PHPMVCDemo/public/index.php" method="get">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Name" id="formId1" placeholder="" />
                <label for="formId1">Name</label>
            </div>

            <div class="">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="" value="1" />
                    <label class="form-check-label" for="">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="" value="0" />
                    <label class="form-check-label" for="">Nu</label>
                </div>
            </div>



            <div class="d-grid ">
                <input type="submit" name="action" value="ADD" class="btn btn-outline-success ">
            </div>
        </form>
    </div>
    <?php
    // include '/xampp/htdocs/PHPMVCDemo/app/controllers/HomeController.php';
    // $homeController = new HomeController();

    ?>

</body>

</html>