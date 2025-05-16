# Support Service - Logiciel de Demande d'Assistance (Helpdesk)

Ce projet est un logiciel de demande d'assistance (Helpdesk) pour les utilisateurs, il est développé en PHP et réalisé dans le cadre d'un stage à l'entreprise "L'atelier des Jeux". Il permet aux utilisateurs de soumettre des demandes d'assistance et de donne la possibilité aux techniciens de les gérer.

<br>

## Contexte

"L'atelier des Jeux" est une société spécialisée dans la création de jeux (jeux vidéo, jeux de plateau, jeux de rôle, jeux de carte, etc.) et emploie une cinquantaine de personnes.  Dans ce projet, j'ai été intégré au service de maintenance informatique et d'aide aux utilisateurs. Mon tuteur m'a confié la réalisation de ce logiciel de demande d'assistance en plus de mes missions de maintenance.

![image](https://github.com/user-attachments/assets/ae488b94-2eed-4da3-9c82-7c4d5d66f257)  ![image](https://github.com/user-attachments/assets/32c6e4ff-692d-48c0-98d6-97a9f6944961)

<br>

## Fonctionnalités

Le logiciel "Support Service" offre les fonctionnalités suivantes (Niveau 2 du projet) :

* **Page d'accueil** (page présentable et façile a comprendre).
* **Page de demande d'assistance pour les utilisateurs**. (Un menu déroulant permet de catégoriser la demande d'assistance selon le problème).
* **Panneau d'administration** (présente les tickets avec leurs statuts (avec couleurs rouge ou vert), organisé selon le type de demande d'assistance ; Possibilité de modifier le statut d'un ticket en un clic depuis le panneau d'administration))).
* **Page de consultation d'un ticket** (détail et modification).
* **Page de création d'un compte de technicien** (pour ajourter facilement les nouveau technicien).
* **Mise en place d'un système de log** (pour identifier les créateur de demmande d'assistance).
* **Mise en place d'un système de sécurité** (afin d'éviter les piratages ou virus).
* **Mise en page propre et soignée** (utilisation du CSS).
* **Site responsive**  (page adaptable à tout type d'écran).

**Image :** (Insérer ici une capture d'écran de la page de demande d'assistance - `./images/demande_assistance.png` par exemple)

## Gestion des Tickets

Les demandes d'assistance sont appelées "tickets" et passent par trois états[cite: 7, 8]:

* **Ouvert :** Lorsqu'une demande utilisateur est faite[cite: 8].
* **En cours :** Lorsqu'un technicien prend en charge le ticket[cite: 8].
* **Fermé :** Lorsque l'intervention est terminée[cite: 8].

Pour créer un ticket, l'utilisateur doit fournir les informations nécessaires à la gestion de l'incident. Un numéro de ticket unique est ensuite fourni à l'utilisateur[cite: 9, 10].

**Image :** (Insérer ici une capture d'écran du panneau d'administration avec la liste des tickets - `./images/panneau_admin_tickets.png` par exemple)

## Sécurité

L'accès à la gestion des tickets est sécurisé pour que seuls les techniciens puissent y accéder[cite: 11].

## Installation

Pour installer et exécuter ce projet, suivez les étapes suivantes :

1.  Clonez le dépôt GitHub :  `git clone <URL_DU_DEPOT>`
2.  Importez la base de données (fichier .sql fourni).
3.  Configurez les paramètres de connexion à la base de données dans les fichiers de configuration (à préciser).
4.  Accédez au site web via un serveur web (Apache, Nginx, etc.).

## Technologies Utilisées

* PHP
* MySQL
* HTML
* CSS
* JavaScript (si applicable)

## Améliorations Possibles

* Ajouter un système de notification par email.
* Mettre en place un système de recherche et de filtrage plus avancé pour les tickets.
* Intégrer une base de connaissances pour aider à la résolution des problèmes courants.

## Auteur

Votre Nom

## Grille d'évaluation

Voici la grille d'évaluation utilisée pour ce projet :

**Image :** (Insérer ici l'image de la grille d'évaluation - `./images/grille_evaluation.png`)
