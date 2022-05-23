<!DOCTYPE html>
<?php
if ($_POST["name"]) {
    sleep(random_int(0, 20) / 10);
}
?>
<html lang="fr" <? if ($_POST["name"]) { echo "data-alert"; } ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icone-doctolib.ico" sizes="">
    <link rel="stylesheet" href="css/index.css">
    <? if ($_POST["name"]) { ?>
        <title>Doctolib : Page de connection</title>
    <? }else{ ?>
        <title>Doctolib : Connection non authorisée</title>
        <?}?>
</head>

<body>
    <?php
    if ($_POST["name"]) {
    ?>
        <h1>Connection non authorisée</h1>
        <p>Vos informations ont été envoyées à notre services informatiques</p>
        <object data="image/skull.svg" width="250">
        </object><a href="./login.php">retour</a>
    <?php
    } else {
    ?>
        <form action="./login.php" method="POST">
            <label for="name">Numéro de sécurité social</label>
            <input type="text" name="name" placeholder="0000000000000" required minlength="13" maxlength="13" size="13" pattern="^[1-2][0-9][0-9][0-1][1-9][0-9]*$">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" require minlength="8" maxlength="32" placeholder="Pa$$0rds">
            <button name="send">
                connect
            </button>
        </form>
    <? } ?>
</body>

</html>