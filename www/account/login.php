<!DOCTYPE html>
<?php

$data = "not in charge";
if ($_POST["name"] && $_POST["password"]) {
    $result;
    $yoche = file_get_contents("regex_sql.txt");
    if (preg_match($yoche, $_POST["name"]) === 0 && preg_match($yoche, $_POST["password"]) === 0) {
        pg_connect("host=db dbname=principal user=user password=password")
            or die('Connexion impossible : ' . pg_last_error());
        $query = 'SELECT prenom,nom,document FROM "User" WHERE numero_securite_sociale = \'' . $_POST["name"] . '\' AND mdp =md5(\'' . $_POST["password"] . '\');';
        $result = pg_query($query);
    } else {
        sleep(1);
        pg_connect("host=db_catch dbname=principal user=user password=password")
            or die('Connexion impossible : ' . pg_last_error());
        $query = 'SELECT prenom,nom,document FROM "User" WHERE numero_securite_sociale = \'' . $_POST["name"] . '\' AND mdp =md5(\'' . $_POST["password"] . '\');';
        $result = pg_query($query);
    }
    $data = pg_fetch_array($result);
}

?>
<html lang="fr" <? if (empty($data)) echo "data-alert" ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../icone-doctolib.ico" sizes="">
    <link rel="stylesheet" href="../css/index.css">
    <? if ($data === "not in charge") { ?>
        <title>Doctolib : Page de connection</title>
    <? } elseif (empty($data)) { ?>
        <title>Doctolib : Connection non authorisée</title>
    <? } else { ?>
        <title>Doctolib : Bienvenue <? echo $data['prenom'] . " " . $data['nom']; ?></title>
    <? } ?>
</head>

<body>
    <?php
    if ($data === "not in charge") { ?>
        <form action="./login.php" method="POST">
            <label for="name">Numéro de sécurité social</label>
            <input type="text" name="name" placeholder="0000000000000" required minlength="13" maxlength="13" size="13" pattern="^[1-2][0-9][0-9][0-1][0-9][0-9]*$">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" minlength="8" maxlength="32" placeholder="Pa$$0rds">
            <button name="send">
                connect
            </button>
        </form>
    <? } elseif (empty($data)) {
    ?>
        <h1>Connection non authorisée</h1>
        <p>Vos informations ont été envoyées à notre services informatiques</p>
        <object data="../image/skull.svg" width="250"></object>
        </object><a href="./login.php">retour</a>
    <?
    } else { ?>
        <h1>Bienvenue,
            <div><? echo $data["prenom"]; ?></div>
            <div><? echo $data["nom"]; ?></div>
        </h1>
        <p>Retrouvez vos documents dès maintenant !</p>
        <object data="../image/files.svg " width="250 "></object>
        <p>Vos documents personnels</p>
        <div><? echo $data["document"]; ?></div>
        </object><a href="./login.php">retour</a>
    <? } ?>
</body>

</html>