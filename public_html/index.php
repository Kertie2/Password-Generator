<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="number"] {
            width: 50px;
        }
    </style>
</head>
<body>
<div class="container">
            <h1>Générateur de mot de passe</h1>
            <form method="POST">
            <label for="length">Longueur du mot de passe :</label>
            <input type="range" name="length" id="length" value="12" min="4" max="128" step="1">
            <span id="lengthValue">12</span> <!-- Affiche la longueur choisie -->
            <br><br>
            <label>
                <input type="checkbox" name="include_special" checked>
                Inclure des caractères spéciaux
            </label>
            <br><br>
            <button type="submit">Générer</button>
        </form>

        <script>
            // Mise à jour de la valeur affichée de la longueur choisie
            const rangeInput = document.getElementById('length');
            const lengthValue = document.getElementById('lengthValue');
            rangeInput.addEventListener('input', function() {
                lengthValue.textContent = rangeInput.value;
            });
        </script>
       <br><br>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $length = isset($_POST["length"]) ? (int)$_POST["length"] : 12;
            $include_special = isset($_POST["include_special"]);

            function generatePassword($length, $include_special) {
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                if ($include_special) {
                    $characters .= '!@#$%^&*()-_=+<>?';
                }
                $password = '';
                for ($i = 0; $i < $length; $i++) {
                    $password .= $characters[random_int(0, strlen($characters) - 1)];
                }
                return $password;
            }

            $password = generatePassword($length, $include_special);
            echo "<p><strong>Mot de passe généré :</strong> $password</p>";
        }
        ?>
</div>
</body>
</html>
