<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Managerment</title>
    <link rel="stylesheet" href="../../framework/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../framework/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="container ">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3 ">Quản lý bệnh nhân</h3>

        <!-- <?=  APP_ROOT.'app/views/patient/add.php' ?> -->
        <a href="<?= DOMAIN.'app/views/patient/add.php'?>" class="btn btn-outline-success  ">Thêm mới</a>
        
        <table class="table ">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Gender</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </thead>
            
            <tbody>
                <?php 
                    foreach($patients as $patient){
                ?>
                <tr>
                    <th scope="row"><?=$patient->getId();?></th>
                    <td><?= $patient->getFullName();?></td>
                    <td><?= $patient->getGender();?></td>
                    <td>
                        <a href="<?= DOMAIN.'app/views/patient/edit.php?id='.$patient->getId() ?>"><i class="bi bi-pencil-square"></i></a>
                        
                    </td>
                    <td>
                        <!-- <a href="">Xóa</a> -->
                        <a href="<?= DOMAIN.'app/views/patient/delete.php?id='.$patient->getId() ?>"><i class="bi bi-trash3"></i></a>
                        
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    <script src="../..framework/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>