<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SOP-Login</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="form" class="col-md-12">
            <form action="includes/login.inc.php" method="POST">
                Name<input type="text" name="name" placeholder="Both names">
                E-mail<input type="email" name="email" placeholder="@mail.com">
                User Name<input type="text" name="u_name" placeholder="ID">
                Password<input type="password" name="password" placeholder="Passcode">
                Repeat<input type="password" placeholder="Reenter password">
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>

        <div id="loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/>
            </svg>
        </div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>

        <!--main script-->
        <script src="js/main.js"></script>

    </body>

</html>