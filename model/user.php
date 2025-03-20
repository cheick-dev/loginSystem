
<?php
require 'database.php';
function userExists($email) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    return $stmt->fetch() !== false;
}

function registerUser($nom, $prenom, $email, $password) {
    global $pdo;
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        if(strlen($passwordg) < 8) {
            return "Le mot de passe doit contenir au moins 8 caractères.";
        }
        return "Tous les champs sont requis.";
    }
    if (userExists($email)) {
        return "Cet email est déjà utilisé.";
    }
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, password) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$nom, $prenom, $email, $hashedPassword]) ? true : "Erreur lors de l'inscription.";
}

function loginUser($email, $password) {
    global $pdo;
    if (empty($email) || empty($password)) {
        if(strlen($passwordg) < 8) {
            return "Le mot de passe doit contenir au moins 8 caractères.";
        }
        return "Email et mot de passe sont requis.";
    }
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user;
        return true;
    }
    return "Email ou mot de passe incorrect.";
}

?>