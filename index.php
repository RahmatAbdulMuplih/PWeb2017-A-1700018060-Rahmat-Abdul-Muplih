<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/custom.css">
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>
 <body class="text-center">
    <form class="form-signin" method="post" action="proses.php">
      <img class="mb-4" src="https://i1.wp.com/ayonaikbis.com/wp-content/uploads/2016/10/comil-2-red.png" alt="100%" width="100%" height="100%">
      <h1 class="tugas">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputnama" name="inputnama" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>