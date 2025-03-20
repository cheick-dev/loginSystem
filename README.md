# Login System en PHP avec MySQL et Bootstrap

## 📂 Structure du projet

LoginSystem/
│── assets/
│   ├── css         # Le css de de Bootstrap en local
│   ├── js           # Le js de de Bootstrap en local
│

│── model/
│   ├── database.php    # Gestion de la connexion à ma base de donnée
│   ├── user.php           # Gestion des utilisateurs (inscription, connexion)

│
│── view/
│   ├── register.php       # Page d'inscription
│   ├── login.php          # Page de connexion
│   ├── home.php           # Page d'accueil après connexion
│   ├── logout.php         # Déconnexion de l'utilisateur
│
│── auth_system.sql     # Le fichier SQL de la Base de données MySQL
│
│── index.php              # Point d'entré du projet qui fait une simple redirection vers home.php
│
│── README.md              # Documentation du projet

## 🚀 Fonctionnalités

- ✅ **Inscription sécurisée** avec hashage des mots de passe
- ✅ **Connexion** avec gestion des sessions
- ✅ **Page d'accueil protégée** accessible uniquement après connexion
- ✅ **Déconnexion sécurisée**
- ✅ **Vérification des champs** et gestion des erreurs
- ✅ **Design responsive** avec Bootstrap

## 🛠️ Installation

### 1️⃣ Cloner le projet

```bash
git clone https://github.com/cheick-dev/loginSystem.git
cd login-system-php

php -v # Vérifiez que PHP est bien installé

php -S localhost:8000 # Cliquez sur le lien qui s'affiche pour accéder à l'interface web
```
