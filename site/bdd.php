<?php



   $host_name = 'db5012904801.hosting-data.io';
$database = 'dbs10838740';
$user_name = 'dbu5426520';
$password = 'S006482o&';
$dbh = null;






try {
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=UTF8', 'root');
    //$db = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer les projets et leurs langages associés
    $sql = "
            SELECT 
                p.id_projet, 
                p.title, 
                p.thumbnail, 
                p.resume, 
                p.created_at, 
                p.link, 
                GROUP_CONCAT(l.name SEPARATOR ', ') AS languages
            FROM 
                projet p
            INNER JOIN 
                languages_projet lp ON p.id_projet = lp.id_projet
            INNER JOIN 
                languages l ON lp.id_languages = l.id_languages
            GROUP BY 
                p.id_projet
        ";

    // Préparation et exécution de la requête
    $stmt = $db->prepare($sql);
    $stmt->execute();

    // Récupération des résultats
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}
