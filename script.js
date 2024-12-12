function processText() {
    const action = document.getElementById("action").value;
    let input = document.getElementById("input").value.toUpperCase();
    let result;

    // Vérifier si l'entrée ne contient que des lettres et des chiffres
    const regex = /^[A-Z0-9]+$/;
    if (!regex.test(input)) {
        document.getElementById("result").textContent = "Entrée non valide. Veuillez n'utiliser que des lettres et des chiffres.";
        return;
    }

    // Limiter l'entrée à 255 caractères
    if (input.length > 255) {
        input = input.slice(0, 255);
    }

    if (action === "encode") {
        result = encode(input);
    } else {
        result = decode(input);
    }

    document.getElementById("result").textContent = result + " - À la prochaine !";
}

function encode(input) {
    let encoded = "";
    for (let i = 0; i < input.length; i++) {
        const charCode = input.charCodeAt(i);
        encoded += String.fromCharCode(charCode + 3);
    }
    return encoded;
}

function decode(input) {
    let decoded = "";
    for (let i = 0; i < input.length; i++) {
        const charCode = input.charCodeAt(i);
        decoded += String.fromCharCode(charCode - 3);
    }
    return decoded;
}