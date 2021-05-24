<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Sistema POS | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dist/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="dist/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="dist/assets/vendors/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- THEME STYLES-->
    <link href="dist/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="dist/assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <div class="brand">
            <a class="link font-weight-bold" href="index.html">Sistema POS</a>
        </div>
        <form id="login-form" action="" method="post">
            <h2 class="login-title">Iniciar Sesión</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    <input class="form-control" type="text" name="usuario" placeholder="Ingrese usuario" autocomplete="off" id="usuario">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-key font-16"></i></div>
                    <input class="form-control" type="password" name="clave" id="clave" placeholder="Ingrese contraseña">
                </div>
            </div>
            <!-- <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.html">Forgot password?</a>
            </div> -->
            <div class="form-group">
                <button class="btn btn-info btn-block" onclick="Verificar_Usuario()">Ingresar</button>
            </div>
            <!-- <div class="social-auth-hr">
                <span>Or login with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
            <div class="text-center">Not a member?
                <a class="color-blue" href="register.html">Create accaunt</a>
            </div> -->
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="dist/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="dist/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="dist/assets/vendors/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="dist/assets/js/app.js" type="text/javascript"></script>
    <script src="dist/js/login.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
    </script>
</body>

</html>