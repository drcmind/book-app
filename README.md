# PHP 8 Pour débutants #13 Exercice Final Tuto français #web #php #drcmind
 Cet épisode final vous permet de consolider et valider vos acquis comme programmeur #php  débutant. Se basant sur une approche plus ou moins rigoureuse, il vous permet de mettre en pratique toutes les notions apprises du premier épisode jusqu'au douzième. Le tout en suivant une discipline d'organisation qui vous permet d'être préparé dès les premiers apprentissages aux bonnes pratiques et aux notions élémentaires d'organisation et structuration des projets.
 ## Playlist complet :
 [Cliquez ici ](https://www.youtube.com/playlist?list=PLT2KSPhMMiqoETKQeC-Gu2_MD5jtcp_L9)

## Rejoignez la communauté: 
[Telegram ](https://t.me/+bn_KQqOUyv9hOWI0)
[Tweeter ](https://twitter.com/drcmin2)
[Facebook ](https://facebook.com/DrcMin2)
[WhatsApp ](https://chat.whatsapp.com/BdRKTITTrWS1VBb8t2s15a)
## Structure du projet
Notre projet a une structure simple constituée de la manière suivante :
1. **controllers** :
    >C'est le repertoire dans lequel nous mettons tous les fichiers qui se chargent
    de la logique applicative. c'est ici que sont envoyées, traitées et redirigées toutes les requêtes de l'utilisateur. Il contient :
    - *index.php* : Est le controller qui est appelé lorsque le client lance l'application
    - *create.php* : Est le controller chargé de nous afficher la page d'ajout d'un livre
    - *store.php* : Est le controller chargé d'enregistrer un livre dans la source de données
    - *edit.php* : Est le controller chargé de nous afficher la page de modification d'un livre
    - *update.php* : Est le controller chargé de modifier un livre dans la source de données
    - *delete.php* : Est le controller chargé de supprimer un livre dans la source de données
    - *helpers.php* : Est le controller qui regroupe toutes les fonctions qui son utilisés dans les différents controllers.
2. **datasource** :
    >C'est le repertoire qui contient notre source de données. Ce simple projet utilise un fichier JSON comme source de données. Il contient un seul fichier :
    - *livres.json* : C'est le fichier qui contient les données
3. **views** :
    >C'est le repertoire qui contient tous les fichiers qui se chargent uniquement de l'affichage. Les données manipulées dans ce fichiers proviennent des fichiers du repertoire controllers. Il contient :
    - *index.php* : C'est le fichier qui affiche la page principale de l'application. les données qui y sont affichées et manipulés proviennent de ../controllers/index.php
    - *create.php* : C'est la page qui se charge de l'affichage du formulaire d'ajout d'un nouveau livre.
    - *edit.php* : C'est la page qui se charge de l'affichage du formulaire de modification d'un livre.
## Voir la vidéo complète
[Vidéo complète](https://youtu.be/qQJbNhp9cww)