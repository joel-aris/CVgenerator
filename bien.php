<!DOCTYPE html>
<html>
<head>
    <title>DécoCrack</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <h1 >DécoCrack</h1>
    <form id="form">
        <label for="action">choisissez ce que vous souhaitez faire ?</label>
        <select id="action">
            <option value="encode">Encoder</option>
            <option value="decode">Décoder</option>
        </select>
        <label for="input">Entrez votre texte "lettres":</label>
        <input type="text" id="input" maxlength="255">
        <button type="button" onclick="processText()">Résultat</button>
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
        $result = "Entrée non valide.";
    } else {
        // Limiter l'entrée à 255 caractères
        $input = substr($input, 0, 255);

        if ($action == "encode") {
            $result = encode($input);
        } else {
            $result = decode($input);
        }
        $result .= " - À + !";
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
                <a href="#">phone: +24399562110</a>
                <a href="#">email: nyimikhenyaadphine@gmail.com</a>
                <a href="#">addresse: <span>DRC</span>, kinshasa/limete 1er rue-56</a>
            </div>
        </div>
        <div class="credit"><p>&copy;2024. Tous droits réservés.| <span>RDC</span></p></div>
    </footer>
    

    </body>
</html>
