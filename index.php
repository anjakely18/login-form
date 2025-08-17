<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'user' && $password === 'password') {
        $message = ['type' => 'success', 'text' => 'Vous êtes connecté'];
    } else {
        $message = ['type' => 'error', 'text' => 'Identifiants incorrects'];
    }
}

echo $twig->render('login.twig', [
    'message' => $message
]);