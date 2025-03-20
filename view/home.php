
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Déconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5 text-center">
    <h1 class="mb-3">Bienvenue, <?php echo $_SESSION['user']['nom']; ?>!</h1>
    <p class="lead">Vous êtes connecté à votre espace personnel.</p>
    <div class="row mt-4">
      <div class="col-12 col-md-4 mb-4">
        <div class="card p-3 shadow-sm">
          <h5>Profil</h5>
          <p>Voir et modifier vos informations personnelles.</p>
          <a href="#" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card p-3 shadow-sm">
          <h5>Paramètres</h5>
          <p>Configurer les préférences de votre compte.</p>
          <a href="#" class="btn btn-primary">Accéder</a>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card p-3 shadow-sm">
          <h5>Support</h5>
          <p>Obtenir de l'aide et contacter l'assistance.</p>
          <a href="#" class="btn btn-primary">Accéder</a>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>