<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>exercice 1</h3>
<?php

if(isset($_GET["nom"])) {
    echo $_GET["nom"];
}
if(isset($_GET["prenom"])){
    echo $_GET["prenom"];
}

?> 
<h3>exercice 2</h3>
<?php

if(isset($_POST["nom2"])) {
    echo $_POST["nom2"];
}
if(isset($_POST["prenom2"])){
    echo $_POST["prenom2"];
}

?>
<h3>exercice 3</h3>
<?php

if(isset($_GET["nom3"])) {
    echo $_GET["nom3"];
}
if(isset($_GET["prenom3"])){
    echo $_GET["prenom3"];
}

?>
<h3>exercice 4</h3>
<?php

if(isset($_POST["nom4"])) {
    echo $_POST["nom4"];
}
if(isset($_POST["prenom4"])){
    echo $_POST["prenom4"];
}

?>


</body>
</html>