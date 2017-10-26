<?php


// APPEL DES CLASSES
function chargerClasses($classe)
{
  require '../Entities/' . $classe . '.php';
}
spl_autoload_register('chargerClasses');


// APPEL VEHICULE MANAGER
require('./model/VehiculeManager.php');

// SET DB
$db = new PDO('mysql:host=localhost;dbname=CarHandle', 'root', 'Paperback1966');

// SET VEHICULE MANAGER
$vehiculeManager = new VehiculeManager($db);

// GET ALL VEHICULES
$vehicules = $vehiculeManager->getList();


// APPEL DE INDEX VIEW
require './views/IndexView.php';

 ?>
