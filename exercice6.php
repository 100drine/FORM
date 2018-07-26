##Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET,
 le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. 
 Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>




    <?php

if(isset($_GET["nom6"]) && $_GET["prenom6"]) {
    echo $_GET["nom6"].' ,'.$_GET["prenom6"].' ,'.$_GET["civilite"];
}

else{?>
    <form action="exercice6.php" method= "get"> 
    <div>
    <label for ="civilite">civilité</label>    
    <select name="civilite">
    <option value="Mr">Mr</option>
    <option value="Mme">Mme</option>
    </select>
    <label for = "nom">nom</label>
    <input type ="text" name="nom6"id="nom">
    <label for = "prenom">prénom</label>
    <input type ="text" name="prenom6" id="prenom">
    <input type= "submit">
    </form> 
<?php }
$extensions_autorisees = array("pdf");
?> 

</body>
</html>