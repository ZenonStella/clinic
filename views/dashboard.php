<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
?>
<?php 
require_once '../controllers/controller_dashboard.php';
include('templates/header.php'); ?>
<div class="p-3">
    <?php 
    //  if (condition) {
    //     # code...
    //  }
    ?> 
    <p class="h2 text-center">Bienvenue <?= $_SESSION['user']['users_mail'] ?></p>
    <div class="row justify-content-evenly text-light py-5">
        <div class="col-lg-5 col-10 text-center">
            <div class="row justify-content-center">
                <a class="col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger text-decoration-none text-light" href="addPatient.php">Ajouter patient</a>
                <a href="listPatients.php" class="text-decoration-none text-light col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger">Gestion des patient</a>
                <a href="addMeets.php" class="text-decoration-none text-light col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger">Ajouter rendez vous</a>
                <a href="listMeets.php" class="text-decoration-none text-light col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger">Gestion des rendez vous</a>
                <a href="addDoctors.php" class="text-decoration-none text-light col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger">Ajouter spécialiste</a>
                <a href="listDoctors.php" class="text-decoration-none text-light col-lg-5 col-8 my-3 text-center p-3 mx-3 btn btn-danger">Gestion des spécialistes</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="dashboard.php" class="btn btn-secondary mt-3 col-3">Deconnexion</a>
    </div>
</div>
<?php include('templates/footer.php'); ?>