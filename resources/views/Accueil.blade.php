<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay Easy</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{asset('assets/1.png')}}">
        </div>
        <nav class="navbar">

            <a href="#">Acceuil</a>
            <a href="#aPropos">A propos</a>
            <a href="#reservation">Réservation</a>
            <a href="#Contact">Contactez-Nous</a>
        </nav>
        <div class="buttons">
            <button class="btn-signup"><a href="{{route('register')}}">Inscription</a></button>
            <button class="btn-signup"><a href="{{route('login')}}">Connexion</a></button>
        </div>
    </header>

    <section class="home1">
        <div class="home">
            <div class="home-content">
                <h1>Bienvenue sur </h1>
                <h2>STAY <span style="color: red;">EASY</span></h2>
                <p>Votre Plaisir Notre Mission<br> Découvrez les meilleures maisons et appartements que nous proposons</p>

                <div class="btn-box">
                    <a href="#Reservation">Réservation</a>
                    <a href="#Contact ">Nous contacter</a>
                </div>
            </div>
    </section>


    <!--A propos-->
    <section class="text" id="aPropos">
        <h1>A propos</h1>
        <p>Découvrez STAYESAEY, votre agence de location de logement de confiance.
            Nous vous offrons une sélection variée de logements de qualité répondant à tous vos besoins.
            Avec notre équipe dédiée, nous vous accompagnons tout au long du processus de location pour rendre votre expérience simple et agréable.
            Faites confiance à STAYESAEY pour trouver le logement idéal qui vous fera vous sentir chez vous.</p>
    </section>


    <main id="reservation">
        <h1>Visitez Nos Maisons</h1>
        <section class="room-list">

            <div class="room" id="room1">
                <img src="{{asset('assets/Maison1.jpg')}}" alt="Room 1" style="height:150px;">
                <h2><a href="../html/inscripton.html">Maison luxieuse</a></h2>
                <p>Prix: $240</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/Maison2.jpg')}}" alt="Room 1">
                <h2><a href="../html/inscripton.html">Maison Luxueuse</a></h2>
                <p>Prix: $750</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/Maison3.jpg')}}" alt="Room 1">

                <h2><a href="../html/inscripton.html">Maison Luxieuse</a></h2>
                <p>Prix: $700</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/Maison4.jpg')}}" alt="Room 1">

                <h2><a href="../html/inscripton.html">Maison luxieuse</a></h2>
                <p>Prix: $299</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
        </section>


        <h1 style="font-size: 40px; margin-top: 55px;">Nos Appartements</h1>
        <section class="room-list">

            <div class="room" id="room1">
                <img src="{{asset('assets/appartement1.jpg')}}" alt="Room 1">
                </a>
                <h2> <a href="../html/inscripton.html">Appartement Luxieuse</a></h2>
                <p>Prix: $70</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/appartement2.jpg')}}" alt="Room 1">
                </a>
                <h2> <a href="../html/inscripton.html">Appartement Luxieuse</a></h2>
                <p>Prix: $92</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/appartement3.jpg')}}" alt="Room 1">
                </a>
                <h2> <a href="../html/inscripton.html">Appartement Luxieuse</a></h2>
                <p>Prix: $150</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>
            <div class="room" id="room1">
                <img src="{{asset('assets/appartement4.jpg')}}" alt="Room 1">
                </a>
                <h2> <a href="../html/inscripton.html">Appartement Luxieuse</a></h2>
                <p>Prix: $100</p>
                <button class="reserve" id="bouttonPage"><a href="../page/reservation.html">Réserver</a></button>

            </div>


        </section>


        <button class="reserve1" id="myButton1">Voir plus de logements</button>


    </main>
    <!--Contact-->

    <section class="contact" id="Contact">
        <div class="content">
            <h2>Contactez nous</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque, quasi eligendi. Nobis, dolorum a amet doloremque cum,
                accusantium quam perferendis saepe tempore incidunt iusto porro quo dolores totam cupiditate..</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Lomé-Togo <br>Rue Pharaon</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">
                        <h3>Télephone</h3>
                        <p>+22896558081</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>stayeasy@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Envoyer un message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Ecrit ton message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- <script src="../script/index.js"></script> -->
</body>

</html>