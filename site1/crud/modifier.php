<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require ('fonctions.php');
connectdb();
$id = $_GET['id'];
$sql = "SELECT * FROM utilisateurs WHERE id = ?";
$rs = connectdb()->prepare($sql);
$rs->bindParam(1, $id);
$rs->execute();
$res = $rs->fetch(PDO::FETCH_ASSOC);
?>



    <div class="form">
        <div class="btnRetour">
        <a href="index.php" class="btnRetour">Retour</a>
        </div>
        <h2>Modifier un client</h2>
        <form id="modifUtilisateurs" action="" method="post">
            <p>
            <label>Nom</label>
            <input type="lastname" name="nom"   value="<?php echo $res['nom'] ?>" required>
            </p>
            <p>
            <label>Prénom</label>
            <input type="firstname" name="prenom"  value="<?php echo $res['prenom'] ?>" required>
            </p>
            <p>
            <label>Adresse</label>
            <input type="text" name="adresse"  placeholder="Adresse" value="<?php echo $res['adresse'] ?>" required>
            </p>
            <p>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email"  value="<?php echo $res['email'] ?>" required>
            </p>
            <input type="submit" id="modifier" name="modifier" value="Modifier">
        </form>
    </div>
</body>
<?php
if(isset($_POST['modifier'])) {
    $id = $_GET['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $sql = "UPDATE utilisateurs SET nom = ?, prenom = ?, adresse = ?, email = ? WHERE id = ?";
    $rs = connectdb()->prepare($sql);
    $rs->bindParam(1, $nom);
    $rs->bindParam(2, $prenom);
    $rs->bindParam(3, $adresse);
    $rs->bindParam(4, $email);
    $rs->bindParam(5, $id);
    $rs->execute();
    header('location: index.php');
  }

?>
</html>









