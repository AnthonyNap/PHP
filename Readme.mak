# Messagerie PHP Dynamique

Bienvenue sur le projet de Messagerie PHP Dynamique ! Ce projet est une application de messagerie web simple mais puissante, 
conçue pour démontrer les capacités de PHP en matière de traitement des formulaires et de gestion des fichiers. 
L'application permet aux utilisateurs d'envoyer des messages et de les voir affichés en temps réel.

## Caractéristiques

- **Envoi de Messages** : Les utilisateurs peuvent envoyer des messages via un formulaire web intuitif.
- **Affichage Instantané** : Chaque message envoyé est immédiatement affiché sur la page principale.
- **Sécurité des Données** : Les messages sont nettoyés pour éviter les injections XSS, assurant ainsi une expérience plus sûre.
- **Facile à Installer** : Avec un minimum de dépendances, l'application est simple à mettre en place et à exécuter.

## Comment Ça Marche ?

L'application utilise PHP pour traiter les entrées de formulaire et stocker les messages dans un fichier texte sur le serveur. 
Chaque nouveau message est ajouté à ce fichier et la liste des messages est lue et affichée à chaque chargement de la page `index.php`.

## Installation

Pour installer et exécuter cette application sur votre serveur local, suivez ces étapes :

1. Clonez ce dépôt en utilisant :

git clone https://github.com/AnthonyNap/PHP_Messagerie.git

2. Naviguez dans le dossier cloné :

cd PHP_Messagerie

3. Ouvrez le dossier dans un serveur web local de votre choix (par exemple, XAMPP, MAMP, WampServer, ou même le serveur intégré de PHP).

## Utilisation

Après avoir installé l'application :

1. Ouvrez votre navigateur web.
2. Naviguez vers `localhost/PHP_Messagerie` (adaptez le chemin en fonction de votre configuration de serveur local).
3. Commencez à envoyer des messages via le formulaire web et regardez-les s'afficher en temps réel.
