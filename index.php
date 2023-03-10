<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $objet = $_POST["subject"];
    $message = $_POST["message"];

    // Définir les informations de l'email
    $destinataire = "destinataire@example.com";
    $sujet = $objet;
    $contenu = "Nom : $nom\nEmail : $email\nMessage :\n$message";

    // Définir l'en-tête de l'email
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Envoyer l'email
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "L'email a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'email.";
    }

    $contenu = "Vous nous avez envoyé le message suivant :\n$message nous vous recontacterons au plus vite";

    // Définir l'en-tête de l'email
    $headers = "From: $destinataire" . "\r\n" .
        "Reply-To: $destinataire" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Envoyer l'email
    if (mail($email, $sujet, $contenu, $headers)) {
        echo "L'email a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'email.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RénovTout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
        <header class="wrapper">
            <div class="container_logo">
                <img class="logo" src="img/Logo_noir.jpg" alt="logo">
            </div>
            <div class="container_nav" id="navbar">
                <nav>
                    <a href="#accueil">Accueil</a>
                    <a href="#propos">A propos de nous</a>
                    <a href="#avis">Avis</a>
                    <a href="#contact">Contact</a>
                    <a href="#reseau">Reseau</a>
                </nav>
            </div>
        </header>

        <main id="accueil" >
            <!-- Accueil -->
            <section class="accueil">
                <div class="backdrop">
                <div class="wrapper">
                <div class="accueil_left_side">
                    <p>RénoV'Tout est une entreprise spécialisée dans les travaux de rénovation pour les particuliers et les professionnels. Nous sommes fiers d'offrir une large gamme de services, notamment la rénovation de cuisines, de salles de bains, de revêtements de sols et de murs, ainsi que la pose de fenêtres et de portes.

</p>
                </div>

                <div class="accueil_right_side">
                </div>
            </div>
            </div>
            </section>
            <!-- Caroussel -->
            <div class="gris">
                <section class="section-caroussel wrapper">
                    <div class="marquee my-5">
                        <ul class="marquee-content">
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                            <li><img src="img/Logo_noir.jpg" alt="logo"></li>
                        </ul>
                    </div>
                </section>
            </div>
            <!-- Biographie -->
            <section id="propos" class="section-bio wrapper">
                    <div class="left_side_bio">
                        <img class="img_bio_gallery" src="img/Logo_noir.jpg" alt="bio perle bleue plat">
                    </div>
                    <div class="right_side_bio">
                        <p class="text_bio">"Mon objectif est de vous fournir un service de qualité supérieure à des prix compétitifs. Pour cela, je travaille avec vous tout au long du processus de rénovation pour comprendre vos besoins et vos attentes, et m'assurer que le résultat final est conforme à vos attentes."</p>
                        <p class="rose">NOM PRENOM</p>
                    </div>
            </section>

            <!-- commentaire -->
            <section class="gris py-5" id="avis">
                <div class="testimonial text-center wrapper gris">
                    <div class="container ">
            
                        <div class="heading">
                            Avis
                        </div>
                        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4 class="rose">Client 1</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4 class="rose">Client 2</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <h4 class="rose">Client 3</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#testimonial4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#testimonial4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section class="section-contact wrapper" id="contact">
                <div class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="wrapper">
                                    <div class="row no-gutters mb-5">
                                        <div class="col-md-7">
                                            <div class="contact-wrap w-100 p-md-5 p-4">
                                                <h3 class="mb-4">Contactez-nous</h3>
                                                <div id="form-message-warning" class="mb-4"></div> 
                                        <div id="form-message-success" class="mb-4">
                                        Votre message a été envoyé avec succées !
                                        </div>
                                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="label" for="name">Nom</label>
                                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6"> 
                                                            <div class="form-group">
                                                                <label class="label" for="email">Email</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="label" for="subject">Objet</label>
                                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="label" for="#">Message</label>
                                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="submit" value="Envoyer" class="btn btn-primary">
                                                                <div class="submitting"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5 d-flex align-items-stretch">
                                            <div id="map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.009750209534!2d7.708779315662205!3d48.51387777925514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796cb752945848d%3A0xb26dc5a1183172ba!2sLa%20perle%20bleue!5e0!3m2!1sfr!2sfr!4v1645177314692!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text">
                                        <p><span>Adresse:</span> <a href="https://www.google.fr/maps">198 West 21th Street, 67000 Strasbourg</a></p>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text">
                                        <p><span>Téléphone:</span> <a href="tel:1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dbox w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="gris" id="reseau">
            <div class="container_reseau">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
            <p class="footer_text">Rénovtout © 2022 | Tous droits réservés</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>