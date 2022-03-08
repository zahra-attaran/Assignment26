<?php
include "database.php";
session_start();
$porsesh_ha = $db->query("SELECT * FROM questions");
$total=$porsesh_ha->num_rows;
$_SESSION["user_score"]=0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body dir="rtl">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <a  href="QuestionManagement.php" class="btn btn-outline-success" type="submit">ورود</a>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="d-flex justify-content-between ">
        <div class="row mt-5 w-75">
            <div class="col">
                <div class="card">
                    <h5 class="card-header text-center">آزمون خوش اومدی</h5>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text text-center">تعداد سوالات این آزمون
                            <?php echo $total;?>
                            تاست</p>
                        <p class="card-text text-center">زمان ازمون :
                            <?php echo $total/2; ?>
                            دقیقه است</p>
                        <a href="Question.php?x=1" class="btn btn-primary">بزن بریم</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="Images/questionnaire-gd9bce9eca_1920.png"class="ax w-25" style="width: 25%">
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>