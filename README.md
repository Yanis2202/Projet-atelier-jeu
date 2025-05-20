# Support Service - Logiciel de Demande d'Assistance (Helpdesk)


Ce projet est un logiciel de demande d'assistance (Helpdesk) pour les utilisateurs, il est développé principalement en PHP et réalisé dans le cadre d'un stage à l'entreprise "L'atelier des Jeux". Il permet aux utilisateurs de soumettre des demandes d'assistance et de donne la possibilité aux techniciens de les gérer.
<br>
Dans cette présentation, je vous présente ici un CSS diférent que celui du groupe, il s'agit du CSS réalisé personnellement et avant toute modification faite par notre groupe.
Bonne lecture !


## Contexte :

"L'atelier des Jeux" est une société spécialisée dans la création de jeux (jeux vidéo, jeux de plateau, jeux de rôle, jeux de carte, etc.) et emploie une cinquantaine de personnes.  Dans ce projet, j'ai été intégré au service de maintenance informatique et d'aide aux utilisateurs. Mon tuteur m'a confié la réalisation de ce logiciel de demande d'assistance avec mon équipe en plus de mes missions de maintenance.

![image](https://github.com/user-attachments/assets/ae488b94-2eed-4da3-9c82-7c4d5d66f257)  ![image](https://github.com/user-attachments/assets/32c6e4ff-692d-48c0-98d6-97a9f6944961)  

<br>

## Fonctionnalités mises en place :

Le logiciel "Support Service" offre les fonctionnalités suivantes (Niveau 2 du projet) :

* **Page d'accueil** (page présentable et façile a comprendre).
* **Page de demande d'assistance pour les utilisateurs avec vérification de fausses adresse mail et confirmation de demande enregistré**. (Un menu déroulant permet de catégoriser la demande d'assistance selon le problème, le signe "@" dois être mentionné pour pouvoir valider la demande d'assistance puis enfin, un message de confirmation apparaît pour valider l'envoie de la demande).
* **Page de création et connexion vers compte de technicien** (pour ajourter facilement les nouveau technicien et leurs permettre de ce connecter).
* **Panneau d'administration** (présente les tickets avec leurs statuts (avec couleurs rouge ou vert), organisé selon le type de demande d'assistance ; Possibilité de modifier le statut d'un ticket en un clic depuis le panneau d'administration)). 
* **Page de consultation et modification d'un ticket** (détail et modification du status).
* **Mise en place d'un système de log** (pour identifier les créateur de demmande d'assistance).
* **Mise en place d'un système de sécurité** (afin d'éviter les piratages ou virus).
* **Mise en page propre et soignée** (utilisation du CSS).
* **Site responsive**  (page adaptable à tout type d'écran).

<br>

![ChatGPT Image 20 mai 2025, 14_20_04](https://github.com/user-attachments/assets/7b83bbb5-7bba-453d-86c0-f95b883b97ba)

<br>

# <ins> Explication</ins>	:

## Page d'acceuil : 

La page d'accueil du système d'assistance offre un point d'entrée clair pour les utilisateurs et les techniciens. Elle présente un message de bienvenue et deux options principales :

* **Faire une demande d'assistance :** Permet aux utilisateurs de soumettre un nouveau ticket d'assistance.
* **Connexion Technicien :** Dirige les techniciens vers l'interface de gestion des tickets.
<Br>

![444455544-327030d5-664a-40a5-be6c-05e8635ccdc3](https://github.com/user-attachments/assets/f4fe3ec5-dc16-4d0e-81d0-27b32b781bb9)


<br>

## Page de demande d'assistance pour les utilisateurs : 

Cette page permet aux utilisateurs de soumettre de nouvelles demandes d'assistance.  Elle inclut un formulaire où l'utilisateur doit fournir les informations nécessaires pour décrire son problème.  L'un des éléments important de ce formulaire est un **menu déroulant** qui permet à l'utilisateur de **catégoriser sa demande d'assistance**, facilitant ainsi son traitement par les technicien.

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


## Gestion des Tickets :

Les demandes d'assistance sont appelées "tickets" et passent par trois états :

* **Ouvert :** Lorsqu'une demande est faite par un utilisateur.
* **En cours :** Lorsqu'un technicien prend en charge le ticket.
* **Fermé :** Lorsque l'intervention est terminée.

Pour créer un ticket, l'utilisateur doit faire une demande d'assistance en fournissant bien les informations nécessaires dont le technicien aura besoin pour résoudre l'incident. Le technicien en charge de la gestions des ticket pourra alors résoudre le problème de l'utilisateur puis modifié le statu du ticket (ouvert,en cour, fermé).

<br>

![Tiquets d'assistance](https://github.com/user-attachments/assets/3a8c4640-36cf-46d3-acf4-1ee080b6970b)

<br>

## Page de consultation et modification de ticket :

Cette page offre aux techniciens une vue détaillée de chaque ticket de demande d'assistance de tous les utilisateurs et leur permet de communiquer avec eux.  Ses principales fonctionnalités sont :

* **Affichage des détails du ticket :** Toutes les informations fournies par l'utilisateur lors de la création du ticket sont affichées clairement, permettant aux techniciens de comprendre le problème facilement. Cela inclut le numéro du ticket, les informations de contact de l'utilisateur, la catégorie du problème,son nom-prénom et sa description détaillée.
* **Modification du statut :** Un menu déroulant permet aux techniciens de changer le statut du ticket (par exemple, de "Ouvert" à "En cours" ou "Fermé").  Cette fonctionnalité est essentielle pour suivre la progression de la résolution du problème.

![Gestion du tiicket](https://github.com/user-attachments/assets/4bdf7760-a99f-46bd-a81b-04e63654cf1f)

<br>

* **Confirmation de mise à jour :** Après la modification, un message de confirmation indique que le ticket a été mis à jour avec succès.

<br>

![Ticket mis à jour](https://github.com/user-attachments/assets/d0e09075-badd-4fec-a31b-fc5899e80bb3)

<br>

## Système de logs : 

Pour assurer la traçabilité des actions de tout les membres du service (utilisateur, technicien,etc.), notamment ceux de la création de demandes d'assistance, un système de logs a été intégré.  Cela implique l'enregistrement des événements dans un fichier.

La page "Historique des actions (Logs)" permet de consulter ces enregistrements.  L'image montre qu'aucun log n'a encore été ajouté. Elle propose les actions suivantes :

* **Affichage des logs :** Visualisation des événements enregistrés (date, utilisateur, action, etc.).
* **Vider les logs :** Fonctionnalité pour supprimer les logs (nécessite d'être connecté en tant que technicien et d'avoir une confirmation après d'un supérieur pour éviter la perte d'informations importantes).
* **Retour au tableau de bord :** Navigation direct vers la page principale d'administration.

![Voir les logs](https://github.com/user-attachments/assets/f1d016e3-0626-4f97-9859-c3d23c8de402)


<br>

## Système de sécurité : 

Afin de renforcer la sécurité et de prévenir les piratages et virus, plusieurs mesures ont été introduite :

* **Authentification :** Seuls les techniciens autorisés peuvent accéder au panneau d'administration via un système de connexion login/mdp.
* **Validation des entrées :** Les données saisies par les utilisateurs et les techniciens ont une double confirmation pour éviter les appuies accidentels et les robots.
* **Gestion des sessions :** Utilisation de sessions sécurisées pour gérer l'accès des utilisateurs, les utilisateurs normale n'ont pas accès au contenu des technicien informatique.
* **Mises à jour régulières :** Nous mettrons régulièrement le logieciel et ses dépendances à jour pour corriger les failles de sécurité et les beugs.

<br> 

  ![Erreur connexion technicien](https://github.com/user-attachments/assets/24bd3aab-35fe-4bb3-aae0-b1fc61281a3b)

<br>

![Création compte impossible](https://github.com/user-attachments/assets/b2eef8f9-3eec-4002-a6b9-57d75fe1e606) 


<br>

## Mise en page propre et soignée (utilisation du CSS) :

Vous pouvez retrouver tout les codes du projet (dont le css) dans la partie "Projet" sur GitHub.

<br>

## Site responsive (page adaptable à tout type d'écran) :

La vm est disponible dans la partie "VM" sur GitHub via un lien de téléchargement Google drive si vous souhaitez la télécharger pour l'explorer plus en détail.

<br>

## Installation

Pour installer et exécuter ce projet, suivez les étapes suivantes :

1.  Clonez le dépôt GitHub :  `git clone <URL_DU_DEPOT>`
2.  Importez la base de données (fichier .sql fourni).
3.  Configurez les paramètres de connexion à la base de données dans les fichiers de configuration (à préciser).
4.  Accédez au site web via un serveur web (Apache, Nginx, etc.).

<br>

## Technologies Utilisées

* PHP
* MySQL
* HTML
* CSS
* JavaScript (si applicable)

  <br>

## Améliorations Possibles

* Ajouter un système de notification par email.
* Mettre en place un système de recherche et de filtrage plus avancé pour les tickets.
* Intégrer une base de connaissances pour aider à la résolution des problèmes courants.

## Participant du projet : 

<br>

Tanquerel Yanis / Thibaut Mélanie / Sueur Lucas

## Grille d'évaluation

Voici la grille d'évaluation utilisée pour ce projet, nous avons réaliser le niveau 2 uniquement :

![Grille éval-1](https://github.com/user-attachments/assets/109f6515-c8e8-462e-ad65-05af9f0bc79c)
