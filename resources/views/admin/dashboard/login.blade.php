<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="INSEO">
  <meta name="keyword" content="Inseo, Atletik, Unesa">
  <link rel="shortcut icon" href="img/fav.png">

  <title>Login | Atletik Unesa</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-reset.css')}}" />
  <!--external css-->
  <link rel="stylesheet" href="{{ asset('admin/assets/font-awesome/css/font-awesome.css')}}" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('admin/css/style-responsive.css')}}" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="login-body">
  <div class="container">
    <form class="form-signin" action="login">
      <h2 class="form-signin-heading">Masuk Sekarang</h2>
      <div class="login-wrap">
        <input type="text" class="form-control" placeholder="User ID" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Tetap masuk
          <span class="pull-right">
              <a data-toggle="modal" href="#myModal"> Lupa Password?</a>
          </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Masuk</button>
        {{-- <div class="registration">
          Belum punya akun?
          <a class="" href="registration.html">
              Buat akun
          </a>
        </div> --}}
      </div>
    </form>
  </div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/js/jquery.js"></script>
  <script src="admin/js/bootstrap.min.js"></script>

</body>
</html>
