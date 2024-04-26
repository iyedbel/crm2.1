<?php

$nom = "";
$prenom = "";
$telephone = "";
$email = "";
$errorMessage = "";
$successMessage = "";
$id = "";

// Votre connexion à la base de données
$connection = new mysqli("localhost", "root", "", "fichier");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["id"])) {
        header("location:/CRM/index1.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM client WHERE id='$id'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:/CRM/edit.php");
        exit;
    } else {
        $nom = $row["nom"];
        $prenom = $row["prenom"];
        $telephone = $row["telephone"];
        $email = $row["email"];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    if (empty($nom) || empty($prenom) || empty($telephone) || empty($email)) {
        $errorMessage = "Veuillez remplir tous les champs.";
    } else {
        $sql = "UPDATE client SET nom='$nom', prenom='$prenom', telephone='$telephone', email='$email' WHERE id=$id";
        if ($connection->query($sql) === TRUE) {
            $successMessage = "Client mis à jour avec succès.";
        } else {
            $errorMessage = "Erreur lors de la mise à jour du client: " . $connection->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau client</title>
    <!-- Liens vers Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajoutez votre propre CSS personnalisé ici si nécessaire */
    </style>
</head>

<body>
    <div class="container my-5">
        <h2 class="mb-4">Nouveau client</h2>

        <?php if (!empty($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($successMessage)) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group row">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrez votre nom" value="<?php echo $nom; ?>">
                </div>
            </div>
            <!-- Autres champs du formulaire -->
            <div class="form-group row">
                <div class="col-sm-6 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <a href="/CRM/index1.php" class="btn btn-secondary">Annuler</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Scripts Bootstrap JS requis -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
