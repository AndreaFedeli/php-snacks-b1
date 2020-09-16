<?php
$nome = $_GET['nome'];
$email = $_GET  ['email'];
$eta = $_GET ['eta'];

if( empty($name) || empty($email) || empty($age) ) {
  echo 'Accesso Negato';
}
elseif (strlen($name) <= 3) {
  echo 'Accesso Negato';
}
elseif( !strpos($email, '@') || !strpos($email, '.') ) {
  echo 'Accesso Negato';
}
elseif (!is_numeric($age)) {
  echo 'Accesso Negato';
}
else {
  echo 'Accesso Riuscito';
 ?>
