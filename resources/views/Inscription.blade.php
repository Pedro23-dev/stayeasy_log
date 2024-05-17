<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
</head>

<body>
    <div class="box">
        <h2>Inscription</h2>

        <div class="contenu c2">

            @if(session('status'))
            <div class="alert alert-succes">
                {{ session ('status') }}
            </div>
            @endif

            <ul>
                @foreach ($errors -> all() as $error)

                <li class="alert alert-danger">
                    {{ $error }}
                </li>

                @endforeach
            </ul>


            <form id="inscription-form" action="/ajouter" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="sex">Sexe</label>
                    <select id="sex" name="sex" required>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>
                </div>

                <div class="form-group">
                    <label for="confirmation">Confirmation du mot de passe</label>
                    <input type="password" id="confirmation" name="confirmation" required>
                </div>

                <div id="error-message" class="error-message"></div>

                <div class="form-group">
                    <button type="submit" id="buttonPage1">Inscription</button>
                </div>
            </form>
        </div>
</body>

</html>