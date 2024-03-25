<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
        <div class="btnRetour">
        <a href="index.php" class="btnRetour">Retour</a>
        </div>
        <h2>Ajouter un client</h2>
        <form id="ajoutUtilisateurs" action="" method="post">
            <p>
            <label>Nom</label>
            <input type="lastname" name="nom" placeholder="Nom" required>
            </p>
            <p>
            <label>Prénom</label>
            <input type="firstname" name="prenom" placeholder="Prénom" required>
            </p>
            <p>
            <label>Adresse</label>
            <input type="text" name="adresse" placeholder="Adresse"required>
            </p>
            <p>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>
            </p>
            <input type="submit" id="ajouter" name="ajouter" value="Ajouter">
        </form>
    </div>
    <?php
    require('fonctions.php');
    connectdb();
    if(isset($_POST['ajouter'])){
    $sql = "INSERT INTO utilisateurs (nom, prenom, adresse, email) VALUES (?,?,?,?)";
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $rs = connectdb()->prepare($sql);
    $rs->bindParam(1, $nom);
    $rs->bindParam(2, $prenom);
    $rs->bindParam(3, $adresse);
    $rs->bindParam(4, $email);
    $rs->execute();
    header("location: index.php");
    }
    
    ?>
</body>
</html>