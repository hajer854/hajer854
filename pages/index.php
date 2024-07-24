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
    ?>