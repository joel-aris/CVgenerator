<!DOCTYPE html>
<html>
<head>
    <title>3600 ENCO/DECO</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <h1 >3600 ENCO/DECO</h1>
    <form id="form">
        <label for="action">Que souhaitez-vous faire ?</label>
        <select id="action">
            <option value="encode">Encoder</option>
            <option value="decode">Décoder</option>
        </select>
        <label for="input">Entrez votre texte (26 lettres, 0-9 ou mélange jusqu'à 255 caractères):</label>
        <input type="text" id="input" maxlength="255">
        <button type="button" onclick="processText()">Soumettre</button>
    </form>
    <div id="result"></div>
    <script src="script.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $input = strtoupper($_POST["input"]);

    // Vérifier si l'entrée ne contient que des lettres et des chiffres
    $regex = "/^[A-Z0-9]+$/";
    if (!preg_match($regex, $input)) {
        $result = "Entrée non valide. Veuillez n'utiliser que des lettres et des chiffres.";
    } else {
        // Limiter l'entrée à 255 caractères
        $input = substr($input, 0, 255);

        if ($action == "encode") {
            $result = encode($input);
        } else {
            $result = decode($input);
        }
        $result .= " - À la prochaine !";
    }
}

function encode($input) {
    $encoded = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $charCode = ord($input[$i]);
        $encoded .= chr($charCode + 3);
    }
    return $encoded;
}

function decode($input) {
    $decoded = "";
    for ($i = 0; $i < strlen($input); $i++) {
        $charCode = ord($input[$i]);
        $decoded .= chr($charCode - 3);
    }
    return $decoded;
}
?>

<section class="clients">
        <div class="box-container">
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>D</span>epuis que nous avons commencé à utiliser cette 
                application ma femme Cindy, ma fille jayahna et moi pour coder nos messages en ce qui concerne le fufu . on peut dire qu'aucune autre appli 
                de codage/décodage n'égalise avec ce dernier , en tout cas "erataka te" !</p>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </div>
                <img src="cd1.jpg" alt="">
                <span>Madesu ya bana de Paris</span>
            </div>
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>C</span>omme on le dit chez nous "erataka te", c'est pour moi
                    la meilleure application d'encodage et décogage que j'ai utilisé depuis
                    que ma naissance.</p>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </div>
                <img src="P 7.jpg" alt="">
                <span>DIEUDONNE de kinshasa</span>
            </div>
            <div class="box">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p><span>J</span>e kiff grave cette app, à chaque fois
                    que j'ai besoin de coder et decoder , 
                    je parviens toujours à le retrouver la réponse avec facilité... je le recommande à tous.</p>
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
