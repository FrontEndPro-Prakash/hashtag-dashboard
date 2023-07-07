<!DOCTYPE html>
<html>
<head>
    <?php $base_url = "https://think360.in/work/hashtag-dashboard/" ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HASHTAG | Dashboard</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url ?>favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url ?>favicon/site.webmanifest">
    <!-- /favicon -->

    <!-- libraries -->
    <link href="<?php echo $base_url ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <!-- /libraries -->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- /fonts -->

    <!-- stylesheet -->
    <link href="<?php echo $base_url ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/style.css?v=1.2" rel="stylesheet">
    <link href="<?php echo $base_url ?>css/custom.css?v=1.2" rel="stylesheet">
    <!-- /stylesheet -->

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown pt-5">
        <div class="form-box mt-5">
            <div class="text-center mb-4">
                <img src="img/hashtag-logo.svg">
            </div>
            <p>LOGIN</p>
            <form class="m-t" role="form" action="index.php">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-black block full-width m-b">Login</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
