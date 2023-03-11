<?php
include 'functions/helper.php';
session_start();

// Directing to the login.php
(!isset($_SESSION['login']) || $_SESSION['login'] == false) ? header('Location:login.php') : false;

// Save the user's message
$about = file_get_contents('db/' . session('user_name') . '.txt');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Home</title>
  <style>
    body.bg-dark { background: #181818 !important; }
    button {
      position: absolute;
      bottom: 8px;
      right: 8px;
    }
    form { position: relative; }
  </style>
</head>

<body class="<?= cookies('color') ? cookies('color') : 'bg-dark' ?>">
  <div class="d-flex align-items-center justify-content-center p-4"><img height="" src="" alt=""></div>
  <div class="container d-flex align-items-center justify-content-center">
    <!-- PHP -->
    <div class="card <?= cookies('color') ? cookies('color') : 'bg-dark' ?>" style="width: 18rem;">
      <div class="card-header bg-primary"> My Profile </div>
      <div class="card-body">
        <!--PHP-->
        <h5 class="card-title text-warning"><?= session('user_name') ?></h5>
        <!--PHP-->
        <h6 class="card-subtitle mb-2 text-muted"><?= session('e_mail') ?></h6>
        <!--PHP-->
        <?php
        if (get('operation') == 'true') {
          echo "<div class='alert alert-success'>Successfuly saved</div>";
        } elseif (get('operation') == 'false') {
          echo "<div class='alert alert-danger'>Failed to save!</div>";
        }
        ?>
        <form action="operations.php?operation=about" method="post">
          <!--PHP-->
          <textarea class="form-control <?= cookies('color') ? cookies('color') : 'bg-dark' ?> text-primary" 
          name="about" id="" cols="30" rows="10"><?= htmlspecialchars_decode($about) ?></textarea>
          <button class="btn btn-sm btn-primary" type="submit">Save</button>
        </form>
        <a href="operations.php?operation=logout" class="btn btn-success btn-sm mt-2 w-100">End Session</a><br>
      </div>

      <div class="card-footer bg-info d-flex align-items-center justify-content-between">
        <a href="operations.php?operation=theme&color=bg-light" class="btn btn-sm btn-light">Light Mod</a>
        <a href="operations.php?operation=theme&color=bg-dark" class="btn btn-sm btn-dark">Dark Mod</a>
      </div>
    </div>
  </div>
</body>

</html>