<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>POS</title>
    <link rel="shortcut icon" href="views/dist/img/template/favicon-pos.ico" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="views/css/custom.css">

    <!-- jQuery -->
    <script src="views/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="views/dist/js/adminlte.js"></script>
</head>




<body class="hold-transition sidebar-mini login-page">
    <?php
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok") {

        echo '<div class="wrapper">';

        include "modules/header.php";
        include "modules/sidebar.php";

        if (isset($_GET["route"])) {
            if (
                $_GET["route"] == 'home' ||
                $_GET["route"] == 'users' ||
                $_GET["route"] == 'categories' ||
                $_GET["route"] == 'products' ||
                $_GET["route"] == 'customers' ||
                $_GET["route"] == 'manage-sales' ||
                $_GET["route"] == 'create-sales' ||
                $_GET["route"] == 'sales-report' ||
                $_GET["route"] == 'logout'
            ) {
                include "modules/" . $_GET["route"] . ".php";
            } else {
                include "modules/404.php";
            }
        }

        include "modules/footer.php";

        echo '</div>';
    } else {
        include "modules/login.php";
    }

    ?>


    <!-- ./wrapper -->
</body>

</html>