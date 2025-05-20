<?php
session_start();
require_once 'includes/db.php';

$success = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = trim($_POST['username'] ?? '');
	$password = $_POST['password'] ?? '';
	$confirm = $_POST['confirm'] ?? '';

if ($username && $password && $password === $confirm) {
	$hash = password_hash($password, PASSWORD_DEFAULT);

// Vérifie si l'utilisateur existe déjà
	$check = $pdo->prepare("SELECT id FROM utilisateurs WHERE username = ?");
	$check->execute([$username]);

	if ($check->rowCount() === 0) {
		// Insertion
	$stmt = $pdo->prepare("INSERT INTO utilisateurs (username, password, role) VALUES (?, ?, 'technicien')");
	if ($stmt->execute([$username, $hash])) {
	$success = true;
} else {
	$error = "Erreur lors de l'inscription.";
}
} else {
	$error = "Ce nom d'utilisateur est déjà pris.";
}
} else {
	$error = "Les champs sont vides ou les mots de passe ne correspondent pas.";
}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Créer un compte technicien</title>
<link rel="stylesheet" href="csstech/style.css">
</head>
<body>
	<h1>Inscription technicien</h1>

	<?php if ($success): ?>
	<p style"color: green;">Compte créé avec succès ! <a href="login.php">Se connecter</a></p>
	<?php elseif ($error): ?>
	<p style="color: red;"><?= htmlspecialchars($error) ?></p>
	<?php endif; ?>

	<form method="POST">
	<input type="text" name="username" placeholder="Nom d'utilisateur" required><br><br>
	<input type="password" name="password" placeholder="Mot de passe" required><br><br>
	<input type="password" name="confirm" placeholder="Confirmer le mot de passe" required><br><br>
	<button type="submit">Créer le compte</button>
</form>
</body>
</html>
