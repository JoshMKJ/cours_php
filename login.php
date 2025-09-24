<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>login</h1>
        <form action="login.php" method="POST">
            <label for="username">Nom d'utlisateur</label>
            <input type="text" id="username" name="username" placeholder="Entrez le nom d'utilisateur" required>

            <label for="password">Entrez le mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrer le mot de passe" required>

            <button class="submet">Se connecter</button>

            <div class="restoter">
                <a href="#">Mot de passe oublie ? </a>
            </div>

        </form>
    </div>
    
</body>
</html>