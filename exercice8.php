##Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices 
précédent, vérifier que le fichier transmis est bien un fichier pdf.

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


<form enctype="multipart/form-data" action="exercice8.php" method="POST">
   
    Transfère le fichier <input type="file" name="monfichier" />
    <input type="submit" />
</form>
    <?php

if(isset($_GET["nom8"])) {
    echo $_GET["nom8"];
}
if(isset($_GET["prenom8"])){
    echo $_GET["prenom8"];
}
if(isset($_FILES["monfichier"])AND $_FILES["monfichier"]["error"]==0)
{
  
echo 'Hey';

$infosfichier = pathinfo($_FILES["monfichier"]["name"]);
$extension_upload = $infosfichier["extension"];
$extensions_autorisees = array("pdf");
if (in_array($extension_upload,$extensions_autorisees))
{
    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
    echo "L'envoi a bien été effectué !";
    echo basename($_FILES['monfichier']['name']);
}else{
    echo "Ce n'est pas un pdf!!!";
}
} 

?>

</body>
</html>