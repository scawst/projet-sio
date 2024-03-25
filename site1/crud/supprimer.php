<?php
require('fonctions.php');
connectdb();
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $rs = connectdb()->prepare($sql);
    $rs->bindParam(1, $id);
    $rs->execute();
    header('location: index.php');
  } else {
    echo "ID non valide";
  }





?>