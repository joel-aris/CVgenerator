<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décodeur/Encodeur d'alphabet français</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Décodeur/Encodeur d'alphabet français</h1>
        <form id="name-form" method="post" action="">
            <label for="user_name">Entrez votre nom :</label>
            <input type="text" id="user_name" name="user_name" required>
            <button type="submit">Suivant</button>
        </form>

        <form id="text-form" method="post" action="" style="display: none;">
            <label for="input_text">Entrez le texte à décoder/encoder :</label>
            <textarea id="input_text" name="input_text" required></textarea>
            <button type="submit">Traiter</button>
        </form>

        <div class="result" style="display: none;">
            <p id="result-message"></p>
        </div>
    </div>


<?php
// Fonction pour traiter le texte
function traiter_texte($texte) {
    // Convertir le texte en majuscules
    $texte_majuscule = strtoupper($texte);
    
    // Remplacer les caractères spéciaux par des espaces
    $texte_filtre = preg_replace('/[^A-Z0-9]/', ' ', $texte_majuscule);
    
    // Encoder/Décoder les lettres et les chiffres
    $texte_traite = '';
    for ($i = 0; $i < strlen($texte_filtre); $i++) {
        $char = substr($texte_filtre, $i, 1);
        if (ctype_alpha($char)) {
            $texte_traite .= chr(219 - ord($char));
        } elseif (ctype_digit($char)) {
            $texte_traite .= chr(57 - ord($char));
        } else {
            $texte_traite .= $char;
        }
    }
    
    return $texte_traite;
}

// Récupérer le nom de l'utilisateur et le texte à traiter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["user_name"])) {
        $user_name = $_POST["user_name"];
        
        // Afficher le formulaire pour le texte à traiter
        echo '<script>
            document.getElementById("name-form").style.display = "none";
            document.getElementById("text-form").style.display = "block";
        </script>';
    } elseif (isset($_POST["input_text"])) {
        $input_text = $_POST["input_text"];
        $output_text = traiter_texte($input_text);
        
        // Afficher le résultat avec le nom de l'utilisateur
        echo '<script>
            document.getElementById("text-form").style.display = "none";
            document.getElementById("result-message").textContent = "Bienvenue, ' . $user_name . ' ! Le résultat du traitement est : ' . $output_text . '. Merci !";
            document.querySelector(".result").style.display = "block";
        </script>';
    }
}
?>

<section class="clients">
        <div class="box-container">
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>S</span>i je pouvais mettre une note à ce site je mettrai
                    la note de  9/10 et ce sans broncher "im-pec-cable" !</p>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </div>
                <img src="cl1.avif" alt="">
                <span>Marie de Paris</span>
            </div>
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>C</span>omme on le dit chez nous "erataka te", c'est pour moi
                    la meilleure application d'encodage et décogage que j'ai utilisé depuis
                    que je suis né .</p>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </div>
                <img src="P 7.jpg" alt="">
                <span>Dieudonné De KINSHASA</span>
            </div>
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>J</span>e kiff grave ce site, à chaque fois que j'ai besoin d'un vêtement de qualité, 
                    je parviens toujours à le retrouver avec facilité... je le recommande à tous.</p>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </div>
                <img src="cl3.avif" alt="">
                <span>Ariane de BRUXELLES</span>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3><span>A</span>ccès rapide</h3>
                <a href="index.html">Accueil</a>
                <a href="products.html">produits</a>
                <a href="contact.html">contact</a>
                <a href="about.html">A propos</a>
            </div>
            <div class="box">
                <h3>nous suivre</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">youtube</a>
            </div>
            <div class="box">
                <h3>Nous contacter</h3>
                <a href="#">phone: +243858575940</a>
                <a href="#">email: joelmukendi2.0@gmail.com</a>
                <a href="#">addresse: <span>DRC</span>, kinshasa/limete 1er rue-56</a>
            </div>
        </div>
        <div class="credit"><p>&copy;2024. Tous droits réservés.| <span>RDC</span></p></div>
    </footer>
    

    </body>
</html>

