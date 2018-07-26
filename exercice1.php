#PHP - Les formulaires Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....) 
##Exercice 1 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la 
page user.php avec la méthode GET.


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="user.php" method= "get"> 
    
    <label for ="nom">nom</label>
    <input type ="text" name="nom"id="nom">
    <label for = "prenom">prénom</label>
    <input type ="text" name="prenom" id="prenom">
    <input type= "submit">
    </form>



</body>
</html>