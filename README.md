# Login Form – Tester en local

## Prérequis

- [XAMPP](https://www.apachefriends.org/fr/index.html) installé sur votre machine
- PHP installé (inclus dans XAMPP)
- [Composer](https://getcomposer.org/) installé pour gérer les dépendances PHP

## Installation

1. **Cloner le dépôt**

   ```bash
   git clone https://github.com/anjakely18/login-form.git
   ```

2. **Placer le projet dans le dossier `htdocs` de XAMPP**

   Exemple :  
   `C:\xampp\htdocs\login-form`

3. **Installer les dépendances PHP**

   Ouvrez un terminal dans le dossier du projet et lancez :

   ```bash
   composer install
   ```

## Lancer le serveur

1. Démarrez Apache via le panneau de contrôle XAMPP.
2. Dans votre navigateur, allez à :  
   [http://localhost/login-form/index.php](http://localhost/login-form/index.php)

## Utilisation

- Identifiant valide : `user`
- Mot de passe valide : `password`
- Un message de succès ou d’erreur s’affichera selon les identifiants saisis.

---

**Remarque** :  
Si vous modifiez les fichiers, rechargez la page dans le navigateur pour voir les changements.