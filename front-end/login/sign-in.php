<head>
    <link rel="stylesheet" href="../css/login.css">
<?php $title = 'Connexion';

// Log de la page visitée
require_once $_SERVER['DOCUMENT_ROOT'] . '/front-end/script.php';
logPage($title);

include_once('../includes/head.php');
include_once('../includes/message.php'); ?>

<?php 
    // Connexion à la BDD
    require_once '../script.php';
    $bdd = PDOConnect();
    
    // Écrire la requête SELECT à trous
    $q = 'SELECT id_captcha,question FROM CAPTCHA ORDER BY RAND() LIMIT 1;';
    
    // Préparer la requête
    $req = $bdd->prepare($q);

    // Exécuter la requête 
    $req->execute([]);

// Récupérer les résultats dans un tableau $captcha
$captcha = $req->fetch(PDO::FETCH_ASSOC);

?>

<body>
    <?php include('../includes/header.php'); ?>

    <main>
   
            <form 
                class="d-flex flex-column my-4 mx-auto bg-body-secondary bg-opacity-75 p-3 rounded-4 login-window"
                action="verif-sign-in.php"
                method="post">
                <h2 class=" text-center my-3">Connexion</h2>
                <?php if(isset($_GET['message']) && !empty($_GET['message'])) {
                    alertWarning('Erreur', $_GET['message']);

                }
                ?>
                <?php
                if(isset($_GET['success']) && !empty($_GET['success'])) {
                    alertSuccess('Succès', $_GET['success']);
                }
                ?>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="nom@exemple.com">
                    <label for="floatingInput">Adresse mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <hr>

                <h2 class="my-3 text-center">Captcha de vérification</h2>
                <?php
                
                echo '<span class="my-3 h4">' . $captcha['question'] . '</span>';
                
                echo '<input type="hidden" name="captcha_id"' . 'value="' . $captcha['id_captcha'] . '">';
                ?>


                <div class="form-floating">
                    <input type="captcha" name="captcha_reponse" class="form-control" id="floatingText" placeholder="Réponse">
                    <label for="floatingText">Réponse</label>
                </div>
                <button class="btn btn-primary align-self-end my-3" type="submit">Connexion</button>
            </form>

    </div>
    </main>

<?php include('../includes/footer.php') ?>

</body>