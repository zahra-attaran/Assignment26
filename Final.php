
<?php
session_start();
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
    <title>Document</title>

    <STYLE>
        .all{
            width: 100%;
            background-image: url("Images/Untitled.png");
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover ;
        }
        .finalImg {
            width: 100%;
            background-image: url("Images/geometry-g1df024afe_1280.png");
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }
        .emtiaz{
            left: calc(50% - 90px);
        }
    </STYLE>
</head>
<body>
<div class="all">
    <div class="finalImg">
        <div class="h-100">
            <p class="emtiaz text-center position-absolute top-50">
                میزان امتیازی که کسب کردید :
                <?php echo " $_SESSION[user_score]";
                ?>
            </p>
        </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>




