##Exercice 5 Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<form action="index.php" method= "get"> 
    <div>
    <label for ="civilite">civilité</label>    
    <select name="civilite">
    <option value="Mr">Mr</option>
    <option value="Mme">Mme</option>
    </select>
    <label for = "nom">nom</label>
    <input type ="text" name="nom5"id="nom">
    <label for = "prenom">prénom</label>
    <input type ="text" name="prenom5" id="prenom">
    <input type= "submit">
</form>


<form enctype="multipart/form-data" action="index.php" method="POST">
   
    Transfère le fichier <input type="file" name="monfichier" />
    <input type="submit" />
</form>
    <?php

if(isset($_GET["nom5"])) {
    echo $_GET["nom5"];
}
if(isset($_GET["prenom5"])){
    echo $_GET["prenom5"];
}
if(isset($_FILES["monfichier"])AND $_FILES["monfichier"]["error"]==0)
{
    //echo $_FILES["monfichier"];
echo 'Hey';

$infosfichier = pathinfo($_FILES["monfichier"]["name"]);
$extension_upload = $infosfichier["extension"];
$extensions_autorisees = array("jpg","jpeg","gif","png");
if (in_array($extension_upload,$extensions_autorisees))
{
move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
echo "L'envoi a bien été effectué !";
echo basename($_FILES['monfichier']['name']);
}
} 

?>

</body>
</html>