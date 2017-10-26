<?php

// VEHICULE MANAGER
Class VehiculeManager{

private $_db;


  // CONSTRUCTEUR

  public function __construct($db){
    $this-> setDb($db);
  }

  // SETTER DB
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }



// CRUD
public function getList()
{
  $requete = $this->_db->prepare( ' SELECT * FROM Vehicules');
  $requete->execute();

  $donnees = $requete->fetchAll(PDO::FETCH_ASSOC);

  return $donnees;
}

    // public function add(Cat $chat)
    // {
    //
    //   $requete = $this->_db->prepare('INSERT INTO chats(nom, age, sexe, couleur)
    //                             VALUES(:nom, :age, :sexe, :couleur)');
    //
    //                       $requete->bindValue(':nom', $chat->getNom());
    //                       $requete->bindValue(':age', $chat->getAge(), PDO::PARAM_INT);
    //                       $requete->bindValue(':sexe', $chat->getSexe(), PDO::PARAM_INT);
    //                       $requete->bindValue(':couleur', $chat->getCouleur());
    //
    //             $requete->execute();
    // }
    //
    //
    // public function delete(Cat $chat)
    // {
    //   $this->_db->exec('DELETE FROM chats WHERE id = ' . $chat->getId());
    // }
    //
    //
    // public function get($id)
    // {
    //   $id =  (int) $id;
    //   $requete = $this->$db->query('SELECT nom, age, sexe, couleur FROM chats WHERE id = ' . $chat->$id());
    //   $donnees = $requete->fetch(PDO::FETCH_ASSOC);
    //   return new Cat ($donnees);
    // }
    //

    // public function update(Personnage $perso)
    // {
      // Prépare une requête de type UPDATE.
      // Assignation des valeurs à la requête.
      // Exécution de la requête.
    }

  


 ?>
