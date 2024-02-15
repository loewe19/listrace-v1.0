<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
  // N'affiche rien en cas d'échec de la connexion
} else 
  // Requête pour récupérer les informations de l'utilisateur
  $sql = "SELECT * FROM formulaire WHERE username=".$_POST['username']." AND password=".$_POST['password'].";
  $result = $conn->query($sql);
}
  if ($result->num_rows > 0) {
    // Affichage des informations de l'utilisateur
    while($row = $result->fetch_assoc()) {
      echo  . $row["root"]. " - Email: " . $row["email"]. "<br>";
}
 else {
    // N'affiche rien en cas d'échec de la récupération des informations de l'utilisateur
  


// Fermeture de la connexion
$conn->close();
?>