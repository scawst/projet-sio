<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="btnAjouter">
        <a href="ajout.php" class="btnAjouter"><img src="plus.png"> Ajouter</a>
        </div>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
                <?php
                require ('fonctions.php');
                connectdb();
                $sql = "SELECT * FROM utilisateurs";
                $rs = connectdb()->prepare($sql);
                $rs->execute();
                $res = $rs->fetchAll(PDO::FETCH_ASSOC);
                foreach ($res as $row) {
                    echo "<tr><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['adresse']."</td><td>".$row['email']."</td><td><a href='modifier.php?id=".$row["id"]."'><img src='modify.png'></a></td><td><a href='supprimer.php?id=".$row['id']."'><img src='delete.png'></a></td></tr>";
                }



                ?>
            </tr>
        </table>
    </div>
</body>
</html>