<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
</head>

<body>
    <!-- <header>
        <div class="logo">
            <img src="../logo/1.png">
        </div>
        <nav class="navbar">
            
                <a href="#">Acceuil</a>
                <a href="#">A propos</a>
                <a href="#">Réservation</a>
                <a href="#">Contactez-Nous</a>
        </nav>
        <div class="buttons">
            <button class="btn-signup">Inscription</button>
            <button class="btn-login">Connexion</button>
        </div>
    </header>-->

    <div class="wrapper">
        <h2>Connexion</h2>
        <form id="inscription-form" action="#" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" required>
            </div>


            <button type="submit" id="buttonLogin">Login</button>
            <div class="register-link">
                <p>Pas de compte? <a href="../page/inscription.html">Inscription</a></p>
            </div>
        </form>
    </div>
</body>

</html>