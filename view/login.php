<?php
require_once ('../model/user.php');
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = loginUser($_POST['email'], $_POST['password']);
    if ($message === true) {
        header('Location: home.php');
        exit();
    }
}
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 p-5 shadow-sm bg-light rounded">
        <h2 class="mb-4 text-center">Connexion</h2>
        <?php if ($message && $message !== true): ?>
          <div class="alert alert-danger"><?= $message; ?></div>
        <?php endif; ?>
        <form method="post">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <p class="mt-4 text-center">Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>