<!DOCTYPE html>
<html>
<body>
<?php
$emailErr = $passwordErr = "";
$email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["email"])) {
    $emailErr = "Remplir le champs mail";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "format d'adresse non valide! Réessayer";
    } else {
    	$emailErr = "Adresse mail valide";
    	
    }

  }
if (empty($_POST["password"])) {
	$passwordErr = "remplir le champs mot de passe";
} else {

	$password = test_input($_POST["password"]);
 $uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
     $passwordErr = 'le mot de passe doit comporter au moins 8 caractères, avoir au moins un chiffre de 0 à 9, comporter un caractères spécial : *&%$#@ !??/ et avoir au au moins une lettre majuscule';
}else{
     $passwordErr = 'Mot de passe valide';
   
}
 }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>Addresse mail</label>
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <label>Mot de passe</label>  
  <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
    <input type="submit" name="submit" value="Envoyer">
</form>
<br><br>

</body>
</html>