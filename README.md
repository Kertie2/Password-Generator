# Générateur de Mot de Passe

Ce projet est un générateur de mot de passe simple développé en PHP et HTML, permettant de créer des mots de passe sécurisés avec des options de personnalisation, comme la longueur et l'inclusion de caractères spéciaux.  
## Fonctionnalités

- **Longueur personnalisable** : Choisissez la longueur du mot de passe (entre 4 et 32 caractères).
- **Caractères spéciaux** : Possibilité d'inclure des caractères spéciaux pour renforcer la sécurité.
- **Génération automatique** : Le mot de passe est généré et affiché directement sur la page après soumission.

## Prérequis

- Serveur web (par exemple, Apache) avec PHP installé.

## Installation

1. Clonez le dépôt ou téléchargez les fichiers.
2. Placez le fichier `index.php` dans le répertoire de votre serveur web.

```bash
git clone https://github.com/Kertie2/Password-Generator.git
```
3. Accédez au fichier via votre navigateur à l’adresse suivante :

## Sur un serveur Locale (sans modification)
```http
http://127.0.0.1/public_html/index.php
```

## Sur un serveur Publique (index.php placé dans la racine du serveur web)
```http
http://ip-adress/index.php
```

## Utilisation

1. Ouvrez la page du générateur de mot de passe dans votre navigateur.
2. Entrez la longueur souhaitée pour le mot de passe.
3. Cochez la case pour inclure des caractères spéciaux si désiré.
4. Cliquez sur "Générer" pour afficher le mot de passe.

## Personnalisation

Si vous souhaitez personnaliser les caractères spéciaux utilisés ou changer la plage de longueur, vous pouvez modifier la fonction `generatePassword` dans le fichier `password_generator.php`.

```php
function generatePassword($length, $include_special) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    if ($include_special) {
        $characters .= '!@#$%^&*()-_=+<>?';
    }
```

## Capture d'Écran

![Capture d'écran du générateur de mot de passe](./screenshot.png)

## Licence

Ce projet est sous licence MIT. Vous êtes libre de l'utiliser, de le modifier et de le distribuer comme vous le souhaitez.

---

Développé par Kertie2_ 💻.
