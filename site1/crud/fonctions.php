<?php
function connectdb(){
    try {
        $conndb = new PDO("mysql:host=localhost;dbname=crud","root", "root");
        // Afficher les erreurs PDO
        $conndb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
    return $conndb;
}


?>