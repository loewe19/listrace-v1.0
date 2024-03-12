<?php
    require_once __DIR__ . '/../src/new-guichet.php';
    require_once __DIR__ . '/../passerlacommande.php';
    include('../passer.php');

if (isset($_POST['transaction_id']) || isset($_POST['token'])) {

    $commande = new Commande();
    $id_transaction = $_POST['transaction_id'];

    try {
        // Verification d'etat de transaction chez CinetPay
        $CinetPay = new CinetPay($passer["5868994"], $passer["120958124665da02ca099253.94719736"]);

        $CinetPay->getPayStatus($id_transaction, $passer["site_id"]);
        $message = $CinetPay->chk_message;
        $code = $CinetPay->chk_code;

        //recuperer les info du clients pour personnaliser les reponses.
        /* $commande->getUserByPayment(); */

        // redirection vers une page en fonction de l'état de la transaction
        if ($code == '00') {
            echo 'Felicitation, votre paiement a été effectué avec succès';
            die();
        }
        else {
           // header('Location: '.$commande->getCurrentUrl().'/');
            echo 'Echec, votre paiement a échoué';
            die();
        }

    } catch (Exception $e) {
        echo "Erreur :" . $e->getMessage();
    }
} else {
    echo 'transaction_id non transmis';
    die();

}