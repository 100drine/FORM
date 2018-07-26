##Exercice 2 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page 
user.php avec la méthode POST.

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="user.php" method= "post"> 
    
    <label for ="nom">nom</label>
    <input type ="text" name="nom2"id="nom">
    <label for = "prenom">prénom</label>
    <input type ="text" name="prenom2" id="prenom">
    <input type= "submit">
    </form>
 
</body>
</html>