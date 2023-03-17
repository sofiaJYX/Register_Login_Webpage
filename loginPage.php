<?php

include_once 'includes/header.php';
/*
if(isset($_SESSION['name'])) {
header("Location: profile.php");
}
*/

include 'includes/db.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = query("SELECT * FROM email WHERE user_name='$email");

  // Prepare a SQL statement to select all rows from your users table where the username and password match the submitted values
  $stmt = $connection->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->execute();

  if (mysqli_num_rows($query) > 0) {
    print "Login correct";
  } else {
    print "Incorrect user name or password.";

  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Link to main.css -->
  <link rel="stylesheet" href="css/main.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form class="form" action="includes/login.php" method="post">
      <div class="mb-3">
        <h2>Login</h2>
        <label class="form-label" for="inputName">Email</label>
        <input type="email" class="form-control" id="inputName" name="email" placeholder="email" <?php if (isset($username))
          echo '' ?>>
        <?php if (isset($name_error))
          echo "<p class='invalid-feedback'> $name_error </p>"; ?>
      </div>

      <div class="mb-3">
        <label class="form-label" for="inputPassword">Password</label>
        <input type="password" class="form-control <?php if (isset($pass_error))
          echo "is-invalid"; ?>"
          id="inputPassword" name="password">
        <?php if (isset($pass_error))
          echo "<p class='invalid-feedback'> $pass_error </p>"; ?>
      </div>
      <button type="submit" class="btn btn-primary" name="regBtn">Login</button>
    </form>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>