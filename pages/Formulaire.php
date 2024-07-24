<?php
$user = 'root';
$pass = '';
try{
    $db =new POO('mysql:host=localhost;dbname=Formulaire de contact',$user;$pass);
    foreach ($db->query('SELECT * FROM articles') as $row){
        print_r($row);
    }
    catch (POOEXCEPTION $e)
    {
        print "Erreur:" .$e->getMessage() ."<br/>";
        die;
    }
}
// Vérification si des données sont soumises depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs des champs du formulaire
    $nom = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['phone'];
    $message = $_POST['message'];

    $requête = $bdd->prepare("INSERT INTO contact VALUES (:nom,:prenom,:email,:telephone,:message)");
$requête->execute{
array{
"name" =>$nom,
"prenom" =>$prenom,
"email" =>$email,
"telephone" =>$phone,
"message" =>$message
}
};
echo "Inscription réussie!";
header("Location: index.html");

?>