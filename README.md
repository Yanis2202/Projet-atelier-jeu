# Support Service - Logiciel de Demande d'Assistance (Helpdesk)

Ce projet est un logiciel de demande d'assistance (Helpdesk) pour les utilisateurs, il est développé en PHP et réalisé dans le cadre d'un stage à l'entreprise "L'atelier des Jeux". Il permet aux utilisateurs de soumettre des demandes d'assistance et de donne la possibilité aux techniciens de les gérer.

<br>

## Contexte :

"L'atelier des Jeux" est une société spécialisée dans la création de jeux (jeux vidéo, jeux de plateau, jeux de rôle, jeux de carte, etc.) et emploie une cinquantaine de personnes.  Dans ce projet, j'ai été intégré au service de maintenance informatique et d'aide aux utilisateurs. Mon tuteur m'a confié la réalisation de ce logiciel de demande d'assistance avec mon équipe en plus de mes missions de maintenance.

![image](https://github.com/user-attachments/assets/ae488b94-2eed-4da3-9c82-7c4d5d66f257)  ![image](https://github.com/user-attachments/assets/32c6e4ff-692d-48c0-98d6-97a9f6944961)

<br>

## Fonctionnalités mises en place :

Le logiciel "Support Service" offre les fonctionnalités suivantes (Niveau 2 du projet) :

* **Page d'accueil** (page présentable et façile a comprendre).
* **Page de demande d'assistance pour les utilisateurs avec vérification de fausses adresse mail et confirmation de demande enregistré**. (Un menu déroulant permet de catégoriser la demande d'assistance selon le problème, le signe "@" dois être mentionné pour pouvoir valider la demande d'assistance puis enfin, un message de confirmation apparaît pour valider l'envoie de la demande).
* **Page de création et connexion vers compte de technicien** (pour ajourter facilement les nouveau technicien et leurs permettre de ce connecter). TERMINE LA !
* **Panneau d'administration** (présente les tickets avec leurs statuts (avec couleurs rouge ou vert), organisé selon le type de demande d'assistance ; Possibilité de modifier le statut d'un ticket en un clic depuis le panneau d'administration)).
* **Page de consultation d'un ticket** (détail et modification).
* **Mise en place d'un système de log** (pour identifier les créateur de demmande d'assistance).
* **Mise en place d'un système de sécurité** (afin d'éviter les piratages ou virus).
* **Mise en page propre et soignée** (utilisation du CSS).
* **Site responsive**  (page adaptable à tout type d'écran).
* **

<br>

# <ins> Explication</ins>	:

<br>

## Page d'acceuil : 

La page d'accueil du système d'assistance offre un point d'entrée clair pour les utilisateurs et les techniciens. Elle présente un message de bienvenue et deux options principales :

* **Faire une demande d'assistance :** Permet aux utilisateurs de soumettre un nouveau ticket d'assistance.
* **Connexion Technicien :** Dirige les techniciens vers l'interface de gestion des tickets.
<Br>

![444455544-327030d5-664a-40a5-be6c-05e8635ccdc3](https://github.com/user-attachments/assets/f4fe3ec5-dc16-4d0e-81d0-27b32b781bb9)


<br>

## Page de demande d'assistance pour les utilisateurs : 

Cette page permet aux utilisateurs de soumettre de nouvelles demandes d'assistance.  Elle inclut un formulaire où l'utilisateur doit fournir les informations nécessaires pour décrire son problème.  L'un des éléments important de ce formulaire est un *menu déroulant* qui permet à l'utilisateur de *catégoriser sa demande d'assistance*, facilitant ainsi son traitement par les technicien.

Les champs du formulaire comprennent :

* Votre nom
* Votre email
* Choisissez une catégorie (menu déroulant)
* Description du problème

<br>

![444463284-e7ee26e5-33c3-41f8-81aa-5d8086c5d412](https://github.com/user-attachments/assets/2bac13fa-54cd-4cf3-bb95-ddf47caa32ba)



<br>

Un protocole de vérification d'adresse mail incorrect a aussi été mis en place pour éviter que l'utilisateur ne rentre une mauvaise adresse mail et ne reçois donc jamais de message d'assistance : 

<br>

![Adresse mail incorrect](https://github.com/user-attachments/assets/f63bc862-f30d-443f-adba-7ce2d41cd431)

<br>

Pour terminer, nous avons mis en place un message de confirmation qui, une fois toutes les information d'assistance bien remplie, informe l'utilisateur sur le fait que sa demande a bien été envoyé : 

<br>

![Demande a bien été enregistrer](https://github.com/user-attachments/assets/9d767c4f-ace4-475e-9e9b-3a70179f3e3f)


## Page de création de compte technicien : 

Cette page joue un rôle essentiel dans la gestion des utilisateurs, elle permet l'enregistrement de nouveaux techniciens qui pourront donc avoir accès à toute la gestion des tickets.  Elle assure que seuls les membres autorisés de l'équipe de support ont accès aux fonctionnalités d'administration et de gestion des tickets.

L'accès à cette page se fait via le lien "Créer un compte technicien" présent sur la page de connexion.  Le formulaire de création de compte permet de recueillir les informations d'identification nécessaires (nom d'utilisateur, mot de passe, etc.) pour chaque technicien.  Cela facilite l'ajout et la suppression de comptes, simplifiant ainsi la gestion des accès au système.

![Connexion technicien](https://github.com/user-attachments/assets/637e3b28-84d3-464e-b4e4-d9d1ce45fcd1)

<br> 

![Création compte technicien](https://github.com/user-attachments/assets/9f6d526e-d4cd-412e-aca7-c72c5a5319d1)

<br>


## Gestion des Tickets

Les demandes d'assistance sont appelées "tickets" et passent par trois états :

* **Ouvert :** Lorsqu'une demande est faite par un utilisateur.
* **En cours :** Lorsqu'un technicien prend en charge le ticket.
* **Fermé :** Lorsque l'intervention est terminée.

Pour créer un ticket, l'utilisateur doit faire une demande d'assistance en fournissant bien les informations nécessaires dont le technicien aura besoin pour résoudre l'incident. Le technicien en charge de la gestions des ticket pourra alors résoudre le problème de l'utilisateur puis modifié le statu du ticket (ouvert,en cour, fermé).

<br>

![Tiquets d'assistance](https://github.com/user-attachments/assets/3a8c4640-36cf-46d3-acf4-1ee080b6970b)


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
